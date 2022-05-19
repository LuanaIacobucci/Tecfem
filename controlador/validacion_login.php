<?
include("controlador/conectar.php");
    
    session_start();
    
    if($_POST){
        
        $usuario = $_POST['nombreUsuario'];
        $password = $_POST['contrasena'];
        
        $sql = "SELECT nombreUsuario, contrasena FROM cliente WHERE nombreUsuario='$usuario' AND contrasena='$password'";
        //echo $sql;
        $resultado = $mysqli->query($sql);
        $num = $resultado->num_rows;
        
        if($num>0){
            $row = $resultado->fetch_assoc();
            $password_bd = $row['contrasena'];
            
            $pass_c = $password;
            
            if($password_bd == $pass_c){
                
                $_SESSION['nombreUsuario'] = $row['nombreUsuario'];
                
                echo "Conexion Exitosa";
                header("Location: index.php");
                
            } else {
            
            echo "La contraseña no coincide";
            header("Location: login.php");
            
            }
            
            
            } else {
            echo "Usuaria no existente";
        }
        
        
        
    }

    ?>