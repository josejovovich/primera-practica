<?php

    //Incluímos librerías y archivos necesarios.
    require 'header.php';
    require 'footer.php';
    require 'Login_obj.php';

    echo"<img src='img/a2.jpg' class='bg'>";

    $login = new Login_obj();

    $login->formLogin();


?>

<script type = "text/JavaScript">
    //Funcion la cual detiene el submit, carga al div ajax una imagen gif y posteriormente manda llamar al archivo validando.php.
    $(function (e) {
        $('#frmdo').submit(function (e) {
            e.preventDefault()
            $('.ajax_login').html("<img src='img/ajax.gif' width='60' height='60' />");
            $('.ajax_login').load('valida.php?' + $('#frmdo').serialize())
        })
    })
</script>