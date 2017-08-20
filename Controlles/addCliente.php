<?php
require_once '../database/settings.php';

$db = new DB();


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$dados = array("ID" => 0, "nome" => $nome, "cpf" => $cpf, "telefone" => $telefone);


$id = $db->insert("cliente", $dados);
if ($id != null) {
    $_SESSION['message'] = "Cliente Adicionado Com Sucesso!! :)";
    $_SESSION['type'] = "success";
    $redirect = "../index.php";
    header("location:$redirect");
} else {
    $_SESSION['message'] = "Não Foi Possível Adicionar esse Cliente!! :(";
    $_SESSION['type'] = "danger";
    $redirect = "../index.php";
    header("location:$redirect");
}

?>