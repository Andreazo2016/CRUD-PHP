<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
<?php session_start();?>
<nav id="nav">
<h2>Crud</h2>	
</nav>
<div class="container">
<div id="clientes">
<h1>Clientes
<div id="btns">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Novo Cliente</button>	
	</div>
</h1>
</div>
<!--Código Pra mostrar Mensaggem de Sucesso-->
<?php if(!empty($_SESSION["message"]) ):?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>" role="alert">
	<h1><?php echo $_SESSION['message']; ?></h1>
</div>
<?php endif;?>
</div>
<br><br>
<div class="container">
<div class="container" >
<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Telefone</th>
      <th>Opções</th>
    </tr>
  </thead>
  <tbody >
  <?php include 'Controlles/listAllClient.php'?>
  <?php if ($clientes):?>
  <?php foreach ($clientes as $cliente) :?>
   <tr>
       <td ><?php echo $cliente['nome'];?></td>
       <td ><?php echo $cliente['cpf']?></td>
       <td ><?php echo $cliente['celular'];?></td>
      <td class="actions text-right" >
     <a href="Controlles/deleteClient.php?id=<?php echo $cliente['cpf']?>" class="btn btn-danger" >
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


<!-- Modal inserir-->
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
        		<input type="text" name="celular" class="form-control" id="telefone" style="width: 500px">	
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





<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>