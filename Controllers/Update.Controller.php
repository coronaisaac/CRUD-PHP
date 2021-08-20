<?php
    include(dirname(__FILE__).'../../Env/configure.php');
    include ('../Entities/Usuarios.php');
    

    class UpdateController{
        public function findUser($id){
                if (is_numeric($id)) {
                    # code...
                    $connect=new mysqli(HOST,USER,PASSWORD,DB);
                    $result =  $connect->query("SELECT * FROM usuarios WHERE id = {$id}");
                    $row = $result->fetch_assoc();
                    $connect->close();
                    return $row;
                }else{
                    return [];
                }
        }
    }
    
    
?>