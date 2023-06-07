<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./Imagens/favicon.png" type="image/x-icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/estliloslanchoneteee.css" rel="stylesheet">

  <title> Exemplos funcionais </title>

</head>
<body>

<nav class="navbar col-12 m-auto position-fixed navbar-expand-lg navbar-dark bg-secondary" style="z-index:999;">
    <a class="navbar-brand" href="#"> Exercicios PHP  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
   
      <a href="./teladehome.php"> <button class="btn btn-light"> Home </button> </a>
      
    </div>
    <br><br>
    
</nav>
    
<div class="gradient-background"></div>

      <div style= "top: 63px; left:0px; position: absolute;" >   
                <img src="./Imagens/ImagemDeFundo.png" class="d-block w-100" alt="Imagem de programação">
            </div>
 
            <br><br><br><br><br>

<div style= "left:525px; position: absolute;" > 
<div class="card" style="width: 18rem;">
<div class="card-body">
    

<center> <span class="texto01"> Resultado </span> </center> <br>

<span class="texto03"> 
<?php 

$codigo = $_POST['codigo'];
$qt = $_POST['quantidade'];

switch ($codigo) {

    case 100:
    echo "Total a pagar:" . 1.70 * $qt; 
    break;

    case 101:
    echo "Total a pagar:" . 2.30 * $qt; 
    break;

    case 102:
    echo "Total a pagar:" . 2.60 * $qt; 
    break;

    case 103:
    echo "Total a pagar:" . 2.40 * $qt; 
    break;

    case 104:
    echo "Total a pagar:" . 2.50 * $qt; 
    break;

    case 105:
    echo "Total a pagar:" . 1.00 * $qt; 
    break;
        
}

?>      

          </span>

          <br><br>

          <a href="./programalanchonete.php"> <center>  <button class="button">Voltar</button><br><br> </center> </a>

</div> </div> </div>


</body>
</html>