<?php
    require_once '../vendor/autoload.php';

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
        $project = Project::where('correo',$_POST['correo']) -> first();
        if($project){
            if(\password_verify($_POST['contrasena'], $project -> contrasena)){
                echo 'Contraseña correcta';
                header("Location: ../Calc/Calculadora.php");
                die();
            }
            else{
                echo 'Contraseña incorrecta';
            }
        }
        else{
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

    <div class="container borde" style="padding-top: 13rem">
        <h1>Fomulario de uso....</h1>
        <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>