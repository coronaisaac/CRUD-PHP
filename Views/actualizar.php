<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">CRUD Usuarios</a>
    </div>
  </div>
</nav>
<section class="container">
        <nav class="pt-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Actualizar Usuario</li>
        </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                <h4>
                    Actualizar Usuario
                </h4>
            </div>
            <div class="card-body">
            <form action="../Controllers/Update.php" method="post">
                <?php 
                    include('../Controllers/Update.Controller.php');
                    $id = $_GET["id"];
                    $updateController = new UpdateController();
                    $user = $updateController->findUser($id);
                    if ($user) {    
                    $date = str_split($user["fNacimiento"],10)[0];
                ?>
                    <div class="row">
                    <div class="col-md-4">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" value="<?php echo $user["nombre"]?>" class="form-control" id="nombre1">
                    </div>
                    <div class="col-md-4">
                        <label for="app" class="form-label">Apellido Paterno</label>
                        <input type="text" name="app" value="<?php echo $user["app"]?>" class="form-control" id="app">
                    </div>
                    <div class="col-md-4">
                        <label for="apm" class="form-label">Apellido Materno</label>
                        <input type="text" name="apm" value="<?php echo $user["apm"]?>" class="form-control" id="apm">
                    </div>
                    </div>                    
                    <div class="row">
                    <div class="col-md-6">
                        <label for="fNacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" name="fNacimiento" value="<?php echo $date?>" class="form-control" id="fNacimiento">
                    </div>  
                    <div class="col-md-6">
                        <label for="email" class="form-label">Correo</label>
                        <input style="display:none;" name="id" value="<?php echo $user["id"]?>">
                        <input type="text" name="email" value="<?php echo $user["email"]?>" class="form-control" id="email">
                    </div>

                    </div>
                    <div class="pt-3">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                <?php
                    }else{
                        echo "<script>
                                    alert('Lo sentimos pero no localizamos el usuario que desea actualizar, por favor intente con otro usuario');
                                    location.href='../';
                            </script>";
                    }
                ?>
            </form>
            </div>
        </div>
    </section>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>
