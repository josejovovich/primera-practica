<?php

    header("Content-Type: text/html;charset=utf-8");

    require'db.php';

    session_start();

    if(isset($_SESSION['sesionUsuario'])){

    echo"<html lang='en'>";

    error_reporting(E_ERROR);

    //Incluímos librerías y archivos necesarios.
    require 'Usuario.php';
    require 'db.php';
    require 'Alumno.php';
    require 'header.php';
    echo"<img src='img/a2.jpg' class='bg'>";

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

    //Creamos un objeto.
    $alumno = new Alumno();

    //Sólo si recibe el elemento del formulario 'add_alu_grup'.
    if(isset($_REQUEST['add_alu_grup'])){
        //Recibimos la cantidad de alumnos.
        $cuantos = $_REQUEST['cuantos'];
        //Repetimos el proceso hasta $cuantos.
        echo"<div class='success_sok'>Alumnos agregados correctamente</div>";
        for($y = 0; $y < $cuantos; $y++){
            //Recibimos el checkbox de la posición [$y].
            $al = $_REQUEST["al$y"];
            //Va a llamar al método asignaGrupos sólo si el checkbox está lleno.
            if($al != ""){
                $alumno->asignaGrupos($al, $_REQUEST['grupo']);
            }
        }
    }
    //Sólo si recibe el id a eliminar 'desasignar'.
    if(isset($_REQUEST['id_alu'])){
        //Mandamos llamar al método desasignaGrupos.
        $alumno->desasignaGrupos($_REQUEST['id_alu']);
        echo"<div class='error_sok'>Alumnos desasignados correctamente</div>";
    }

    //Creamos un formulario en el cual mostramos los alumnos y el combo dinámico de los grupos.
    echo"<form action=TestAlumno.php method=POST>";
    //Mostramos los alumnos ya sea asignados o desasignados de un grupo.
    $alumno->muestraAlumnosGrupos();
    //Mostramos el combo dinámico.
    $alumno->muestraGrupos();
    //Elemento del formulario 'add_alu_grup'.
    echo"<input type=hidden name=add_alu_grup>";
    echo"<input type=submit value=Agregar class=button_sok>";
    echo"</form>";

    echo"</div>";

    //Incluímos el footer.
    require'footer.php';

    }
    else{
        echo"<script>alert(' No ha iniciado sesión.');
			location.href = 'login.php';
			</script>";
    }
?>

</html>