<?php
    include('./Controllers/Get.Controller.php');
    class ViewUsers{
        public $dataController;
        function __construct(){
            $this->dataController= new GetController();
        }
        
        public function show_users_table(){
            $result= $this->dataController->show_users();
            $sendData="";
            if (count($result)>0) {
                for ($index=0; $index <count($result) ; $index++) 
                { 
                   $date = str_split($result[$index]->get_fNacimiento(),10)[0];
                   $sendData .= "<tr>
                        <td>{$result[$index]->get_nombre()}</td>
                        <td>{$result[$index]->get_app()} {$result[$index]->get_apm()} </td>
                        <td>{$date}</td>
                        <td>{$result[$index]->get_email()}</td>
                        <td>
                            <a class='btn btn-danger' href='./Controllers/Delete.Controller.php?id={$result[$index]->get_id()}'>
                                Eliminar
                            </a>
                            <a class='btn btn-warning' href='./Views/actualizar.php?id={$result[$index]->get_id()}'>
                                Editar
                            </a>
                        </td>
                        </tr>";
                }
            }
            return $sendData;
            
        }
        
    }
?>
