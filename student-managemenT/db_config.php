<?php
// Configuração de conexão com a base de dados para integridade dos dados 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "student_management";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
