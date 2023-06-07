<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./Imagens/favicon.png" type="image/x-icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/estliloslanchonetee1.css" rel="stylesheet">

    <title> Exemplos funcionais </title>

    <script>
// Digitação da frase
var texto = "Cardápio da lanchonete";
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

            <center>
            <br><br><br><br><br><br><br>
            <div style= "left:480px; position: absolute;" > 
            <span class="texto01">  <h1> <div id="result"></div> </h1> </span>
            </div> </center>


          <br><br><br><br><br><br><br><br><br><br><br><br><br>
          <div style= "left:500px; position: absolute;" > 

          <br> <center><div class='justify-center'> <hr> </div></center> 

          <table>
    <tr>
      <th>Código</th>
      <th>Produto</th>
      <th>Valor unitário</th>
    </tr>
    <tr>
      <td>100 </td>
      <td>Cachorro quente</td>
      <td>R$: 1,70</td>
    </tr>
    <tr>
      <td>101</td>
      <td>Bauru Simples</td>
      <td>R$: 2,30</td>
    </tr>
    <tr>
      <td>102</td>
      <td>Bauru com ovo</td>
      <td>R$: 2,60</td>
    </tr>
    <tr>
      <td>103</td>
      <td>Hambúguer</td>
      <td>R$: 2,40</td>
    </tr>
    <tr>
      <td>104</td>
      <td>Cheeseburguer</td>
      <td>R$: 2,50</td>
    </tr>
    <tr>
      <td>105</td>
      <td>Refrigerante</td>
      <td>R$: 1,00</td>
    </tr>
          </table>
      
    </p>

  </div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br> <center><div class='justify-center'> <hr> </div></center> 

  <div style= "left:300px; position: absolute;" > 
  <div class="carde">
  <div class="front">
  <img src="./Imagens/CachorroQuente.jpeg" class="d-block w-100" alt="Imagem de Cachorro quente"> 
  <br> <center> Cachorro Quente
  </div> </center>
  <div class="back">
  <br><br><br>
  <center> Cachorro Quente <br><br>
  <a href="./programalanchonetee.php"> <button type="button" class="btn btn-secondary">Pedir Produto</button> </center> </a>
  </div>
  </div>
  </div>

  <div style= "left:600px; position: absolute;" > 
  <div class="carde">
  <div class="front">
  <img src="./Imagens/BauruSimples.jpeg" class="d-block w-100" alt="Imagem de Bauru Simples">
  <br> <center> Bauru Simples </center>
  </div>
  <div class="back">
  <br><br><br>
  <center> Bauru Simples <br><br>
  <a href="./programalanchonetee.php"> <button type="button" class="btn btn-secondary">Pedir Produto</button> </center> </a>
  </div>
  </div>
  </div>

  <div style= "left:900px; position: absolute;" > 
  <div class="carde">
  <div class="front">
  <img src="./Imagens/Baurucomovo.jpeg" class="d-block w-100" alt="Imagem de Bauru com ovo">
  <br> <center> Bauru com ovo</center>
  </div>
  <div class="back">
  <br><br><br>
  <center> Bauru com ovo <br><br>
  <a href="./programalanchonetee.php"> <button type="button" class="btn btn-secondary">Pedir Produto</button> </center> </a>
  </div>
  </div>
  </div>


  <br><br><br><br><br><br><br><br><br><br><br>

<div style= "left:300px; position: absolute;" > 
<div class="carde">
<div class="front">
<img src="./Imagens/Hambúguer.jpeg" class="d-block w-100" alt="Imagem de Hambúguer"> 
<br> <center> Hambúguer </center>
</div>
<div class="back">
<br><br><br>
<center> Hambúguer <br><br>
<a href="./programalanchonetee.php"> <button type="button" class="btn btn-secondary">Pedir Produto</button> </center> </a>
</div>
</div>
</div>

<div style= "left:600px; position: absolute;" > 
<div class="carde">
<div class="front">
<img src="./Imagens/Cheeseburguer.jpeg" class="d-block w-100" alt="Imagem de Cheeseburguer">
<br> <center> Cheeseburguer </center>
</div>
<div class="back">
<br><br><br>
<center> 	Cheeseburguer <br><br>
<a href="./programalanchonetee.php"> <button type="button" class="btn btn-secondary">Pedir Produto</button> </center> </a>
</div>
</div>
</div>

<div style= "left:900px; position: absolute;" > 
<div class="carde">
<div class="front">
<img src="./Imagens/Refrigerante.jpeg" class="d-block w-100" alt="Imagem de Refrigerante">
<br> <center> Refrigerante </center>
</div>
<div class="back">
<br><br><br>
<center> Refrigerante <br><br>
<a href="./programalanchonetee.php"> <button type="button" class="btn btn-secondary">Pedir Produto</button> </center> </a>
</div>
</div>
</div>

<br><br><br><br><br>



</body>
</html>