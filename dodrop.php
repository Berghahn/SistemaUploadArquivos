<?php
include('view/header.php');
include('view/menu.php'); 

    $tipo = $_POST['select'];
    $arquivo = $_POST['nometodrop'];

    switch($tipo){
        case 'Excluir Software':
            //Softwares
            $dir = "arquivos/softwares/"; //habilitar escrita
            
            if(file_exists($dir.$arquivo)){
                unlink($dir.$arquivo);
                include_once 'view/pages/software.php';
                echo "Excluido com sucesso";
                echo"</br>";
                echo"</br>";
                echo"</br>";
                }
                else{
                    include_once 'view/pages/software.php';
                    echo "Não foi possível excluir, arquivo inexistente ou não selecionado";
                    echo"</br>";
                    echo"</br>";
                    echo"</br>";
                }
            break;
        case 'Excluir ISO':
            //Sistemas Operacionais
            $dir = "arquivos/sistemasop/"; //habilitar escrita
            
            if(file_exists($dir.$arquivo)){
                unlink($dir.$arquivo);
                include_once 'view/pages/sistemasop.php';
                echo "Excluido com sucesso";
                echo"</br>";
                echo"</br>";
                echo"</br>";
                }
                else{
                    include_once 'view/pages/sistemasop.php';
                    echo "Não foi possível excluir, arquivo inexistente ou não selecionado";
                    echo"</br>";
                    echo"</br>";
                    echo"</br>";
                }
            break;
        case 'Excluir Driver':
            //Drivers de Impressoras
            $dir = "arquivos/impressoras/"; //habilitar escrita
            if(file_exists($dir.$arquivo)){
                unlink($dir.$arquivo);
                include_once 'view/pages/printer.php';
                echo "Excluido com sucesso";
                echo"</br>";
                echo"</br>";
                echo"</br>";
                echo"</br>";
            }
                else{
                    include_once 'view/pages/printer.php';
                    echo "Não foi possível excluir, arquivo inexistente ou não selecionado";
                    echo"</br>";
                    echo"</br>";
                    echo"</br>";
                }
            break;
        case 'Excluir Drivers':
            //Drivers de Impressoras
            $dir = "arquivos/drivers/"; //habilitar escrita
            if(file_exists($dir.$arquivo)){
                unlink($dir.$arquivo);
                include_once 'view/pages/drivers.php';
                echo "Excluido com sucesso";
                echo"</br>";
                echo"</br>";
                echo"</br>";
            }
                else{
                    include_once 'view/pages/drivers.php';
                    echo "Não foi possível excluir, arquivo inexistente ou não selecionado";
                    echo"</br>";
                    echo"</br>";
                    echo"</br>";
                }
            break;
        case 'Excluir Arquivo':
            //Software TI
            $dir = "arquivos/ti/"; //habilitar escrita
            if(file_exists($dir.$arquivo)){
                unlink($dir.$arquivo);
                include_once 'view/pages/ti.php';
                echo "Excluido com sucesso";
                echo"</br>";
                echo"</br>";
                echo"</br>";
            }
            else{
                include_once 'view/pages/ti.php';
                echo "Não foi possível excluir, arquivo inexistente ou não selecionado";
                echo"</br>";
                echo"</br>";
                echo"</br>";
            }
            break;
    }
include('view/footer.php');
?>