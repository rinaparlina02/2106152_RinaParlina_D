<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Identitas Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Form Identitas Mahasiswa</h1>
        <form action="addmahasiswa.php" method="post">
            <label for="nim">NIM</label>
            <input type="number" name="nim" placeholder="Wajib Diisi" class="" maxlength="7" required>

            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Wajib Diisi" class="" maxlength="20" required>

            <label for="ttl">Tanggal Lahir </label>
            <input type="date" name="ttl" placeholder="Wajib Diisi" class=""  required>

            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" placeholder="Wajib Diisi" class="" required>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Wajib Diisi" class="" maxlength="30" required>

            <label for="no">No HP</label>
            <input type="number" name="no" placeholder="Optional" class="" minlength="12">

            <button type="submit" id="kirim">Simpan</button>
            <button type="cancel" id="batal">Batal</button>
        </form>
    </div>
</body>
</html>