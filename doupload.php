<?php
include('view/header.php');
include('view/menu.php'); 

    $tipo = $_POST['select'];
    $arquivo = $_FILES['file'];

    switch($tipo){
        case 'Enviar Software':
            //Softwares
            $dir = "arquivos/softwares/"; 
            // Move o arquivo da pasta temporaria de upload para a pasta de destino 
            if (move_uploaded_file($arquivo["tmp_name"], $dir.$arquivo['name'])) {
                include ('view/pages/software.php');
                echo "Arquivo enviado com sucesso!"; 
            } 
            else { 
                echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
            }           
            break;
        case 'Enviar ISO':

            //Sistemas Operacionais
            $dir = "arquivos/sistemasop/"; 
            // Move o arquivo da pasta temporaria de upload para a pasta de destino 
            if (move_uploaded_file($arquivo['tmp_name'], $dir.$arquivo['name'])) { 
                include ('view/pages/sistemasop.php');
                echo "Arquivo enviado com sucesso!"; 
            } 
            else { 
                echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
            }           
            break;
        case 'Enviar Driver':
            //Drivers de Impressoras
            $dir = "arquivos/impressoras/";
            // Move o arquivo da pasta temporaria de upload para a pasta de destino 
            if (move_uploaded_file($arquivo["tmp_name"], "$dir/".$arquivo["name"])) { 
                include ('view/pages/printer.php');
                echo "Arquivo enviado com sucesso!"; 
            } 
            else { 
                echo "Erro, o arquivo n&atilde;o pode ser enviado."; 
            }           
            break;
        case '0':
            echo ("<h2>SELECIONE UM ARQUIVO PARA ENVIAR</h2>");

            break;


    }
include('view/footer.php');
?>