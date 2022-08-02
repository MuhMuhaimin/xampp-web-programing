<?php
session_start();
include"koneksi.php"; // masukan konekasi DB
// ambil variable data 
$Mati=$_POST['Mati'];
$Jual=$_POST['Jual'];
$Kasih=$_POST['Kasih'];
$No = @$_GET['No']; // ambil data ID di URL
//Proses query update
$update=mysqli_query($conn,"update ayam set Mati='$Mati', Jual='$Jual', Kasih='$Kasih' where No='$No'");
if($update){

// pesan dengan sistem session
$_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil diupdate.</font>';
header("location:tabel.php"); // kembali ke halaman tampil
}else{
echo "Gagal update data!";
}
?>