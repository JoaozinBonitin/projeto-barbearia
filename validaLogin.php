<?php
require_once 'connectionString.php';

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("SELECT * FROM tblusuario WHERE vchUsuario ='" . $usuario . "' and vchSenha = '" . $senha . "'");

$stmt->execute();
$validaUsuario = false;
if ($recordSet = $stmt->fetchAll()) {
    header('location: index.php');
} else {
    header('location: incluirUsuario.php');
}
