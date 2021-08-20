<?php
    
    include('./Entities/Usuarios.php');
    include ('./DB/Mysql.php');
    class GetController extends MysqlConect{
        
        public function show_users(){
           $result =  $this->connect->query("SELECT * FROM usuarios");
           $arrayUser = array();
          while($row = $result->fetch_assoc()) {
            $user = new Usuarios();
            $user->set_id($row["id"]);
            $user->set_nombre($row["nombre"]);
            $user->set_app($row["app"]);
            $user->set_apm($row["apm"]);
            $user->set_fNacimiento($row["fNacimiento"]);
            $user->set_email($row["email"]);
            array_push($arrayUser,$user);
          }
          $this->connect->close();
          return $arrayUser;
           
        }
        
    }
?>






