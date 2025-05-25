<?php
session_start();

if (!isset($_SESSION['doador_id'])) {
    header("Location: cadastro_doador.php");
    exit();
}

include_once(__DIR__ . '/../../../config/db.php'); // ou corrija o caminho real

// pegar os dados do POST e limpar
$nome = trim($_POST['nome']);
$idade = (int) $_POST['idade'];
$tipo_sang = strtoupper(trim($_POST['tipo_sang']));
$bebe_alcool = $_POST['bebe_alcool'];
$resfriado = $_POST['resfriado'];
$cirurgia_6m = $_POST['cirurgia_6m'];
$transfusao = $_POST['transfusao'];
$doenca_infecciosa = $_POST['doenca_infecciosa'];
$hepatite_11_anos = $_POST['hepatite_11_anos'];
$hiv_hepatite = $_POST['hiv_hepatite'];
$fuma_droga = $_POST['fuma_droga'];
$peso_50kg = $_POST['peso_50kg'];
$estado_geral = $_POST['estado_geral'];
$obs = trim($_POST['obs']);

// validações simples podem ser feitas aqui

try {
    $sql = "INSERT INTO questionario_sangue 
    (nome, idade, tipo_sang, bebe_alcool, resfriado, cirurgia_6m, transfusao, doenca_infecciosa, hepatite_11_anos, hiv_hepatite, fuma_droga, peso_50kg, estado_geral, obs)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome, $idade, $tipo_sang, $bebe_alcool, $resfriado, $cirurgia_6m, $transfusao, $doenca_infecciosa, $hepatite_11_anos, $hiv_hepatite, $fuma_droga, $peso_50kg, $estado_geral, $obs]);

    header("Location: sucesso.php"); // ou onde quiser redirecionar
    exit();

} catch (PDOException $e) {
    echo "Erro ao salvar dados: " . $e->getMessage();
}
?>
