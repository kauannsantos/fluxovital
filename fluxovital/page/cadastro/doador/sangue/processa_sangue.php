<?php
session_start();

include_once(__DIR__ . '/../../../../config/db.php');

// Só deixa entrar quem está logado (cadastrado)
if (!isset($_SESSION['doador_id'])) {
    header("Location: cadastro_doador.php");
    exit();
}

// Captura dados do POST
$nome              = trim($_POST['nome'] ?? '');
$idade             = intval($_POST['idade'] ?? 0);
$tipo_sang         = strtoupper(trim($_POST['tipo_sang'] ?? ''));
$bebe_alcool       = $_POST['bebe_alcool'] ?? '';
$resfriado         = $_POST['resfriado'] ?? '';
$cirurgia_6m       = $_POST['cirurgia_6m'] ?? '';
$transfusao        = $_POST['transfusao'] ?? '';
$doenca_infecciosa = $_POST['doenca_infecciosa'] ?? '';
$hepatite_11_anos  = $_POST['hepatite_11_anos'] ?? '';
$hiv_hepatite      = $_POST['hiv_hepatite'] ?? '';
$fuma_droga        = $_POST['fuma_droga'] ?? '';
$peso_50kg         = $_POST['peso_50kg'] ?? '';
$estado_geral      = $_POST['estado_geral'] ?? '';
$obs               = trim($_POST['obs'] ?? '');

// Validação básica
$erros = [];

if ($nome === '') $erros[] = "Nome é obrigatório";
if ($idade < 16 || $idade > 70) $erros[] = "Idade inválida para doação";
if (!in_array($bebe_alcool, ['Sim', 'Não'])) $erros[] = "Selecione se ingeriu álcool";
if (!in_array($resfriado, ['Sim', 'Não'])) $erros[] = "Selecione se está resfriado";
// (Adicione validações semelhantes para os demais campos obrigatórios)

if (!empty($erros)) {
    $_SESSION['erro'] = implode("<br>", $erros);
    header("Location: form_sangue.php");
    exit();
}

// Preparar inserção com mysqli
try {
    $stmt = $conn->prepare("INSERT INTO questionario_sangue (
        nome, idade, tipo_sang, bebe_alcool, resfriado, cirurgia_6m,
        transfusao, doenca_infecciosa, hepatite_11_anos, hiv_hepatite, fuma_droga,
        peso_50kg, estado_geral, obs
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        throw new Exception("Erro ao preparar statement: " . $conn->error);
    }

    $stmt->bind_param(
        "sissssssssssss", // 14 parâmetros: 1 string, 1 int, 12 strings
        $nome, $idade, $tipo_sang, $bebe_alcool, $resfriado, $cirurgia_6m,
        $transfusao, $doenca_infecciosa, $hepatite_11_anos, $hiv_hepatite, $fuma_droga,
        $peso_50kg, $estado_geral, $obs
    );

    if (!$stmt->execute()) {
        throw new Exception("Erro ao executar statement: " . $stmt->error);
    }

    header("Location: cadastro_sucesso.php");
exit();


} catch (Exception $e) {
    $_SESSION['erro'] = "Erro ao salvar dados: " . $e->getMessage();
    header("Location: form_sangue.php");
    exit();
}
