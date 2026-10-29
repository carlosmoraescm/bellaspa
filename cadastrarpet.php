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
                    <h1><center>Cadastro de Pets</center></h1>
                </div>

                <div id="logo">
                    <a href="index.php"> <img src="img/logo.jpg" border="0" /></a>

                </div>
            </div>

            <div id="banner">
                <!-- enctype="multipart/form-data => habilita o form a enviar arquivo -->
                <form action="gravarpet.php" method ="post" enctype="multipart/form-data">
                    <center>
                        <br/>
                        Nome do pet: <input type="text" name="nomepet"/><br/><br/>

                        Raça do pet: <input type="text" name="raca"/><br/><br/>

                        Foto: <input type="file" name="foto"/><br/>

                        Detalhes do pet: <textarea name="detalhes" cols="40" rows="7"/></textarea><br/><br/>
                        <input type="submit" value="Enviar" />

                        <a type ="image" href="painel.php">Voltar</a>
                        <!--   <meta http-equiv="refresh" content="5; url=http://www.hscripts.com/index.php"> /> -->



<!-- <input type="image" value="Enviar" /> -->
                    </center>
                </form>
            </div>
            <div id="rodape">
                <?php include_once 'rodape.php'; ?>
            </div>
    </body>
</html>
