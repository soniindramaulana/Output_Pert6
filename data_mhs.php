<?php
include "koneksi.php";
$sql="SELECT id_mhs,nama_mhs,nama_fakultas,alamat FROM tabel_mhs m,tabel_fakultas f WHERE m.id_fakultas=f.id_fakultas";
$tampil=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    a{
      color: white;
      text-decoration:none;
    }
  </style>
</head>
<body style="background: linear-gradient(to right,#b3b310,#0a0a00);">

<div class="container mt-3">
  <h2>DATA MAHASISWA TEKNIK</h2>
  <p>Data ini dari tabel MySQL:</p>  
  <button type="button" class="btn btn-warning" ><a href="form_mhs.php" >TAMBAH</a></button>          
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>ID MAHASISWA</th>
        <th>NAMA PRODI</th>
        <th>NAMA MAHASISWA</th>
        <th>ALAMAT</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while($baris=mysqli_fetch_assoc($tampil)){
        ?>
      <tr>
        <td><?php echo $baris["id_mhs"]; ?></td>
        <td><?php echo $baris["nama_fakultas"]; ?></td>
        <td><?php echo $baris["nama_mhs"]; ?></td>
        <td><?php echo $baris["alamat"]; ?></td>
        <td>
        <button type="button" class="btn btn-info">EDIT</button>
        <button type="button" class="btn btn-danger">DELETE</button>
        </td>
      </tr>
       <?php } ?>
</body>
</html>
