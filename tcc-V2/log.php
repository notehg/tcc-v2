<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"  href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="projeto de login inicial de um site">
    <meta name="keywords" content="user,senha and log">
    <meta name="author" content="Felipe S. silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="Login"> 
<form >

<h2>login</h2>


<form>
  
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">usuario</label>
  <input class="form-control" name="x" type="text" placeholder="Email ou nome de usuario"  aria-label="default input example">
  <div class="mb-3">
    
   
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">senha</label>
  <input class="form-control" name="w"  type="text" placeholder="senha"  aria-label="default input example">
  <div class="mb-3">

  <button type="button" class="btn btn-info">Logar</button>
  
</form>
</form>
</div>


<?php

include 'conecxao.php';


$nome =$_POST["x"];
$senha =$_POST["w"];





$sql = "SELECT * FROM usuario WHERE nome='$nome'
and senha = '$senha'"; 
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  echo "login efetuado" ;
  include 'index.php';
  
} else {
  echo "erro";
  
}



?>

</body>
</html>