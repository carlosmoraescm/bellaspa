<?php
//session_start() // deve vir sempre no inicio da página para iniciar a sessao  
include_once './validarlogin.php';
?> 
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
                    include_once 'menuadmin.php';
                    echo "<center><h4>Painel de Controle</h4></center>";

                    echo "<center><h3>Seja bem vindo(a) " . $_SESSION["login"] . "</h3></center>";


                    echo "<center><h3>Menu</h3></center>";

                    if ($_SESSION["perfil"] == "adm") {
                        include_once 'menuadmin.php';
                    } else if ($_SESSION["perfil"] == "user") {
                        include_once 'menu_user.php';
                    }
                    ?>

                </div>

                <div id="logo">

                    <a href="index.php"> <img src="img/logo.jpg" border="0" /></a>

                </div>


            </div>

            <div id="banner">
                <img src="img/banner.jpg" alt="Estar bonita é estar BEM!" />
            </div>



            <div id="rodape">
                <?php include_once 'rodape.php'; ?>
                <?php
                // data e hora     
                $agora = time();
                $data = getdate($agora);

                if ($data["wday"] == 0) {
                    echo "Domingo, ";
                } elseif ($data["wday"] == 1) {
                    echo "Segunda-feira, ";
                } elseif ($data["wday"] == 2) {
                    echo "Terça-feira, ";
                } elseif ($data["wday"] == 3) {
                    echo "Quarta-feira, ";
                } elseif ($data["wday"] == 4) {
                    echo "Quinta-feira, ";
                } elseif ($data["wday"] == 5) {
                    echo "Sexta-feira, ";
                } elseif ($data["wday"] == 6) {
                    echo "Sábado, ";
                }

                if ($data["mon"] == 1) {
                    $mes = "Janeiro";
                } elseif ($data["mon"] == 2) {
                    $mes = "Fevereiro";
                } elseif ($data["mon"] == 3) {
                    $mes = "Março";
                } elseif ($data["mon"] == 4) {
                    $mes = "Abril";
                } elseif ($data["mon"] == 5) {
                    $mes = "Maio";
                } elseif ($data["mon"] == 6) {
                    $mes = "Junho";
                } elseif ($data["mon"] == 7) {
                    $mes = "Julho";
                } elseif ($data["mon"] == 8) {
                    $mes = "Agosto";
                } elseif ($data["mon"] == 9) {
                    $mes = "Setembro";
                } elseif ($data["mon"] == 10) {
                    $mes = "Outubro";
                } elseif ($data["mon"] == 11) {
                    $mes = "Novembro";
                } elseif ($data["mon"] == 12) {
                    $mes = "Dezembro";
                }

                echo $data["mday"] . " de " . $mes . " de " . $data["year"] . " &nbsp;&nbsp;";
                ?>
            </div>

        </div>


        <?php
// put your code here
        ?>
    </body>
</html>
