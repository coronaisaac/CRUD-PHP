<?php
    class Usuarios{
        public $Id;
        public $Nombre;
        public $App;
        public $Apm;
        public $fNacimiento;
        public $Email;
        
        
        # SET 
        function set_id($id){
            $this->Id =$id;
        }
        function set_nombre($nombre){
            $this->Nombre =$nombre;
        }
        function set_app($app){
            $this->App =$app;
        }
        function set_apm($apm){
            $this->Apm =$apm;
        }
        function set_fNacimiento($nacimiento){
            $this->fNacimiento =$nacimiento;
        }
        function set_email($email){
            $this->Email =$email;
        }
       
        # GET
        function get_id(){
            return $this->Id;
        }
        function get_nombre(){
            return $this->Nombre;
        }        
        function get_app(){
            return $this->App;
        }        
        function get_apm(){
            return $this->Apm;
        }
        function get_fNacimiento(){
            return $this->fNacimiento;
        }
        function get_email(){
            return $this->Email;
        }
      
    }


?>