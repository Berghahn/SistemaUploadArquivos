<?php include ('view/header.php');
        @$getsenha = $_POST['pass'];
        @$cripto = hash('md5', $getsenha, false);
        @$origin = 'cdafe312e8f866c0b0c9743f61146006';
        @$opcao = $_POST['opition'];

        //Senha correta
        if($cripto == $origin || $opcao !=NULL){
            include ('view/menu.php');
            include_once ('home.php');
            include ('view/footer.php');
        } 
        //Página com erro de senha
        if (@$getsenha !== NULL && $cripto !== $origin){
            echo('
                <section class="backlogin">
                    <section class="login">
                        <center>
                            <form action="" method="POST">
                                <img style="max-width: 150px; margin: 20px;" src="arquivos/login.png">
                                </br>
                                <input type="password" name="pass" value="senha"> </input>
                                </br>
                                </br>
                                <input type="submit" value="Fazer Login">
                                <p>SENHA ERRADA!</p>
                            </form>
                        </center>
                    </section>
                </section>
            ');
        }
        //Primeira página, antes de erro ou acesso correto.
        if (@$getsenha == NULL && $opcao ==NULL){
            echo('
                <section class="backlogin">
                    <section class="login">
                        <center>
                            <form action="" method="POST">
                                <img style="max-width: 150px; margin: 20px;" src="arquivos/login.png">
                                </br>
                                <input type="password" name="pass" value="senha"> </input>
                                </br>
                                </br>
                                <input type="submit" value="Fazer Login">
                            </form>
                        </center>
                    </section>
                </section>
            ');        
        }

?>