<?php 
	$conexion=mysqli_connect('localhost','root','','transacciones');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=for, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="w-50 mx-auto bg-grey">
      <h1 class="text-center pt-5">Usuario</h1>
          <form method="post">
          <div class="form-group">
          <label for="exampleInputEmail1">Id</label>
          <input type="number" class="form-control"  placeholder="id..." name=id>
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre usuario</label>
          <input type="text" class="form-control" placeholder="nombre usurio..." name="nombre">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Número cuenta</label>
          <input type="text" class="form-control" placeholder="número cuenta...." name="numero_cuenta">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Saldo</label>
          <input type="number" class="form-control" placeholder="Correo Electronico" name="saldo_cuenta">
        
        </div>

        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
      </form>
</div>
        <?php 

        if (isset($_POST['enviar'])) {
            if (strlen($_POST['nombre']) >= 1 && strlen($_POST['saldo_cuenta']) >= 1) {
                //OBTENER VALORES
                $id = trim($_POST['id']);
                $nombre = trim($_POST['nombre']);
                $numero_cuenta = trim($_POST['numero_cuenta']);
                $saldo_cuenta = trim($_POST['saldo_cuenta']);
                //INSERTAR DATOS EN BD
                $consulta = "INSERT INTO usuario(id_usu,nombre_usu, numero_cuenta_usu, saldo_cuenta_usu) VALUES ('$id','$nombre','$numero_cuenta','$saldo_cuenta')";
                $resultado = mysqli_query($conexion,$consulta);
                if ($resultado) {
                    ?> 
                    <h3 class="ok text-center">Conexion Exitosa<br/>
                                    Registro completo
                    </h3>
                   <?php
                } else {
                    ?> 
                    <h3 class="bad text-center">Se produjo un error</h3>
                   <?php
                }
            }   else {
                    ?> 
                    <h3 class="bad text-center">Todos los campos son obligatorios</h3>
                   <?php
            }
        }   
        ?>
</body>
</html>