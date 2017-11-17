<!DOCTYPE html>
<html lang="en">
<?php
    
    require_once "../controladores/empleadoController.php";
    $login= new empleadoController();
    $resultado= $login->verificar();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/bootstrap/bootstrap.min.css">
    <title>Lomiteria</title>
</head>
<body>
    <form method="POST">
        <div class="input-group">
            <label>Usuario</label>
            <input type="text" class="form-control" name="user" value="<?php echo $resultado["user"];?>" >
        </div>
        <div class="input-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="password" value="<?php echo $resultado["password"];?>">
        </div> 
        <!--<input type="button" value="identificar" class="btn btn-danger" onclick="this.form.submit()">-->
        <div class="btn-group">
        <button class="btn btn-success" type="submit">indentificarme</button>
        </div>  
    </form>
</body>
</html>