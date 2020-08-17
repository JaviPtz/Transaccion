<?php
    //Conexion a la base de Datso con PDO
    class Conexion{

        private $user = "root";
        private $pass = "";

        function conectar(){

            try{
                $pdo  = new PDO('mysql:host=localhost;dbname=transacciones',$this->user,$this->pass);

                echo "Conexion correcta";

            }catch(PDOException $error){

                echo "No se pudo conectar" . $error->getMessage();
            }
        }
    }
    $nuevaConexion = new Conexion();
    $nuevaConexion->conectar();
?>