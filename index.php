<?php
    require_once 'vendor/autoload.php';
    require_once 'hf.php';

    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Models\Project;

    $capsule = new Capsule;
    
    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => '127.0.0.1:3306',
        'database'  => 'login',
        'username'  => 'root',
        'password'  => 'root',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);

    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $capsule->bootEloquent();

    if(!empty($_POST)){
        $project = new Project();
        $project -> nombre = $_POST['nombre'];
        $project -> apellido = $_POST['apellido'];
        $project -> correo = $_POST['correo'];
        $project -> contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        $project -> save();
        $msg = 'Usuario Registrado, ingrese al enlace <a href="login/login.php">Login</a>'; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body id="body">
    <nav>
        <div class="nav-wrapper cont">
          <a href="#" class="brand-logo">JS0N_Page</a>
         <div class="nave"></div>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="Calc/Calculadora.php">Calculadora</a></li>
        <li><a href="ppt/PAT.php">PAT</a></li>
        <li><a href="divisas/divisas.php">Divisas</a></li>
        </ul>
        </div>
      </nav>

      <div class="cont bots">
        <a class="waves-effect waves-light btn colpse" id="colapsar">Ocultar</a>
          <a class="waves-effect waves-light btn uno" id="bot1" onclick="saludar()">Negro</a>
          <a class="waves-effect waves-light btn dos" id="bot2" onclick="despedir()">Gris</a>
      </div>

      <section class="formulario">
        <div class="row">
          <div class="col m2 l2"></div>
          <form id="forms" class="col s12 m8 l8" action="index.php" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Nombre*" id="first_name" type="text" class="validate" name="nombre">
              </div>
              <div class="input-field col s6">
                <input placeholder="Apellidos" id="last_name" type="text" class="validate" name="apellido">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Correo*" id="email" type="email" class="validate" name="correo">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Contraseña*" id="password" type="password" class="validate" name="contrasena">
              </div>
            </div>
            <label>
              <input type="checkbox" id="check" />
              <span>Terminos y condiciones</span>
            </label><br>
            <label>
              <input type="checkbox" id="check2" />
              <span>No soy un robot</span>
            </label><br>
            <input class="waves-effect waves-light btn" id="send" type="submit"><br>
            <?php echo $msg ?>
          </form>
        </div>
      </section>

      <section class="cont">
        <div class="row">
          <div class="col m2 l2"></div>
          <div class="seccion3 col s12 m8 l8"></div>
        </div>
      </section>  

  <br>
	<footer class="page-footer black" style="margin-top: 3.9rem;">
	<?php 
      fin();
	  ?>  
	</footer>
      
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script type="text/javascript" src="event.js"></script>
</html>

