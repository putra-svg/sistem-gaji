<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bonus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Bonus</h2>
        <form action="/bonus/update/<?= $bonus['id']; ?>" method="POST">
            <div class="mb-3">
                <label for="karyawan_id" class="form-label">Karyawan</label>
                <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                <option value="" disabled selected>-- Pilih Karyawan --</option>
                    <?php foreach ($karyawan as $k): ?>
                        <option value="<?= $k['id']; ?>" <?= $k['id'] == $bonus['karyawan_id'] ? 'selected' : ''; ?>>
                            <?= $k['nama_karyawan']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_bonus" class="form-label">Jumlah Bonus</label>
                <input type="text" class="form-control" id="jumlah_bonus" name="jumlah_bonus" value="<?= $bonus['jumlah_bonus']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
