<?php
session_start();
session_unset();
session_destroy();
header("Location: /fluxovital/page/home/index.php"); // Redireciona para a home
exit;
?>