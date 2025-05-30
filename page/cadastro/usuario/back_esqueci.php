<?php
session_start(); // Inicia a sessão para armazenar mensagens de feedback ao usuário

// Configurações do banco de dados
$servername = "localhost";
$username   = "root";     // Usuário do MySQL
$password   = "";         // Senha do MySQL
$dbname     = "fluxovital";

// Cria conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para gerar um token seguro e aleatório
function generateToken($length = 32) {
    return bin2hex(random_bytes($length)); // Gera um hexadecimal de $length bytes
}

// Função placeholder para envio de e-mail de recuperação
function sendResetEmail($email, $token) {
    // Em produção, implementar envio real de e-mail aqui
    $reset_link = "http://" . $_SERVER['HTTP_HOST']
                . dirname($_SERVER['PHP_SELF'])
                . "/recuperar_senha.php?token=$token";
    // Por enquanto, sempre retorna true para simular sucesso
    return true;
}

// ===== Processa requisição de recuperação de senha =====
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    // Sanitiza e-mail recebido do formulário
    $email = $conn->real_escape_string(trim($_POST['email']));
    
    // Verifica se o e-mail existe na tabela usuario
    $sql    = "SELECT * FROM usuario WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Usuário encontrado: gera token e define expiração
        $token      = generateToken();
        $expiration = date('Y-m-d H:i:s', strtotime('+1 hour'));
        
        // Cria tabela password_resets se ainda não existir
        $conn->query("
            CREATE TABLE IF NOT EXISTS password_resets (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(150) NOT NULL,
                token VARCHAR(64) NOT NULL,
                expiration DATETIME NOT NULL
            )
        ");
        
        // Insere o token no banco
        $insert_sql = "
            INSERT INTO password_resets (email, token, expiration)
            VALUES ('$email', '$token', '$expiration')
        ";
        
        if ($conn->query($insert_sql)) {
            // Simula envio de e-mail
            if (sendResetEmail($email, $token)) {
                $_SESSION['reset_message']  = "Um link de recuperação foi enviado para seu e-mail.";
                $_SESSION['message_type']   = 'success';
            } else {
                $_SESSION['reset_message']  = "Erro ao enviar e-mail. Tente novamente mais tarde.";
                $_SESSION['message_type']   = 'danger';
            }
        } else {
            $_SESSION['reset_message']      = "Erro ao gerar token de recuperação. Tente novamente.";
            $_SESSION['message_type']       = 'danger';
        }
    } else {
        // E-mail não cadastrado
        $_SESSION['reset_message'] = "O e-mail fornecido não está cadastrado em nosso sistema.";
        $_SESSION['message_type']  = 'danger';
    }
    
    // Redireciona para a mesma página para evitar reenvio de formulário no refresh
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// ===== Processa redefinição de senha após clicar no link =====
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_password'])) {
    // Recebe token e a nova senha do formulário
    $token        = $conn->real_escape_string(trim($_POST['token']));
    $new_password = password_hash(trim($_POST['new_password']), PASSWORD_DEFAULT); // Criptografa a senha
    
    // Verifica se o token existe e não expirou
    $sql    = "
        SELECT * FROM password_resets
        WHERE token = '$token' AND expiration > NOW()
    ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row   = $result->fetch_assoc();
        $email = $row['email'];
        
        // Atualiza a senha do usuário na tabela usuario
        $update_sql = "UPDATE usuario SET senha = '$new_password' WHERE email = '$email'";
        
        if ($conn->query($update_sql)) {
            // Deleta o token usado
            $conn->query("DELETE FROM password_resets WHERE token = '$token'");
            
            $_SESSION['reset_message'] = "Sua senha foi redefinida com sucesso!";
            $_SESSION['message_type']  = 'success';
            
            // Redireciona para a página de login após 3 segundos
            header("Refresh:3; url=login.php");
        } else {
            $_SESSION['reset_message'] = "Erro ao atualizar a senha. Tente novamente.";
            $_SESSION['message_type']  = 'danger';
        }
    } else {
        // Token inválido ou expirado
        $_SESSION['reset_message'] = "Token inválido ou expirado. Solicite um novo link.";
        $_SESSION['message_type']  = 'danger';
    }
}

// ===== Verifica validade do token na URL =====
$token       = isset($_GET['token']) ? $conn->real_escape_string($_GET['token']) : '';
$valid_token = false;

if (!empty($token)) {
    $sql    = "
        SELECT * FROM password_resets
        WHERE token = '$token' AND expiration > NOW()
    ";
    $result = $conn->query($sql);
    $valid_token = ($result->num_rows > 0); // true se token é válido
}
?>
