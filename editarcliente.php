<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
      <?php
        $id = $_GET["id"];
        include_once 'conexao.php';
        $sql = "Select * from clientes where idcliente = ".$id;
        $result = mysql_query($sql,$con);
        $row = mysql_fetch_array($result);
        
        ?>
        <h3>Alteração de Dados</h3>
         <form action="atualizarcliente.php" method="post">
           
            
            <input type="hidden" readonly="true" name="id" value="<?php echo$row["idcliente"]?>"/><br/> 
             
            Nome:<br/>
            <input type="text" name="nome" value="<?php echo$row["nome"]?>"/><br/>
            
            Email:<br/>
            <input type="text" name="email" value="<?php echo$row["email"]?>"/><br/>
            
            Telefone:<br/>
            <input type="text" name="tel" value="<?php echo$row["telefone"]?>"/><br/>
            
            <input type="submit" name="Alterar"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
