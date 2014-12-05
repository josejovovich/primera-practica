<?php

    header("Content-Type: text/html;charset=utf-8");

    require'db.php';

    session_start();

    if(isset($_SESSION['sesionUsuario'])){

    echo"<html lang='en'>";

    require 'Materia.php';
    echo"<img src='img/a2.jpg' class='bg'>";
    require 'db.php';
    require 'header.php';

    $id = $_COOKIE['id'];

    $sql = "SELECT * FROM usuario WHERE id = $id";
    $consulta = mysql_query($sql)or die("Error de consulta");

    $nivel = mysql_result($consulta, 0, 'Nivel');

    if($nivel == 1){
        require'menu.php';
    }
    else{
        require'menu_2.php';
    }

    echo"<div class='container theme-showcase' role='main'>";

    if(isset($_REQUEST['accion'])){
        $accion = $_REQUEST['accion'];
        $materia = $_REQUEST['materia'];
        $maestro = $_REQUEST['maestro'];

        if($materia != 0){
            $sql = "INSERT INTO maestro_materia (id_maestro, id_materia) VALUES ($maestro, $materia)";
            $consulta = mysql_query($sql)or die("Error de inserción");
        }

    }

    //Creamos un objeto
    $materia = new Materia();

    $materia->seleccionaMaestro();

    echo"</div>";

    require 'footer.php';

    }
    else{
        echo"<script>alert(' No ha iniciado sesión.');
			location.href = 'login.php';
			</script>";
    }
?>

</html>