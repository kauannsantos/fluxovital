<?php
// Dados da conexão
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fluxovital";
$port = 3307;  // adicione a porta desejada aqui

// Criar conexão com porta
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Checar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
