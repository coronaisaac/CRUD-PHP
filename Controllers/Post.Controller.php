<?php
    include(dirname(__FILE__).'../../Env/configure.php');
    $connect=new mysqli(HOST,USER,PASSWORD,DB);
    $user = $_POST;
    $connect->query("INSERT INTO usuarios VALUES (0,'{$user['nombre']}','{$user['app']}','{$user['apm']}','{$user['fNacimiento']}','{$user['email']}')");
    if ($connect) {
        echo "<script>
                alert('Registro del usuario {$user['nombre']} {$user['app']} {$user['apm']} se ah acompletado con exito');
                location.href='../';
              </script>";
        # code...
    }
    else{
        echo "<script>
                alert('Registro de usuario no valido, por favor verifique los datos que ingresa');
                location.href='../';
            </script>";
    }
    $connect->close();
?>






