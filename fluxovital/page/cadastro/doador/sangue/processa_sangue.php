<?php
session_start();

include __DIR__ . '/../../../config/db.php';  // ajuste conforme sua estrutura

// Só deixa entrar quem está logado (cadastrado)
if (!isset($_SESSION['doador_id'])) {
    header("Location: cadastro_doador.php");
    exit();
}

// Captura dados do POST
$nome             = trim($_POST['nome'] ?? '');
$idade            = intval($_POST['idade'] ?? 0);
$tipo_sang        = strtoupper(trim($_POST['tipo_sang'] ?? ''));
$bebe_alcool      = $_POST['bebe_alcool'] ?? '';
$resfriado        = $_POST['resfriado'] ?? '';
$cirurgia_6m      = $_POST['cirurgia_6m'] ?? '';
$transfusao       = $_POST['transfusao'] ?? '';
$doenca_infecciosa= $_POST['doenca_infecciosa'] ?? '';
$hepatite_11_anos = $_POST['hepatite_11_anos'] ?? '';
$hiv_hepatite     = $_POST['hiv_hepatite'] ?? '';
$fuma_droga       = $_POST['fuma_droga'] ?? '';
$peso_50kg        = $_POST['peso_50kg'] ?? '';
$estado_geral     = $_POST['estado_geral'] ?? '';
$obs              = trim($_POST['obs'] ?? '');

// Validação básica
$erros = [];

if ($nome === '') $erros[] = "Nome é obrigatório";
if ($idade < 16 || $idade > 70) $erros[] = "Idade inválida para doação";
if (!in_array($bebe_alcool, ['Sim', 'Não'])) $erros[] = "Selecione se ingeriu álcool";
if (!in_array($resfriado, ['Sim', 'Não'])) $erros[] = "Selecione se está resfriado";
// (faça validação semelhante para os outros campos obrigatórios)

if (!empty($erros)) {
    $_SESSION['erro'] = implode("<br>", $erros);
    header("Location: formulario_sangue.php");
    exit();
}

// Preparar inserção - Ajuste o nome da tabela e colunas conforme seu banco
$stmt = $conn->prepare("INSERT INTO doacao_sangue (
    doador_id, nome, idade, tipo_sang, bebe_alcool, resfriado, cirurgia_6m, transfusao, doenca_infecciosa, hepatite_11_anos, hiv_hepatite, fuma_droga, peso_50kg, estado_geral, obs
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param(
    "isissssssssssss",
    $_SESSION['doador_id'], $nome, $idade, $tipo_sang, $bebe_alcool, $resfriado, $cirurgia_6m, $transfusao,
    $doenca_infecciosa, $hepatite_11_anos, $hiv_hepatite, $fuma_droga, $peso_50kg, $estado_geral, $obs
);

if ($stmt->execute()) {
    $_SESSION['msg_sucesso'] = "Formulário enviado com sucesso!";
    header("Location: formulario_sangue.php");  // ou página de confirmação
    exit();
} else {
    $_SESSION['erro'] = "Erro ao salvar dados: " . $stmt->error;
    header("Location: formulario_sangue.php");
    exit();
}
?>
