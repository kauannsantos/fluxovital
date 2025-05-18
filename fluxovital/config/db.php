<?php
// Dados da conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fluxovital";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
