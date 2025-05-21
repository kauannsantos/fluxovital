
<?php 
session_start();
include_once(__DIR__ . '/../../config/db.php');

// Exibir erros (desative em produção)
ini_set('display_errors', 1);
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'] ?? '';
    $idade = (int) ($_POST['idade'] ?? 0);
    $tipo_sangue = (int) ($_POST['tipo_sangue'] ?? 0);
    $observacoes = $_POST['observacoes'] ?? '';

    $campos = [
        'bebida_alcolica', 'fez_parto', 'gestante_amamentando', 'usou_drogas',
        'medicamento', 'possui_doenca', 'tempo_apos_11', 'peso_mais_50kg',
        'contato_doenca', 'problema_saude'
    ];

    $respostas = [];
    foreach ($campos as $campo) {
        $respostas[$campo] = $_POST[$campo] ?? 'Não informado';
    }

    $stmt = $conn->prepare("INSERT INTO form_sangue 
        (nome, idade, id_tipo, bebida_alcolica, fez_parto, gestante_amamentando, usou_drogas, medicamento,
         possui_doenca, tempo_apos_11, peso_mais_50kg, contato_doenca, problema_saude, observacoes)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("siisssssssssss", 
        $nome, $idade, $tipo_sangue,
        $respostas['bebida_alcolica'],
        $respostas['fez_parto'],
        $respostas['gestante_amamentando'],
        $respostas['usou_drogas'],
        $respostas['medicamento'],
        $respostas['possui_doenca'],
        $respostas['tempo_apos_11'],
        $respostas['peso_mais_50kg'],
        $respostas['contato_doenca'],
        $respostas['problema_saude'],
        $observacoes
    );

    if ($stmt->execute()) {
        // ✅ Redirecionamento correto
        header("Location: /fluxovital/page/cadastro/sucesso_sangue.php");
        exit();
    } else {
        echo "Erro ao salvar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Acesso inválido.";
}
