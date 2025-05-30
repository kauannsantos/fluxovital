<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION['usuario_id']) || $_SESSION['tipo_usuario'] !== 'doador') {
    header('Location: /fluxovital/page/cadastro/doador/login/login_doador.php');
    exit();
}

// Ajuste o caminho para o seu arquivo db.php conforme sua estrutura real
include_once(__DIR__ . '/../../../config/db.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_paciente = $_POST['nome_paciente'] ?? '';
    $rg = $_POST['rg'] ?? '';
    $especialidade = $_POST['especialidade'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $hospital = $_POST['hospital'] ?? '';
    $turno = $_POST['turno'] ?? '';
    $forma_contato = $_POST['forma_contato'] ?? '';
    $data_agendamento = $_POST['data_agendamento'] ?? '';
    $hora_agendamento = $_POST['hora_agendamento'] ?? '';

    if (
        $nome_paciente && $rg && $especialidade && $estado && $cidade &&
        $hospital && $turno && $forma_contato && $data_agendamento && $hora_agendamento
    ) {
        // Use a conexão mysqli ($conn) do seu db.php
        $sql = "INSERT INTO agendamento (
                    nome_paciente, rg, especialidade, estado, cidade, hospital,
                    turno, forma_contato, data_agendamento, hora_agendamento
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        $stmt->bind_param(
            "ssssssssss",
            $nome_paciente,
            $rg,
            $especialidade,
            $estado,
            $cidade,
            $hospital,
            $turno,
            $forma_contato,
            $data_agendamento,
            $hora_agendamento
        );

        if ($stmt->execute()) {
            header('Location: agendamento_sucesso.php');
            exit();
        } else {
            echo "Erro ao agendar: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Preencha todos os campos obrigatórios!";
    }
} else {
    header('Location: agendar_doacao.php');
    exit();
}
?>
