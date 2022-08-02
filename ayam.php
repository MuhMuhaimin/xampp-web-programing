<?php
include 'koneksi.php';
if(isset($_POST['Submit']))
{    
     $Mati = $_POST['Mati'];
     $Jual = $_POST['Jual'];
     $Kasih = $_POST['Kasih'];
     $Pakai = $_POST['Pakai'];
     $sql1 = "INSERT INTO ayam(Mati,Jual,Kasih) VALUES ('$Mati','$Jual','$Kasih')";     
     $sql2 = "INSERT INTO pakan(Pakai) VALUES ('$Pakai')";
     mysqli_query($conn, $sql1);
     mysqli_query($conn, $sql2);
}
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Masukan Data Kandang</title>
</head>
<body>
 
    <div class="container">
        <form action="" method="POST" class="login-email" autocomplete="off">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Masukan Data Ayam</p>
            <div class="input-group">
                <input type="Mati" placeholder="Jumlah Ayam Mati" name="Mati"  required>
            </div>
            <div class="input-group">
                <input type="Jual" placeholder="Jumlah Ayam Terjual" name="Jual" required>
            </div>
            <div class="input-group">
                <input type="Kasih" placeholder="Jumlah Ayam Kasih" name="Kasih" required>
            </div>
            <div class="input-group">
                <input type="Pakai" placeholder="Jumlah Pakan Pakai" name="Pakai"  required>
            </div>                        
            <div class="input-group">
                <button name="Submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>