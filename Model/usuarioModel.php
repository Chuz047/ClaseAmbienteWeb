<?php include_once 'baseDatosModel.php';

    function RegistrarUsuario()
    {
        $conexion = AbrirBaseDatos();

        // Registrar el usuario

        CerrarBaseDatos($conexion);

        // Return respuesta
    }

    function IniciarSesion()
    {
        $conexion = AbrirBaseDatos();

        // Validar el usuario

        CerrarBaseDatos($conexion);

        // Return respuesta
    }
    
?>