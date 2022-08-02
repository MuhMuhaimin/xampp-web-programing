<?php
session_start();
include"koneksi.php"; // masukan konekasi DB
// ambil variable data 
$Bobot=$_POST['Bobot'];
$Obat=$_POST['Obat'];
$Catatan=$_POST['Catatan'];
$No = @$_GET['No']; // ambil data ID di URL
//Proses query update
$update=mysqli_query($conn,"update aku set Bobot='$Bobot', Obat='$Obat', Catatan='$Catatan' where No='$No'");
if($update){

// pesan dengan sistem session
$_SESSION['pesan'] = '<font color=green>OK, 1 data berhasil diupdate.</font>';
header("location:catatan.php"); // kembali ke halaman tampil
}else{
echo "Gagal update data!";
}
?>