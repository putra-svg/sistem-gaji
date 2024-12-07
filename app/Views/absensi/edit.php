<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Absensi</h2>
        <form action="/absensi/update/<?= $absensi['id']; ?>" method="POST">
            <div class="mb-3">
                <label for="karyawan_id" class="form-label">Nama Karyawan</label>
                <select name="karyawan_id" id="karyawan_id" class="form-control">
                <option value="" disabled selected>-- Pilih Karyawan --</option>
                    <?php foreach ($karyawan as $kar): ?>
                        <option value="<?= $kar['id']; ?>" <?= ($kar['id'] == $absensi['karyawan_id']) ? 'selected' : ''; ?>><?= $kar['nama_karyawan']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $absensi['tanggal']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Hadir" <?= ($absensi['status'] == 'Hadir') ? 'selected' : ''; ?>>Hadir</option>
                    <option value="Sakit" <?= ($absensi['status'] == 'Sakit') ? 'selected' : ''; ?>>Sakit</option>
                    <option value="Izin" <?= ($absensi['status'] == 'Izin') ? 'selected' : ''; ?>>Izin</option>
                    <option value="Alpha" <?= ($absensi['status'] == 'Alpha') ? 'selected' : ''; ?>>Alpha</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
