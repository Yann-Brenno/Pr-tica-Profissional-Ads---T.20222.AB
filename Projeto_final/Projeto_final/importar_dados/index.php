<head>
<link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
<script src=”https://code.jquery.com/jquery-3.2.1.slim.min.js” integrity=”sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN” crossorigin=”anonymous”></script>

<script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js integrity=”sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q” crossorigin=”anonymous”></script>

<script src=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js” integrity=”sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl” crossorigin=”anonymous”></script>
<link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Yann">
    <link rel="icon" href="imagens/favicon.ico">
    <title>Importar Votos</title>
    <link href="..;css/bootstrap.css" rel="stylesheet">
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="..;css/signin.css" rel="stylesheet">
	 <link href="../css/login.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
  </head>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<body>
	<div>
    <div class="container">
	<div id="container">
		<h1>Importar votos</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Servidor: </label>
			<input type="text" name="servidor" placeholder="Nome do servidor"><br><br>
			
			<label>Usuário: </label>
			<input type="text" name="usuario" placeholder="Usuário da base de dados"><br><br>
			
			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Senha da base de dados"><br><br>
			
			<label>Base de Dados: </label>
			<input type="text" name="dbname" placeholder="Nome da base de dados"><br><br>
			
			<label>Arquivo de dados to tipo .SQL: </label>
			<input type="file" class="btn btn-primary" name="arquivo"><br><br>
			
			<input type="submit" class="btn btn-primary" value="Importar">
			
		</form>
	</body>
			</div>
    </div> <!-- /container -->
</html>