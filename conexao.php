<?php
$servername = "localhost";
$username = "root";
$password = '';
$db = parse_url(getenv("DATABASE_URL"));
$db["path"] = ltrim($db["path"], "/");

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Falha na conexao: " . mysqli_connect_error());
}

?>