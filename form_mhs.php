<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH MAHASISWA</title>
</head>
<body>
    <h1>FORM TAMBAH MAHASISWA</h1>
    <form method="post" action="action.php">
        NIM Mahasiswa : <input type="number" name="nim_mhs" placeholder="214x110x"><br>
        ID Prodi : <input type="number" name="id_prodi" placeholder="1-7"><br>
        Nama Mahasiswa : <input type="text" name="nama_mhs"><br>
        Alamat Mahasiswa : <input type="text" name="alamat"><br>
        <button type="submit">
            Kirim
        </button>
    </form>
</body>
</html>