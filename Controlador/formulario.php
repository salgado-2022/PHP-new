<?php

class ControladorFormulario{
    public function ctrRegistrar(){
            if (isset($_POST['txtNombre'])){
                echo $_POST['txtNombre'];
            }

    }
}