<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penggajian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Penggajian</h2>
        <form action="/penggajian/update/<?= $penggajian['id']; ?>" method="POST">
            <div class="mb-3">
                <label for="karyawan_id" class="form-label">Karyawan</label>
                <select id="karyawan_id" name="karyawan_id" class="form-control" required>
                    <option value="" disabled>-- Pilih Karyawan --</option>
                    <?php foreach ($karyawan as $kar): ?>
                        <option value="<?= $kar['id']; ?>" <?= $penggajian['karyawan_id'] == $kar['id'] ? 'selected' : ''; ?>>
                            <?= $kar['nama_karyawan']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" 
                       value="<?= 'Rp. ' . number_format($penggajian['gaji_pokok'], 0, ',', '.'); ?>" 
                       placeholder="Rp. 0" oninput="formatRupiah(this)" required>
            </div>
            <div class="mb-3">
                <label for="tunjangan" class="form-label">Tunjangan</label>
                <input type="text" class="form-control" id="tunjangan" name="tunjangan" 
                       value="<?= 'Rp. ' . number_format($penggajian['tunjangan'], 0, ',', '.'); ?>" 
                       placeholder="Rp. 0" oninput="formatRupiah(this)" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script>
        function formatRupiah(input) {
            let value = input.value.replace(/[^,\d]/g, ''); // Hanya angka
            let parts = value.split(',');
            let formatted = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            input.value = 'Rp. ' + formatted + (parts[1] ? ',' + parts[1] : '');
        }
    </script>
</body>
</html>
