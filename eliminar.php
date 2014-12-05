<?php

    require 'db.php';

    $id = $_REQUEST['id'];
    $id_m = $_REQUEST['id_m'];

    $sql = "DELETE FROM maestro_materia WHERE id_materia=$id AND id_maestro=$id_m";
    $consulta = mysql_query($sql)or die("Error al eliminar");

    print "<meta http-equiv='refresh' content='0;url=TestMateria.php'>";
    exit;