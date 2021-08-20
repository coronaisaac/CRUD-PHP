<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD Usuarios</a>
    </div>
  </div>
</nav>
<section class="container">
        <nav class="pt-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registrar Usuario</li>
        </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <h4>
                    Registro de Usuarios
                </h4>
            </div>
            <div class="card-body">
            <form action="../Controllers/Post.Controller.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre1">
                    </div>
                    <div class="col-md-4">
                        <label for="app" class="form-label">Apellido Paterno</label>
                        <input type="text" name="app" class="form-control" id="app">
                    </div>
                    <div class="col-md-4">
                        <label for="apm" class="form-label">Apellido Materno</label>
                        <input type="text" name="apm" class="form-control" id="apm">
                    </div>
                </div>                    
                <div class="row">
                    <div class="col-md-6">
                        <label for="fNacimiento" class="form-label">Fecha de nacimiento</label>
                        <input type="date" name="fNacimiento" class="form-control" id="fNacimiento">
                    </div>  
                    <div class="col-md-6">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="pt-3">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
                
            </form>
            </div>
        </div>
    </section>
  
</body>

</html>
