<?php
$servername = "localhost";
$username = "root";
$password = '';
$db = "patrimonio_fs";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Falha na conexao: " . mysqli_connect_error());
}

?>