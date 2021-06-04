<h1 style="Text-align: center;">Softwares de Auxiliares</h1>
<ul>
    <?php    
        $path = "arquivos/ti/";
        $diretorio = dir($path);
            while($arquivo = $diretorio -> read()){
                if ($arquivo != "." && $arquivo != ".."){
                    echo "<a href='".$path.$arquivo."'><li>".$arquivo."</li></a><br/>";
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
    <input type="submit" name="select" value="Enviar Arquivo" />
</form>
<form action="dodrop.php" method="POST">
    <p>Selecione o arquivo para excluir:
        <select name='nometodrop'>
            <?php
                $path = "arquivos/ti/";
                echo "<option value='Selecione'>Selecione</option>";
                $diretorio = dir($path);
                    while($arquivo = $diretorio -> read()){
                        if ($arquivo != "." && $arquivo != ".."){
                            echo "<option value='".$arquivo."'>".$arquivo."</option>";
                        }
                    }
                $diretorio -> close();
            ?>
        </select>
        <input type="submit" name="select" value="Excluir Arquivo" />
    </p>
</form>

</br>
</br>
</br>