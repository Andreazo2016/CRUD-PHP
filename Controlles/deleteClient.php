<?php
require_once '../database/conexao.php';
session_start();
$cpf = $_GET['id'];
if(!is_null($cpf)){
    $sql = 'DELETE FROM cliente WHERE cpf = :CPF';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':CPF',$cpf);
   if( $stmt->execute()){
    $_SESSION['message'] = 'Cliente Deletado com Sucesso!!!';
    $_SESSION['type'] = 'success';
       echo '<script type ="text/javascript">
       window.location = "../";
       </script>';
   }else{
    
    echo '<script type ="text/javascript">
    window.location = "../"
    </script>';
   }

}else{
    $_SESSION['message'] = 'Valores com Campus Nulos';
    $_SESSION['type'] = 'danger';
    echo '<script type ="text/javascript">
    window.location = "../"
    </script>';
}




?>