<?php

    function AbrirBaseDatos(){

        return mysqli_connect('localhost', 'root', '', 'miercoles_bd');
    }

    function CerrarBaseDatos($conexion){

        mysqli_close($conexion);
    }
    
?>