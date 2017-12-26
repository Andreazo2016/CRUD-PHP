<?php
require_once '../database/conexao.php';
 session_start();
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];

if(!empty($nome) && !empty($cpf) && !empty($celular)){
$sql = 'INSERT INTO cliente (nome,cpf,celular) VALUES(:NOME,:CPF,:CELULAR)';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':NOME',$nome);
$stmt->bindParam(':CPF',$cpf);
$stmt->bindParam(':CELULAR',$celular);
$stmt->execute();
$_SESSION['message'] = 'Cliente Cadastrado com Sucesso!!!';
$_SESSION['type'] = 'success';
echo '<script type="text/javascript">
           window.location = "../"
      </script>';
}else{
    $_SESSION['message'] = 'Valores com Campus Nulos';
    $_SESSION['type'] = 'danger';
    echo '<script type="text/javascript">
           window.location = "../"
      </script>';
}

?>