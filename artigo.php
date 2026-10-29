<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bella Estética</title>

<link rel="stylesheet" href="estilo.css" type="text/css" />

</head>

<body>
	
    <div id="container">
    	
        <div id="topo">
        	
            <div id="menu">
            	
                <?php
                    include_once 'menu.php';
                ?>
            
            </div>
            
            <div id="logo">
            	
               <a href="index.php"> <img src="img/logo.jpg" border="0" /></a>
                
            </div>
            
        
        </div>
        
        <div id="banner">
        	<img src="img/banner.jpg" alt="Estar bonita é estar BEM!" />
        </div>
        
        <div id="conteudo">
        
        <h3>Artigos</h3>    
		
        <!-----------------------INICIO DO BLOCO DE PROGRAMAÇÃO-------------------------->
        <?php
                        include_once 'conexao.php';
                        $id = base64_decode($_GET["id"]);
                        $sql = "select * from artigos where idartigo = ".$id;
                        $result = mysql_query($sql, $con);
                        $row = mysql_fetch_array($result);
        ?>
        
        
        <div class="artigo">
        <h4><?php echo $row["titulo"]; ?></h4>
        <h5>Autor(a): <?php echo $row["autor"]; ?></h5>
        
        <p>
            <img src="imagens/<?php echo $row["foto"]; ?>" width="200px"/>
            RESUMO DO ARTIGO:<br/>
           
            <?php 
             // nl2br () "ene ele dois be erre" converte a quebra de linha do textarea (/n) em <br>
            echo nl2br($row["artigo"]);
             ?>
            
        </p>
        
        <a href="artigos.php">Voltar</a>
                                
        
        </div>
                        
                        
        <!-----------------------FIM DO BLOCO DE PROGRAMAÇÃO------------------------------>
                        
        </div>
        
        <div id="coluna">
        
        <h3>NewsLetter</h3>
        
        <form action="newsletter.php" method="post">
            Nome:<br/>
            <input type="text" name="nome"/><br/>
            
            E-mail:<br/>
            <input type="text" name="email"/><br/>
            
            <input type="submit" value="OK"/>
            
        </form>
        
        </div>
        
        <div id="rodape">
            <?php include_once 'rodape.php'; ?>
        </div>
    
    </div>

</body>
</html>