<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <script src="js/dojo/dojo.js"></script>
        <script src="js/dojo/utils.js"></script>
    </head>
    <body>
        
        <h3>Consulta de Clientes</h3>
        
        Nome:<input type="text" onkeyup="ajax('dadoscliente.php?nome='+this.value,'resposta')"/>
        
        <hr/>
        
        <div id="resposta">
            <!-- local da resposta do dados.php -->
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
