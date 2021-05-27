<?php
include ('view/header.php');

      @$name = $_POST['opition'];
    //$menuok = 'ok'
    if(@$menuok == 'ok' || $name != Null){

        if($name == 'Home'){
            include ('view/menu.php');
            echo('<h1 style="Text-align: center;">Inicio</h1>');
            include ('view/footer.php');

        };
    
        if($name == 'Programas'){
            include ('view/menu.php');
            include ('view/pages/software.php');
            include ('view/footer.php');


        };
    
        if($name == 'Sistemas Operacionais'){
            include ('view/menu.php');
            include ('view/pages/sistemasop.php');
            include ('view/footer.php');


        };
          
        if($name == 'Impressoras'){
            include ('view/menu.php');
            include ('view/pages/printer.php');
            include ('view/footer.php');


        };
    }
    else{
            echo('<h2 style="Text-align: center;">Huuuuuum, parece que alguém quis burlar a senha....</h2>');
            echo('<h4 style="Text-align: center;">Acesse <a href="index.php">AQUI</a> Para fazer o login</h4>');
            echo('<center><img style="max-width: 400px;"src="pani.jpg"></center>');

    };
 ?>
