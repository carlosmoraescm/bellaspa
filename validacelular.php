<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery.mask.min.js"/></script>
    
    <label for="txttelefone">Telefone</label>
<input type="tel" name="txttelefone" id="txttelefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
<script type="text/javascript">$("#txttelefone").mask("(00) 0000-00009");</script>
    </head>
    <body>
        <?php
        //      Em seguida no campo input do telefone, colocaremos o seguinte código:
        //
        ?>
    </body>
</html>
