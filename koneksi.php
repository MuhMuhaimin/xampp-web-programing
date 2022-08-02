<?php

$servername = "localhost";
// REPLACE with your Database name
$dbname = "u1367882_dbudang";
// REPLACE with Database user
$username = "root";
// REPLACE with Database user password
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database MYSQL Tidak Terhubung");

function cari($keyword){
	$query= "SELECT * FROM pakan WHERE Pakai = ' $keyword'";
}

?> 