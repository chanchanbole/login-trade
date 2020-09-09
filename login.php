<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        /*$clave = hash('sha512', $clave);*/
        
        try{
            $conexion = new PDO('mysql:host=localhost:3306;dbname=trade_2019_wp_db', 'trade_2019_wp_us', 'Dvfm44_0');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM wp_login WHERE usuario = :usuario AND clave = :clave'
        );
        
        $statement->execute(array(
            ':usuario' => $usuario,
            ':clave' => $clave
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['usuario'] = $usuario;
            header('location: principal.php');
        }else{
            $error .= '<i>Este usuario no existe o la contraseña no es correcta</i>';
        }
    }
    
require 'frontend/login-vista.php';


?>