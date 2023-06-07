<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./Imagens/favicon.png" type="image/x-icon">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">

    <title> Exemplos funcionais </title>
    
  <script>
// Digitação da frase
var texto = "Acesse já todos os exercicios exemplos!";
var result;

var count = 0;
function digitar() {
  result = document.getElementById("result");
  window.setTimeout(function() { inserir(texto[count]) }, 200);
}

function inserir(letra) {
  result.innerHTML += letra;
  count++;
  if(count < texto.length)
    window.setTimeout(function() { inserir(texto[count]) }, 200);
}

window.onload = digitar;
  </script>

</head>
<body>

  <div class="gradient-background"></div>
    
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

<br><br><br>     

            <div style= "top: 63px; left:0px; position: absolute;" >   
                <img src="./Imagens/ImagemDeFundo.png" class="d-block w-100" alt="Imagem de programação">
            </div>

            <br><br><br><br><br>
            <div style= "left:350px; position: absolute;" > 
            <span class="texto01">  <h1> <div id="result"></div> </h1> </span>
            </div>

<br><br><br><br><br><br><br><br>

<div style= "left:100px; position: absolute;" > 

 <a href="programalanchonete.php">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> Exercicio 01 </h5>
    <p class="card-text"> 

    <br><center><div class='justify-center'> <hr> </div></center>

       <i>Programa Lanchonete</i>
      <br> <br> Programa que registra o código do item adquirido pelo consumidor apresentando o valor a pagar.  
    </p>
<br>
    <button type="button" class="btn btn-secondary">  Acessar </a> </button>

  </div>
</div>
</div>


<a href="./programaclube.php">

<div style= "left:525px; position: absolute;" > 
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title"> Exercicio 02 </h5>
<p class="card-text"> 

<br><center><div class='justify-center'> <hr> </div></center>

<i> Clube de futebol </i>
  <br><br> Programa que classifica seus atetlas em categorias de acordo com a faixa etária do atleta e sua categoria. 
   </p><br>
   <button type="button" class="btn btn-secondary">Acessar</button> 
</div>
</div>
</div>

</a>

<a href="./programaproduto.php">

<div style= "left:950px; position: absolute;" > 
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title"> Exercicio 03 </h5>
<p class="card-text"> 

<br><center><div class='justify-center'> <hr> </div></center>

<i> Marcenaria </i>
<br> <br> Programa que registra o código de detreminado produto e mostra sua classificação de acordo com a refêrencia. 
</p>
<br>
<button type="button" class="btn btn-secondary">Acessar</button>
</div>
</div>
</div>

</a>

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>

<br><center><div class='justify-center'> <hr> </div></center>

<center>  <h1> Exercicios exemplos </h1> </center>

<div style= "left:40px; position: absolute;" > 
  <img width="500px" height="400px" src="./Imagens/kanban method-rafiki.svg" class="d-block w-100" alt="Gif"> 
  </div>

  <br><br><br><br>

  <div style= "left:500px; position: absolute;" > 
  <div class="carde">
  <div class="front">
  <img src="./Imagens/Lanche.png" class="d-block w-100" alt="Imagem de hambuguer">
  </div>
  <div class="back">
  <br><br><br>
  <center> Programa Lanchonete <br><br>
  <a href="./programalanchonete.php"> <button type="button" class="btn btn-secondary">Acessar</button> </center> </a>
  </div>
  </div>
  </div>

  <div style= "left:750px; position: absolute;" > 
  <div class="carde">
  <div class="front">
  <img src="./Imagens/BolaDeFutebol.png" class="d-block w-100" alt="Imagem de bola">
  </div>
  <div class="back">
  <br><br><br>
  <center> Clube de futebol <br><br>
  <a href="./programaclube.php"> <button type="button" class="btn btn-secondary">Acessar</button> </center> </a>
  </div>
  </div>
  </div>

  <div style= "left:1000px; position: absolute;" > 
  <div class="carde">
  <div class="front">
  <img src="./Imagens/Loja.png" class="d-block w-100" alt="Imagem de loja">
  </div>
  <div class="back">
  <br><br><br>
  <center>  Programa Marcenaria <br><br>
  <a href="./programaproduto.php"> <button type="button" class="btn btn-secondary">Acessar</button> </center> </a>
  </div>
  </div>
  </div>

</body>
</html>