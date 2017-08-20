<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>


<?php

?>
<nav id="nav">
<h2>Crud</h2>	
</nav>

<!--Código Pra mostrar Mensaggem de Sucesso-->
<?php if(!empty($_SESSION["message"]) ):?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>" role="alert">
	<h1><?php echo $_SESSION['message']; ?></h1>
</div>
<?php endif;?>


<div class="container">
<div id="clientes">
<h1>Clientes
<div id="btns">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Novo Cliente</button>
	<button type="button" class="btn btn-default">
		<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
	Atualizar</button>		
	</div>
</h1>
</div>

</div>
<br><br>
<div class="container">
<div class="container" >
<table class="table" ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>Telefone</th>
      <th>Opções</th>
    </tr>
  </thead>
  <tbody >
  <?php
  require_once 'database/settings.php';
  $db = new DB();
  $clientes = $db->select('cliente');

 ?>
  <?php if ($clientes):?>

  <?php foreach ($clientes as $cliente) :?>
   <tr>
      <td ><?php echo $cliente->ID;?></td>
       <td ><?php echo $cliente->nome;?></td>
       <td ><?php echo $cliente->cpf;?></td>
       <td ><?php echo $cliente->telefone;?></td>

  
      <td class="actions text-right" >
      <a href="#" class="btn btn-warning"  >
      <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>

      Editar</a>
  
     <a href="#" class="btn btn-danger" data-target="#myModal">
      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
      	
      Excluir</a>
      
      
    
      </td>
   </tr>
<?php endforeach;?>
  <?php else:?>
  <?php echo "Variavel Nula"?>
<?php endif;?>
  </tbody>
</table>
	
</div>

	
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Cliente</h4>
      </div>
      <div class="modal-body">
        <div class="container">
        <form class="form" method="post" action="Controlles/addCliente.php">
        	<div class="form-group">
        		<label for="nome">Nome:</label>
        		<input type="text" name="nome" class="form-control" id ="nome" style="width: 500px">	
        	</div>
        	<div class="form-group">
        		<label for="cpf">Cpf:</label>
        		<input type="text" name="cpf" class="form-control" id="cpf" style="width: 500px">	
        	</div>
        	<div class="form-group">
        		<label for="telefone">Telefone:</label>
        		<input type="text" name="telefone" class="form-control" id="telefone" style="width: 500px">	
        	</div>
        	<button type="submit" class="btn btn-primary" >Cadastrar</button>
        </form>
        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>