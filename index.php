<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Bíblia Sagrada :: </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
    body {
        margin-top: 10px;
    }
    </style>
</head>

<body class="bg-dark">
    

<div class="container">

<div class="jumbotron">
<h4>Bem vindo ao meu projeto </h4>
<p>jotajeff@gmail.com</p>

<div>


<?php

$dsn = 'mysql:host=localhost;dbname=avenida_db';
$user = 'root';
$pass = '1970';

try {

$conexao = new PDO($dsn, $user, $pass);

$query = 'Select * from livros where liv_tes_id = 1 order by liv_nome';

$stmt = $conexao->query($query);


$lista= $stmt->fetchAll(PDO::FETCH_ASSOC);


foreach ($lista as $key => $value) {

	 echo '<div class="alert alert-primary" role="alert">';

  		echo $value['liv_nome'];

  	echo '</div>';


}


}
catch(PDOException $e) {
	
	echo "Código do Erro : ".$e->getCode().' <br> Mensagem  do Erro '.$e->getMessage();
}


?>


</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

