<?php 
require_once '../hf.php'; 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" href="pat.css">
  </head>
  <body>

    <!-- <nav>  -->
      <?php 
      cabeza();
      ?> 
    <!-- </nav> -->

<section class="container center">
    <div>
      <p>Escoge material:</p>
      <div class="space">
      <a class="waves-effect waves-light btn" id="piedra" onclick="piedra()"><img class="piedra" src="Piedra.png" alt="Piedra.png"></a>
      <a class="waves-effect waves-light btn papel" id="papel" onclick="papel()"><img class="piedra" src="pepel.png" alt="pepel.png"></a>
      <a class="waves-effect waves-light btn tijera" id="tijera" onclick="tijera()"><img class="tijeras" src="tijeras.png" alt="tijeras.png"></a>
      </div>
    </div>

    <p class="marcador">Esperando tu respuesta</p>
    <p class="res"></p>
</section>

<br>
<br>
<footer class="page-footer black" style="margin-top: 3.9rem;">
	<?php 
      fin();
	  ?>  
	</footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="pat.js"></script>
</body>
</html>