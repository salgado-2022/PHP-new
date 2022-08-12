<?php

class ControladorFormulario{
    static public function ctrRegistrar(){
            if (isset($_POST['txtNombre'])){
                //return $_POST['txtNombre']."<br>".$_POST['txtEmail']."<br>";
                return "ok";
            }

    }
}