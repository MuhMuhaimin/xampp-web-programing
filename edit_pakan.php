<?php
include('koneksi.php');
$No = (isset($_GET['No']))?$_GET['No']:'';
 
$query = mysqli_query($conn, "select * from pakan where No='$No'");
$data = mysqli_fetch_array($query);

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
        <form action="update_pakan.php?No=<?php echo $No ?>" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Masukan Data Ayam</p>
            <div class="input-group">
                <input type="Pakai" placeholder="Jumlah Pakan Hari Ini" name="Pakai" value="<?php echo $data['Pakai']; ?>"  required>
            </div>                 
            <div class="input-group">
                <button name="Submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>