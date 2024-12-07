<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penggajian</title>
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e6e6e6, #d9d9d9);
            margin-left: 260px; /* Adjusted to match sidebar */
            overflow-x: hidden;
            color: #333;
        }

        .container {
            margin: 30px auto;
            padding: 15px 25px;
            max-width: 85%;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #495057;
            text-align: center;
            margin-bottom: 20px;
        }

        h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            margin: 10px auto 0;
            background: #495057;
            border-radius: 2px;
        }

        .btn {
            font-size: 0.9rem;
            padding: 8px 15px;
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #4a5568, #6c757d);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #6c757d, #4a5568);
            box-shadow: 0 3px 10px rgba(108, 117, 125, 0.2);
        }

        .table {
            margin-top: 20px;
            width: 100%;
            overflow: hidden;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .table thead th {
            background: #495057;
            color: white;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            padding: 12px;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: #f1f1f1;
            transform: scale(1.01);
        }

        .table td, .table th {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .btn-info, .btn-danger {
            padding: 6px 12px;
            font-size: 0.8rem;
            border-radius: 15px;
        }

        .btn-info {
            background: #17a2b8;
            color: white;
            border: none;
        }

        .btn-info:hover {
            background: #138496;
            transform: scale(1.05);
            box-shadow: 0 2px 6px rgba(19, 132, 150, 0.3);
        }

        .btn-danger {
            background: #e57373;
            color: white;
            border: none;
        }

        .btn-danger:hover {
            background: #d9534f;
            transform: scale(1.05);
            box-shadow: 0 2px 6px rgba(217, 83, 79, 0.3);
        }

        @media (max-width: 768px) {
            body {
                margin-left: 0;
            }

            .container {
                margin: 15px auto;
                padding: 10px;
            }

            h2 {
                font-size: 1.5rem;
            }

            .table {
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <?= $this->include('sidebar'); ?>

    <!-- Main Content -->
    <div class="container">
        <h2>Data Penggajian</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="/penggajian/create" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Karyawan</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan</th>
                    <th>Total Gaji</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($penggajian as $item): ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['nama_karyawan']; ?></td>
                        <td><?= 'Rp. ' . number_format($item['gaji_pokok'], 0, ',', '.'); ?></td>
                        <td><?= 'Rp. ' . number_format($item['tunjangan'], 0, ',', '.'); ?></td>
                        <td><?= 'Rp. ' . number_format($item['total_gaji'], 0, ',', '.'); ?></td>
                        <td>
                            <a href="/penggajian/edit/<?= $item['id']; ?>" class="btn btn-info btn-sm me-2">Edit</a>
                            <button 
                                class="btn btn-danger btn-sm" 
                                onclick="confirmDelete(<?= $item['id']; ?>, '<?= $item['nama_karyawan']; ?>')">
                                Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Konfirmasi Penghapusan -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data penggajian untuk <strong id="deptName"></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a id="confirmDeleteBtn" href="#" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id, name) {
            document.getElementById('deptName').textContent = name;
            document.getElementById('confirmDeleteBtn').href = `/penggajian/delete/${id}`;
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        }
    </script>
</body>
</html>
