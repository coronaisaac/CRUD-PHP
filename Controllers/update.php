<?php
    include(dirname(__FILE__).'../../Env/configure.php');
    if (isset($_POST)) {
        # code...
        $connect=new mysqli(HOST,USER,PASSWORD,DB);
        $user = $_POST;
        
        $connect->query("UPDATE usuarios SET nombre='{$user['nombre']}', app='{$user['app']}', apm='{$user['apm']}',fNacimiento='{$user['fNacimiento']}',email='{$user['email']}' WHERE id={$user['id']}");
        if ($connect) {
            echo "<script>
                    alert('Usuario {$user['nombre']} {$user['app']} {$user['apm']} actualizado');
                    
                </script>";
            # code...
        }
        else{
            echo "<script>
                    alert('Actualización de usuario no valido, por favor verifique los datos que ingresa');
                    
                </script>";
        }
    $connect->close();
    }
?>