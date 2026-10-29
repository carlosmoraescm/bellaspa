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
                    <h1><center>Área Restrita</center></h1>
                </div>

                <div id="logo">

                    <a href="index.php"> <img src="img/logo.jpg" border="0" /></a>

                </div>


            </div>

            <div id="banner">

                <form action="verificalogin.php" method="post">
                    <center>   
                        <br/><br/><br/><br/><br/>
                        Login:<br/>
                        <input type="text" name="login"/><br/>

                        Senha:<br/>
                        <input type="password" name="senha"/><br/>

                        <input type ="submit" value="Enviar"/>
                        <br/>
                        <a type ="image" href="index.php">Voltar</a>
                    </center>
                </form>
                <?php
                if (!empty($_GET["msg"])) {
                    echo $_GET["msg"];
                }
                ?>

            </div>

            <div id="rodape">
                <?php include_once 'rodape.php'; ?>
            </div>
    </body>
</html>
