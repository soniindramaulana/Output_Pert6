<?php

include "koneksi.php";

$nim =(int)$_POST['nim_mhs'];
$idprodi =(int)$_POST['id_prodi'];
$nama =$_POST['nama_mhs'];
$alamat =$_POST['alamat'];

$sql="INSERT INTO tabel_mhs VALUES(null,'$idprodi','$nim','$nama','$alamat')";
$tampil=mysqli_query($con,$sql);

if(!$tampil){
    echo "Eksekusi Tambah Data Mahasiswa Gagal";
}else{
    echo "Eksekusi Tambah Data Mahasiswa berhasil <br>";
    echo "<a href ='data_mhs.php'>Show data</a>";
}
?>