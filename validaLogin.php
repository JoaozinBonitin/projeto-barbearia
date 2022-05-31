<?php
require_once './BDConnect/connectionString.php';

$email = $_POST["email"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("SELECT * FROM tblusuario WHERE vchEmail ='" . $email . "' and vchSenha = '" . $senha . "'");

$stmt->execute();
$validaUsuario = false;
if ($recordSet = $stmt->fetchAll()) {
    header('location: home.php');
} else {
    header('location: sair.php');
}
