<?php   
    require_once "../modelos/empleado.php";

    class empleadoController{
        public function verificar(){
            if(isset($_POST["user"]) && isset($_POST["password"])){
                $usuario=$_POST["user"];
                $contraseña=$_POST["password"];
                $datos = array("user"=>$usuario,"password"=>$contraseña);
                //var_dump($datos);die(); //para corroborar que se manden bien los datos
                $resultado= empleado::verificar($datos);
                //var_dump($resultado);die(); //para corroborar que se manden bien los datos
                if($resultado->num_rows > 0){
                    $array = $resultado->fetch_assoc();
                        $privilege=$array["privilege"];
                        if($privilege==1){
                        echo "<script language='javascript'>window.location='../vistas/menu0.php'</script>";
                        }else{
                            if($privilege==2){
                                echo "<script language='javascript'>window.location='../vistas/menu1.php'</script>";
                            }
                        }   
                    } else{
                        echo "<script language'javascript'>alert('Usuario y/o contraseña incorrectos, por favor verifique los datos nuevamente :D')</script>";
                        echo "<script language='javascript'>window.location='../vistas/login.php'</script>";
                        }
            }
        }

    }
        public function agregar(){
            if (isset($_POST["user"])&& isset($_POST["pass"])){
                $usuario=$_POST["user"];
                $contraseña=$_POST["password"];
                $datos = array("user"=>$usuario,"password"=>$contraseña);
                //var_dump($datos);die(); //para corroborar que se manden bien los datos
                $resultado= empleado::agregar($datos);
                //var_dump($resultado);die(); //para corroborar que se manden bien los datos
                if($resultado->num_rows >0){
                    $array = $resultado->fetch_assoc();
                    if($array==1){

                    }

                }

            }
        }
?>