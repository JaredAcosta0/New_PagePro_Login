<?php 
require_once '../hf.php';

function convertir(){
    if(!empty($_POST)){
    $cant = $_POST['cant'];
    $dolar = $cant/19;
    $euro = $cant/24;
    echo "<td>Dolares: $".round($dolar,2)."</td>";
    echo "<td>Euros: $".round($euro,2)."</td>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Convertidor de monedas</title>
</head>
<body>

    <?php 
    cabeza();
    ?> 

    <div class='container'>
        <h1>Coversos de Divisas</h1>
        <form action="divisas.php" method="post">
            <table>
                <tr>
                    <td>Cantidad en Pesos:</td>
                    <td><input type="number" name="cant"></td>
                </tr>
                <tr>
                    <?php
                    convertir();
                    ?>
                </tr>
            </table>
            <input type="submit" value="Covertir">
        </form>
    </div>

    <br>
    <br>
    <br>
	<footer class="page-footer black" style="margin-top: 3.9rem;">
	    <?php 
        fin();
	    ?>  
	</footer>
</body>
</html>