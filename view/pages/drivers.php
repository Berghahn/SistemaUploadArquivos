<h1 style="Text-align: center;">Drivers</h1>
<ul>
    <?php    
        $path = "arquivos/drivers/";
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
    <input type="submit" name="select" value="Enviar ISO" />
</form>
<form action="dodrop.php" method="POST">
    <p>Selecione o arquivo para excluir:
        <select name='nometodrop'>
            <?php
                $path = "arquivos/drivers/";
                $diretorio = dir($path);
                echo "<option value='Selecione'>Selecione</option>";
                    while($arquivo = $diretorio -> read()){
                        if ($arquivo != "." && $arquivo != ".."){
                            echo "<option value='".$arquivo."'>".$arquivo."</option>";
                        }
                    }
                $diretorio -> close();
            ?>
        </select>
        <input type="submit" name="select" value="Excluir Drivers" />
    </p>
</form>
</br>
</br>
</br>