<h1 style="Text-align: center;">Softwares Básico</h1>
<ul>
    <?php    
        $path = "arquivos/softwares/";
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
    <input type="file" name="file"></input>
    <input type="submit" name="select" value="Enviar Software"></input>
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
    <input type="submit" name="select" value="Excluir Software"/>
</form>
