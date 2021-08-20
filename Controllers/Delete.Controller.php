<?php
    include(dirname(__FILE__).'../../Env/configure.php');
    $id = $_GET['id'];
    if (is_numeric($id)) {
        $connect=new mysqli(HOST,USER,PASSWORD,DB);
        $connect->query("DELETE FROM usuarios WHERE id = {$id}");
        $connect->close();
        echo "<script>
                location.href='../';
             </script>";
    }
?>