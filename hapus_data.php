<?php
session_start();
include"koneksi.php"; // masukan konekasi DB
// ambil variable ID dari URL
$No = @$_GET['No'];
//Proses query hapus data
$del=mysqli_query($conn,"delete from pakan where No='$No'");
$del1=mysqli_query($conn,"delete from aku where No='$No'");
$del2=mysqli_query($conn,"delete from ayam where No='$No'");
if($del){
$_SESSION['pesan'] = "Ok, 1 data berhasil dihapus.";
header("location:grafik.php"); // kembali ke tampil data
}else{
echo "Gagal hapus data!";
}
if($del1){
$_SESSION['pesan'] = "Ok, 1 data berhasil dihapus.";
header("location:catatan.php"); // kembali ke tampil data
}else{
echo "Gagal hapus data!";
}
if($del2){
$_SESSION['pesan'] = "Ok, 1 data berhasil dihapus.";
header("location:tabel.php"); // kembali ke tampil data
}else{
echo "Gagal hapus data!";
}

?>

