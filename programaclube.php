<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./Imagens/favicon.png" type="image/x-icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/estilosclube1.css" rel="stylesheet">

    <title> Exemplos funcionais </title>

    <script>
// Digitação da frase
var texto = "Clube de futebol";
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
            <div style= "left:510px; position: absolute;" > 
            <span class="texto01">  <h1> <div id="result"></div> </h1> </span>
            </div> </center>


          <br><br><br><br><br>
          <div style= "left:500px; position: absolute;" > 

          <br> <center><div class='justify-center'> <hr> </div></center> 

          
          <div style= "left:25px; position: absolute;" > 
         <div class="card" style="width: 18rem;">
           <div class="card-body">
    
           <table>
    <tr>
      <th>Idade</th>
      <th>Categoria</th>
    </tr>
    <tr>
      <td>05 a 10 anos</td>
      <td>Infantil</td>
    </tr>
    <tr>
      <td>11 a 15 anos</td>
      <td>Juvenil</td>
    </tr>
    <tr>
      <td>16 a 20 anos</td>
      <td>Júnior</td>
    </tr>
    <tr>
      <td>21 a 25 anos</td>
      <td>Profissional</td>
    </tr>
    <tr>
          </table>

    
          <br> <center><div class='justify-center'> <hr> </div></center>  <br>

          <center> <span class="texto06"> Fórmulario de cadastro </span> </center>

           <br> <center><div class='justify-center'> <hr> </div></center> 

          <form method="post" action="./calculoclube.php">

          <span class="texto02">  <p> Regitre o nome do atleta: </p> </span>
          <input type="text" name="nome" placeholder="Nome do atleta"> <br><br>

          <span class="texto02">  <p> Regitre a idade do atleta:</p> </span>
          <input type="number" name="idade" placeholder="Idade do atleta"> <br> <br> <br>

          <button class="button">Consultar</button><br><br>

          </form>
    </div>
    </div>
    </div>


</body>
</html>