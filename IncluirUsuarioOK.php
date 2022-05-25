<?php
require_once 'connectionString.php';

print_r($_POST);
echo "<br><br>";

$email = $_POST["email"];
$senha = $_POST["senha"];


$sql = "INSERT INTO tblusuario (vchUsuario, vchSenha) VALUES ('" . $email . "','" . $senha . "')";

echo $sql;
echo "<br><br>";

$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: index.php');
