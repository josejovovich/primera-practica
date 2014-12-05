<?php

    header("Content-Type: text/html;charset=utf-8");

    require'db.php';

    session_start();

    if(isset($_SESSION['sesionUsuario'])){

    echo"<html lang='en'>";

    //Incluímos el header (las librerias).
    require'header.php';
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

?>

    <div class="container theme-showcase" role="main">
        <?php

            $nombre = mysql_result($consulta, 0, 'Nombre');

            echo"<div class='welcome'>Bienvenido $nombre</div>";
            echo"<div class='img_user'></div>";
        ?>
    </div>

<?php

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