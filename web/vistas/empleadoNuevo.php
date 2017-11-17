<?php
    require_once "../controladores/empleadoController.php";
    $login= new empleadoController();
    $resultado= $login->agregar();
?>
<link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">

<div>
    <h1 class="jumbotron">Ingrese los datos del empleado</h1>
    <form method="POST">
        <div class="input-group">
            <label>Usuario</label>
            <input type="text" class="form-control" name="user">
        </div>
        <div class="input-group">
            <label>Contraseña</label>
            <input type="text" class="form-control" name="pass">
        </div>
        <button class="btn btn-success" type="submit">Agregar</button>
    </form>
</div>