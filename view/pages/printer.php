<h1 style="Text-align: center;">Drivers de Impressoras</h1>
<ul>
    <?php    
        $path = "arquivos/impressoras/";
        $diretorio = dir($path);
            while($arquivo = $diretorio -> read()){
                if ($arquivo != "." && $arquivo != ".."){
                    echo "<li><a href='".$path.$arquivo."'>".$arquivo."</a></li><br/>";
                }
            }
                $diretorio -> close();
    ?>
</ul>
    </br>
    </br>
<form action="doupload.php" method="post" enctype="multipart/form-data">
    UPLOAD: 
    <input type="file" name="file" />
    <input type="submit" name="select" value="Enviar Driver" />
</form>
<form action="dodrop.php" method="post">
    Selecione o arquivo para excluir:
    <select name='nometodrop'>
        <?php

            $diretorio = dir($path);
                while($arquivo = $diretorio -> read()){
                    if ($arquivo != "." && $arquivo != ".."){
                        echo "<option value='".$arquivo."'>".$arquivo."</option>>";
                    }
                }
            $diretorio -> close();
        ?>
    </select>
    <input type="submit" name="select" value="Excluir Driver" />
</form>