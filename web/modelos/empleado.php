<?php
    require_once "conexion.php";

    class empleado{
        public function verificar($datos){
            //var_dump($usuario);die(); //para corroborar que se manden bien los datos
            $conectar= new conexion();
            $conexion = $conectar->conectar();
            $usuario = $datos['user'];
            $contraseña = $datos['password'];
            $consulta="SELECT * FROM empleado WHERE user='$usuario' AND password='$contraseña'";
            $resultadoConsulta=$conexion->query($consulta);
            //var_dump ($resultadoConsulta);die();//para ver si toma bien los datos de la tabla 
            $numRegistros=$resultadoConsulta->num_rows;
            if($numRegistros>0){
                //var_dump($resultadoConsulta);die();
                return $resultadoConsulta;
            }
                else{
                    return 0;
                }
            $conexion->close();
                }
        
        public function agregar($datos){
            $conectar= new conexion();
            $conexion = $conectar->conectar();
            $usuario = $datos['user'];
            $contraseña = $datos['password'];
            $existencia="SELECT * FROM empleado WHERE user='$usuario'";
            $verificacion= $conexion->query($existencia);
            $numRegistrosVeificacion=$verificacion->num_rows;        
            if($numRegistrosVeificacion>0){
                return 0;  //el usuario ya existe, no se puede ingresar
            }
                else{  //el usuario no existe, se procede a agregar
                    $nuevo="SELECT INTO empeleados(user,password,privilege) VALUES('$usuario','$contraseaña',1)";
                    $agregar= $conexion->query($nuevo);
                    $existencia2="SELECT * FROM empleado WHERE user='$usuario' AND password='$contraseñña';
                    $verificacion2= $conexion->query($existencia2);
                    $numRegistrosVeificacion=$verificacion2->num_rows; 
                      
                } 
                }
}
?>