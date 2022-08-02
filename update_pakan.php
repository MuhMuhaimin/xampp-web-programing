<?php
session_start();
include"koneksi.php"; // masukan konekasi DB
// ambil variable data 
$Pakai=$_POST['Pakai'];
$No = @$_GET['No']; // ambil data ID di URL
//Proses query update
$update=mysqli_query($conn,"update pakan set Pakai='$Pakai'where No='$No'");
if($update){

// pesan dengan sistem session
$_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil diupdate.</font>';
header("location:grafik.php"); // kembali ke halaman tampil
}else{
echo "Gagal update data!";
}
?>