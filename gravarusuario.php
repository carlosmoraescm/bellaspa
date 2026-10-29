<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $login = $_POST["login"];
        $senha = md5($_POST["senha"]);
        $perfil = $_POST["perfil"];
        
        // conexao com o banxo de dados
     //   $con = mysql_connect("localhost", "root", ""); // conecta com o banco
     //   mysql_select_db("aula4",$con); //seleciona a base
        include_once './conexao.php';
        
        $sql = "insert into usuarios values(null, '".$login."', '".$senha."','".$perfil."')";
        // echo $sql;
        
        if (mysql_query($sql, $con)){
    $msg = "Gravado com sucesso!";
}else{
    $msg = "Erro ao Gravar!"    ;
}
mysql_close($con);
// location.href redireciona para a página que for colocada entre plic
echo "<script>
    alert('".$msg."');
    location.href='painelrestrito.php';    
</script>";
        ?>
    </body>
</html>
