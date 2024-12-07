<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lembur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Lembur</h2>
        <form action="/lembur/update/<?= $lembur['id']; ?>" method="POST">
            <div class="mb-3">
                <label for="karyawan_id" class="form-label">Nama Karyawan</label>
                <select name="karyawan_id" id="karyawan_id" class="form-control">
                <option value="" disabled selected>-- Pilih Karyawan --</option>
                    <?php foreach ($karyawan as $kar): ?>
                        <option value="<?= $kar['id']; ?>" <?= ($kar['id'] == $lembur['karyawan_id']) ? 'selected' : ''; ?>><?= $kar['nama_karyawan']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $lembur['tanggal']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jam_lembur" class="form-label">Jam Lembur</label>
                <input type="text" class="form-control" id="jam_lembur" name="jam_lembur" value="<?= $lembur['jam_lembur']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
