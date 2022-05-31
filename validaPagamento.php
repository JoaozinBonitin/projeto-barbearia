<?php
require_once './BDConnect/connectionString.php';

print_r($_POST);
echo "<br><br>";

$cvv = $_POST["cvv"];
$nrocartao = $_POST["nrocartao"];
$nome = $_POST["nome"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];


$sql = "INSERT INTO tblcartao (`vchNroCartao`, `intCVV`, `vchNomeCartao`, `intMesValidade`, `intAnoValidade`) 
VALUES ('" . $nrocartao . "','" . $cvv . "','" . $nome . "','" . $mes . "','" . $ano . "')";

echo $sql;
echo "<br><br>";

$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: home.php');
