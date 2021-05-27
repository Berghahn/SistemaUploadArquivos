<?php
include('view/header.php');

    $tipo = $_POST['select'];
    $arquivo = $_POST['nometodrop'];

    switch($tipo){
        case 'Excluir Software':
            //Softwares
            $dir = "arquivos/softwares/"; //habilitar escrita
            
            if(file_exists($dir.$arquivo)){
                unlink($dir.$arquivo);
                include ('view/menu.php');
                include_once 'view/pages/software.php';
                echo "Excluido com sucesso";
                }
                else{
                    echo "Não foi possível excluir";
                }
            break;
        case 'Excluir ISO':
            //Sistemas Operacionais
            $dir = "arquivos/sistemasop/"; //habilitar escrita
            
            if(file_exists($dir.$arquivo)){
                unlink($dir.$arquivo);
                include ('view/menu.php');
                include_once 'view/pages/sistemasop.php';
                echo "Excluido com sucesso";
                }
                else{
                    echo "Não foi possível excluir";
                }
            break;
        case 'Excluir Driver':
            //Drivers de Impressoras
            $dir = "arquivos/impressoras/"; //habilitar escrita
            if(file_exists($dir.$arquivo)){
                unlink($dir.$arquivo);
                include ('view/menu.php');
                include_once 'view/pages/printer.php';
                echo "Excluido com sucesso";
            }
                else{
                    echo "Não foi possível excluir";
                }
            break;
    }
include('view/footer.php');
?>