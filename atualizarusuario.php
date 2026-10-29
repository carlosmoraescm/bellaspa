<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gravar</title>
    </head>
    <body>
        <h3>Consulta de Clientes</h3>
        <form action="atualizarusuario.php" method="get">
            Nome:
            <input type="text" name="login"/>
            <input type="submit" name="Buscar"/>
        </form>
        
        <hr/>
<?php
$id = $_POST["idusuario"]; // vem pelo campo Hiddem
$login = $_POST["login"];
$senha =$_POST["senha"];
$perfil = $_POST["perfil"];

// include_once - insere um arquivo uma única vez na página
// include - insere um arquivo várias vezes na página
// require - insere um arquivo várias vezes na página parando
// require_once - 
include_once './conexao.php'; // clicar ctrl + space para localizar arquivos
$sql = "UPDATE usuarios SET
    login= '".$login."', senha = '".$senha."', perfil = '".$perfil."' 
        WHERE idusuario = ".$id;

// semelhante ao gravar
if (mysql_query($sql, $con)){
$msg = "Gravado com sucesso!";
}else{
    $msg = "Erro ao Alterar!"    ;
}
mysql_close($con);
// location.href redireciona para a página que for colocada entre plic
echo "<script>
    alert('".$msg."');
    location.href='painelrestrito.php';    
</script>"
?>

