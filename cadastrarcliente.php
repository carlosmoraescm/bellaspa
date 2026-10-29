<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bella Estética</title>
        <link rel="shortcut icon" href="img/iconbella.ico" >

        <noscript>
        <!-- caso o usuario desabilite o javascript -->
        <meta http-equiv="refresh" content="0;url=errocadcliente.php"/>  <!-- content="tempo em segundos;pagina de erro"-->

        </noscript>
        <!-- carrega Cidades de acordo com o Estado de origem -->
        <script type="text/javascript" src="js/cidades-estados-v0.2.js"></script> 
        <!-- Valida mascara de celular 8 e 9 digitos -->
        <script type="text/javascript" src="js/jquery.mask.min.js"/></script>
    <!-- -->
    <script src="js/jquery.min.js"></script>
    <!-- verifica se data é valida -->
    <script src="js/jquery.validate.js"></script>
    <!-- monta mascaras -->
    <script src="js/maskedinput-1.1.2.pack.js"></script>
    <script>
        // rodando o plug in jquery
        $(document).ready(function() {
            $("#f").validate();
            $("#data").mask("99/99/9999");
            $("#cep").mask("99.999-999");
            $("#cpf").mask("999.999.999-99");
        } // chave
        ); //parenteses

    </script>
    <script type="text/javascript">
        window.onload = function() {
            new dgCidadesEstados(
                    document.getElementById('estado'),
                    document.getElementById('cidade'),
                    true
                    );
        }
    </script>
    <style>
        label.error{
            color: red;
            font-size: 12px;
        }    
    </style>
    <link rel="stylesheet" href="estilo.css" type="text/css" />

</head>

<body>

    <div id="container">

        <div id="topo">

            <div id="menu">

                <?php
                //include_once 'menu.php';
                ?>
                <h1><center>Cadastro de Clientes</center></h1>
            </div>

            <div id="logo">

                <a href="index.php"> <img src="img/logo.jpg" border="0" /></a>

            </div>


        </div>

        <div id="banner">

            <form action="gravarcliente.php" method="post">
                <center>
                    <br/>
                    Nome:<input type="text" name="nome" required="true" size="70" placehoolder="Digite o nome do cliente"/>
                    <br/><br/>
                    Email:<input type="email" name="email" required="true" size="50"/>
                    <label for="txttelefone">         Telefone:</label>
                    <input type="tel" name="txttelefone" id="txttelefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
                    <script type="text/javascript">$("#txttelefone").mask("(99) 9999-99999");</script>
                    <br/><br/>
                    CPF:<input type="text" name="cpf" required="true" size="10" id="cpf" pattern="\d{3}.\d{3}.\d{3}-\d{2}" title="999.999.999-99"/>
                    Data de Nascimento:<input type="data" name="dtnasc" class="required" id="data"/>
                    <br/><br/>  
                    Endereço:<input type="text" name="endereco" size ="70"/>   Número:<input type="text" name="numero" size ="5"/>
                    <br/><br/>
                    Complemento:<input type="text" name="complemento" size ="70"/>
                    <br/><br/>
                    Bairro:<input type="text" name="bairro" size ="70"/>
                    <br/><br/>
                    Cep:<input type="text" name="cep" size ="8" required="false" id ="cep" pattern="\d{2}.\d{3}-\d{3}" />
                    Estado:<select name="estado" id="estado"></select>    Cidade:<select name="cidade" id="cidade"></select>

                    <input type="submit" values="Enviar"/>

                    <a type ="image" href="painel.php">Voltar</a>
                </center>
                </fomr>


        </div>
        <div id="rodape">
            <?php include_once 'rodape.php'; ?>
        </div>
</body>
</html>

