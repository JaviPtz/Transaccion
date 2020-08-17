<?php

    $conexion= new mysqli("localhost", "root", "", "transacciones");


    $conexion->autocommit(false);

    try 
    {
        /*$conexion->query("INSERT INTO usuario (id_usu, nombre_usu, numero_cuenta_usu, saldo_cuenta_usu) VALUES (2,'Javier', 'J21', 10)");*/
        
        $conexion->query("UPDATE usuario set saldo_cuenta_usu = 4000 WHERE id_usu = 1");
        $conexion->query("UPDATE usuario SET saldo_cuenta_usu = 1010 WHERE id_usu = 2");
        
        $conexion->commit();

    }
    catch(Exception $e) 
    {
        $conexion->rollback();
        echo 'fallaron las cosas papu >:v try again: ',  $e->getMessage(), "\n";

    }
?>