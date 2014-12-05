<?php

    class Login_obj{

        public function formLogin(){
            echo"<div class='cont_prin_login'>";
            echo"<form action='login.php' method='POST' name = 'frmdo' id = 'frmdo' target = '_self'>";
            echo"<input type='text' name='user' class='label_user' placeholder='Usuario'>";
            echo"<input type='password' name='pass' class='label_pass' placeholder='Contraseña'>";
            echo"<input type='submit' value='Acceder' class='button_login'>";
            echo"</form>";
            echo"</div>";
            echo"<div id = 'msg' class='ajax_login'></div>";
        }


    }
?>