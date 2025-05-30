<?php
session_start(); // Inicia a sessão para armazenar dados do usuário (como mensagens de erro e informações de login)

// Inclui o arquivo de configuração do banco de dados (ajuste o caminho conforme sua estrutura)
include_once(__DIR__ . '/../../../config/db.php');

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém e limpa os dados vindos do formulário
    $email = trim($_POST['email']);   // Remove espaços em branco no início/fim
    $senha = $_POST['senha'];         // Senha em texto puro (será verificada depois)

    // Verifica se algum dos campos está vazio
    if (empty($email) || empty($senha)) {
        $_SESSION['erro_login'] = "Preencha todos os campos!";  // Define mensagem de erro na sessão
        header("Location: login_usuario.php");                // Redireciona de volta para a página de login
        exit;                                                 // Encerra a execução do script
    }

    // Prepara a consulta SQL para buscar o usuário pelo e-mail, evitando SQL Injection
    $sql = "SELECT * FROM usuario WHERE email = ?";
    $stmt = $conn->prepare($sql);           // Prepara a declaração
    $stmt->bind_param("s", $email);         // Liga o parâmetro (s = string)
    $stmt->execute();                       // Executa a consulta
    $resultado = $stmt->get_result();       // Obtém o resultado da consulta

    // Verifica se foi encontrado exatamente um usuário com aquele e-mail
    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc(); // Converte o resultado em array associativo

        // Verifica se a senha informada confere com o hash armazenado
        if (password_verify($senha, $usuario['senha'])) {
            // Credenciais válidas: armazena informações do usuário na sessão
            $_SESSION['usuario_id']   = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

            // Redireciona para a página inicial após login bem-sucedido
            header("Location: /fluxovital/index.php");
            exit; // Encerra a execução após o redirecionamento
        }
    }

    // Se chegar aqui, o login falhou (e-mail não encontrado ou senha inválida)
    $_SESSION['erro_login'] = "E-mail ou senha incorretos!";
    header("Location: login_usuario.php");  // Redireciona de volta para o formulário de login
    exit;                                   // Encerra a execução do script
}
