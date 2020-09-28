<?php
    //Iniciar sesión y mantener sesion
session_start();
    //Borrar elementos de la variable SESSION, pero la session aun perdura.
session_unset();
    //Destruir la variable de session y la cookiey cierra la session por completo (cerrar).
session_destroy();

header('location:index.php');
?>