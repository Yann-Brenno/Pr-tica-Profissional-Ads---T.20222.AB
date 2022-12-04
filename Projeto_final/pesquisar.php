<html lang="pt-br">
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
    <title>CONSULTAR VOTO</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	 <link href="css/login.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <br>
  <br>
  <br>
  <br>
    <br>
  <br>
    <br>
  <br>
  <div>
    <div class="container">
	<div id="container">
<center>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "ascent";
    $dbname = "votos";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM votos WHERE cpf = '$pesquisar' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
 
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "Número do CPF: ".$rows_cursos['cpf']."<br>";
		        echo "Nome: ".$rows_cursos['nome']."<br>";
				 echo "Cidade: ".$rows_cursos['cidade']."<br>";
				 echo "Voto: ".$rows_cursos['voto_presidente']."<br>";
    }
?>
<br>
<br>
<form method="POST" action="index.php">
    <input type="submit" class="btn btn-primary" value="Nova busca">
</div>
</div> <!-- /container -->



</form>
</center>
 