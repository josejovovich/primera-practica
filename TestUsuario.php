<?php

    header("Content-Type: text/html;charset=utf-8");

    require'db.php';

    session_start();

    if(isset($_SESSION['sesionUsuario'])){

    echo"<html lang='en'>";

    require 'Usuario.php';
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
    //Creamos un objeto
    $usuario = new Usuario();
    if(isset($_POST["submit"]))
    {
        switch($_POST["submit"])
        {
            case "Agregar":
                $nombre=$_POST['nombre'];
                $app=$_POST['app'];
                $apm=$_POST['apm'];
                $usuario->createUsuario("$nombre","$app","$apm",$_POST['nivel']);
                break;
            case "Eliminar":
                $ide = $_POST['ide'];
                if($ide != ""){
                    $usuario->deleteUsuario("$_POST[ide]");
                }
                break;
            case "Modificar":
                $idm = $_POST['idm'];
                if($idm != ""){
                    $usuario->updateUsuario("$_POST[idm]","$_POST[nombre]","$_POST[app]","$_POST[apm]","$_POST[nivel]");
                }
                break;
            case "Consultar":
                $idc = $_POST['idc'];
                if($idc != ""){
                    $usuario->readUsuarioS($_POST["idc"]);
                }
                break;
        }
    }
?>

<div class='table-responsive sok_font bg_sok'>
    <form name='alumno' action='TestUsuario.php' method='POST'>
        <table class="table table-bordered">
            <tr>
                <td>Nombre(s):</td>
                <td><input type="text" name="nombre" class="input_sok"></td>
            </tr>
            <tr>
                <td>Apellido Paterno:</td>
                <td><input type="text" name="app" class="input_sok"></td>
            </tr>
            <tr>
                <td>Apellido Materno:</td>
                <td><input type="text" name="apm" class="input_sok"></td>
            </tr>
            <tr>
                <td>Nivel:</td>
                <td><select name="nivel">
                        <option value="1">Administrador</option>
                        <option value="2">Maestro</option>
                        <option value="3">Alumno</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Agregar" class="button_sok"></td>
            </tr>
            <tr>
                <th>ID:</th><td> <input type="text" name="ide" placeholder="Eliminar" class="input_sok"></td>
                <td><input type="submit" name="submit" value="Eliminar" class="button_sok"> </td>
            </tr>
            <tr>
                <th>ID:</th><td> <input type="text" name="idm" placeholder="Modificar" class="input_sok"></td>
                <td><input type="submit" name="submit" value="Modificar" class="button_sok"> </td>
            </tr>
            <tr>
                <th>ID:</th><td> <input type="text" name="idc" placeholder="Consultar" class="input_sok"></td>
                <td><input type="submit" name="submit" value="Consultar" class="button_sok"> </td>
            </tr>

        </table>
    </form>
</div>

<?php

    //Mandamos llamar la función 'readUsuarioG' del objeto $usuario.
    //Que nos muestra los registros de la BD.
    $usuario->readUsuarioG();

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