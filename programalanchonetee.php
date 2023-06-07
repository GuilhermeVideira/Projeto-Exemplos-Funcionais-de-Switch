<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./Imagens/favicon.png" type="image/x-icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/lanchonete.css" rel="stylesheet">

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
    
<form method="post" action="./calculolanchonete.php">

<center> <span class="texto01"> Fórmulario de cadastro </span> </center>

<br> <center><div class='justify-center'> <hr> </div></center> 


<span class="texto02">  <p> Regitre o código do produto consumido: </p> </span>
<input type="number" name="codigo" placeholder="Código do produto"> <br><br>

<span class="texto02">  <p> Regitre a quantidade do produto consumido:</p> </span>
<input type="number" name="quantidade" placeholder="Quantidade do produto"> <br> <br> <br>

<button class="button">Comprar</button><br><br>

</form>

</div> </div> </div>

</body>
</html>