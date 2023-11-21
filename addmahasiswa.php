<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
 
<body>
    <p>
    <?php
    include './koneksi.php';

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no = $_POST['no'];

    $data = "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$ttl', '$alamat', '$email', '$no')";

    if (mysqli_query($koneksi, $data)) {
        echo '<script>alert("Data berhasil disimpan");</script>'; }
    else {
        echo '<script>alert("Gagal menyimpan data");</script>';
    }
    ?>
    </p>
    <p>Silahkan Kembali Ke Halaman Pertama</p>
    <a href="index.php"><button>Halaman Pertama</button></a>
</body>
 
</html>


