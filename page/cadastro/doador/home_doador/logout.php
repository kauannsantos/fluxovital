<?php
session_start();

// Limpa todas as variáveis de sessão
$_SESSION = [];

// Destrói a sessão
session_destroy();

// Redireciona para a página de login do doador ou home pública
header('Location: /fluxovital/page/home/index.php');
exit();
