<h1 style="Text-align: center;">Sistemas Operacionais</h1>
<ul>
    <?php    
        $path = "arquivos/sistemasop/";
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
<form action="doupload.php" method="POST" enctype="multipart/form-data">
    UPLOAD: 
    <input type="file" name="file" />
    <input type="submit" name="select" value="Enviar ISO" />
</form>
<form action="dodrop.php" method="POST">
    <p>Selecione o arquivo para excluir:
        <select name='nometodrop'>
            <?php
                $path = "arquivos/sistemasop/";
                $diretorio = dir($path);
                    while($arquivo = $diretorio -> read()){
                        if ($arquivo != "." && $arquivo != ".."){
                            echo "<option value='".$arquivo."'>".$arquivo."</option>";
                        }
                    }
                $diretorio -> close();
            ?>
        </select>
        <input type="submit" name="select" value="Excluir ISO" />
    </p>
</form>
