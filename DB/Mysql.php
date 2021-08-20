<?php
    include(dirname(__FILE__).'../../Env/configure.php');
    class MysqlConect{
        public $connect;
        function __construct(){
            $this->connect=new mysqli(HOST,USER,PASSWORD,DB);
            if ($this->connect->connect_error) {
                echo("Error al conectarse a la base de datos" . $this->connect->connect_error);
            }
        }
    }
?>