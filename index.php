<?php 
	$conexion=mysqli_connect('localhost','root','','transacciones');
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Mostrar lista de Usuarios</title>
</head>
<body>
<!-- formulario -->

<div class=" w-50 mx-auto bg-grey ">
      <h4 class="text-center pt-5">Transacción</h4>
        <form method="post">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Cuenta Devitar</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <?php
            //Consuta a la base de datos
            $sql="Select * from  Usuario";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <option><?php echo $mostrar['numero_cuenta_usu']?> </option>
            <?php  
            }
            ?>
            </select>
        </div>
          
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Cuenta Acreditar</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <?php
            //Consuta a la base de datos
            $sql="Select * from  Cliente";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <option><?php echo $mostrar['numero_cuenta_cli']?> </option>
            <?php  
            }
            ?>
            </select>
        </div>
        <div class=" form-group">
          <label for="exampleInputEmail1">Saldo</label>
          <input type="number" class="form-control" placeholder="saldo de la cuenta" name="saldo_cuenta">
        
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Saldo a acreditar</label>
          <input type="number" class="form-control" placeholder="Correo Electronico" name="saldo_cuenta">
        </div>
        <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
      </form>
</div>

<!-- tabla usuario -->
<div style="width:45%; float:right">
    <table class="table">
    <h4 class='text-center p-5'>Lista de Usuarios </h4>
    <thead class="thead-dark">
            <td>id</td>
            <td>Nombre Usuario </td>
            <td>número cuenta</td>
            <td>saldo</td>
        </tr>
        </thead>
        <tbody>
    <?php
            //Consuta a la base de datos
        $sql="Select * from  Usuario";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mostrar['id_usu']?></td>
                <td><?php echo $mostrar['nombre_usu']?></td>
                <td><?php echo $mostrar['numero_cuenta_usu']?></td>
                <td><?php echo $mostrar['saldo_cuenta_usu']?></td> 
            </tr>
            <?php  
        }
    ?>
        <tbody>
    </table>
</div>
<!-- tabla clientes -->
<div style="width:45%; float:left">
    </table>
    <h4 class='text-center p-5'>Lista de Clientes </h4>
    <table class="table">
    <thead class="thead-dark">
            <td>id</td>
            <td>Nombre Cliente </td>
            <td>número cuenta</td>
            <td>saldo</td>
        </tr>
        </thead>
        <tbody>
    <?php
            //Consuta a la base de datos
        $sql="Select * from  Cliente";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mostrar['id_cli']?></td>
                <td><?php echo $mostrar['nombre_cli']?></td>
                <td><?php echo $mostrar['numero_cuenta_cli']?></td>
                <td><?php echo $mostrar['saldo_cuenta_cli']?></td> 
            </tr>
            <?php  
        }
    ?>
    <tbody>
    </table>
</div>
</body>
</html>

