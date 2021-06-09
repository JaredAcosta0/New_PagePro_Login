<?php 
require_once '../hf.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <link rel="stylesheet" href="cstilo.css">

  <title>Calculadora</title>
</head>
<body>

	<?php 
    cabeza();
    ?> 

  <div id="container">
		<section id="calculadora" class="calculadora">
			<header class="top">
				<div class="input-valor"></div>
			</header>
			<ul class="key">
				<li>7</li>
				<li>8</li>
				<li>9</li>
				<li class="operador">/</li>
				<li>4</li>
				<li>5</li>
				<li>6</li>
				<li class="operador">*</li>
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li class="operador">-</li>
				<li>0</li>
				<li>.</li>
				<li class="operador">+</li>
				<li>c</li>
				<li class="verificar">=</li>
			</ul>
		</section>
	</div>

	<br>
	<br>
	<br>
	<br>
	<footer class="page-footer black" style="margin-top: 3.9rem;">
	<?php 
      fin();
	  ?>  
	</footer>
  <script src="calcu.js"></script>
</body>
</html>