<?php

$host = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = 'pet_love';

$conn = new mysqli($host, $username, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco: " . $conn->connect_error);
}

?>