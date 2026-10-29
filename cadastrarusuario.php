<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bella Estética</title>
        <link rel="shortcut icon" href="img/iconbella.ico" >

        <link rel="stylesheet" href="estilo.css" type="text/css" />

    </head>

    <body>

        <div id="container">

            <div id="topo">

                <div id="menu">

                    <?php
                    //include_once 'menu.php';
                    ?>
                    <h1><center>Cadastro de Usuários</center></h1>
                </div>

                <div id="logo">

                    <a href="index.php"> <img src="img/logo.jpg" border="0" /></a>

                </div>


            </div>

            <div id="banner">
                <form action="gravarusuario.php" method="post">
                    <center>
                        <br/><br/>
                        Login:<br/>
                        <input type="text" name="login"/><br/>

                        Senha:<br/>
                        <input type="text" name="senha"/><br/>

                        Perfil:<br/>
                        <input type="radio" name="perfil" value ="adm"/>adm
                        <input type="radio" name="perfil" value ="user" checked ="true"/>user

                        <input type="submit" name="Gravar"/>
                        <br/>
                        <a type ="image" href="painel.php">Voltar</a>
                    </center>
                </form>

            </div>

            <div id="rodape">
                <?php include_once 'rodape.php'; ?>
            </div>



            <?php
            // put your code here
            ?>
    </body>
</html>