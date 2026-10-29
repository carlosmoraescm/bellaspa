<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h4>Cadastro de Serviços</h4>
        <!-- enctype="multipart/form-data => habilita o form a enviar arquivo -->
        <form action="gravar.php" method ="post" enctype="multipart/form-data">
            Titulo:<br/>
            <input type="text" name="titulo"/><br/>
            
            Autor:<br/>
            <input type="text" name="autor"/><br/>
            
            Foto:<br/>
            <input type="file" name="foto"/><br/>
            
            Artigo:<br/>
            <textarea name="servico" cols="40" rows="7"/></textarea><br/>
        <input type="submit" value="Enviar" /><br/>
        
        <a type ="image" href="index.php">Home</a>
     <!--   <meta http-equiv="refresh" content="5; url=http://www.hscripts.com/index.php"> /> -->
        
        
        
        <!-- <input type="image" value="Enviar" /> -->
        
        </form>
    </body>
</html>
