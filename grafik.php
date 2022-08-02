<?php
include_once 'koneksi.php';
$result = mysqli_query($conn,"SELECT * FROM Pakan");

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
 <head>
   <title>Penggunaan Pakan BroilerKu</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>    
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
 </head>
<body>

<div class="container-fluid p-5 bg-ligh text-dark text-center">
  <h2>Penggunaan Pakan BroilerKu</h2>
</div>
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="masuk.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tabel.php">Ayam</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="catatan.php">Catatan</a>
    </li>    
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>


<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="container mt-3 text-center">
<table data-toggle="table" 
       data-classes="table table-hover table-condensed"
       data-striped="true"
       data-sort-name="No"
       data-sort-order="desc"
       >
    <thead>
    <tr>
        <th class="col-xs-1 text-center" data-field="No" data-sortable="true">Hari</th>
        <th class="col-xs-1 text-center" data-field="Waktu" data-sortable="true">Waktu</th>
        <th class="col-xs-1 text-center" data-field="Pakai" >Pakan Pakai</th>
        <th class="col-xs-1 text-center" data-field="Edit | Hapus" >Opsi</th>
    </tr>
    </thead>
			<?php
			$i=1;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $i; ?></td>
		<td><?php echo $row["Waktu"]; ?></td>
		<td><?php echo $row["Pakai"]; ?></td>
    <td><a href="edit_pakan.php?No=<?php echo $row['No']; ?>">Edit</a> | <a href="javascript:del(<?php echo $row['No'];?>)">Hapus</a></td>
      </tr>
    <script language="JavaScript" type="text/javascript"> function del(id){ if (confirm("yakin akan menghapus data ini?")){ window.location.href = 'hapus_data.php?No=' + id; }} </script>
			<?php
			$i++;
			}
			?>
</table>
</div>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>