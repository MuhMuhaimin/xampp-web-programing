<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BroilerKu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-ligh text-dark text-center">
  <?php echo "<h1>Selamat Datang, Admin !</h1>"; ?>
</div>

<nav class="navbar navbar-expand-lg bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="tabel.php">Ayam</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="grafik.php">Pakan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="catatan.php">Catatan</a>
    </li>     
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>

<div class="container mt-3">
  <img src="whatsapp-i-1589955616.jpeg" class="mx-auto d-block" style="width:50%"> 
</div>
  
</body>
</html>


