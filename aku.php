<?php
include 'koneksi.php';
if(isset($_POST['Submit']))
{    
     $Bobot = $_POST['Bobot'];
     $Obat = $_POST['Obat'];
     $Catatan = $_POST['Catatan'];

     $sql1 = "INSERT INTO aku (Bobot,Obat,Catatan) VALUES ('$Bobot','$Obat','$Catatan')";     

     mysqli_query($conn, $sql1);

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
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Masukan Catatan</p>
            <div class="input-group">
                <input type="Bobot" placeholder="Bobot Ayam Hari ini" name="Bobot"  required>
            </div>
            <div class="input-group">
                <input type="Obat" placeholder="Obat Yang Digunakan" name="Obat" required>
            </div>
            <div class="input-group">
                <input type="Catatan" placeholder="Catatan Hari ini" name="Catatan" required>
            </div>                      
            <div class="input-group">
                <button name="Submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>