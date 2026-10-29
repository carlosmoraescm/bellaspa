<?php
session_start(); //habilita a pagina a usar uma sessao do browser
// sessao: lugar no browser para armazenar valores (variável no browser)
//md5() -> criptografia

$login = $_POST["login"];
$senha = MD5($_POST["senha"]); 

include_once 'conexao.php';

$sql = "select * from usuarios where
    login = '".$login."' and senha = '".$senha."'";

$result = mysql_query($sql,$con);

$msg = "";
if (mysql_num_rows($result)==1){
   // echo "Logado";
    $row = mysql_fetch_array($result);
    $_SESSION["login"] = $row["login"]; // guarda na memoria do browser  o valor
    $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["tempo"] = time();
    header ("location:painel.php?msg=".$msg); // redirecionamento
     
}else{
    $msg = "Login/Senha Invalidos";
    header ("location:indexrestrito.php?msg=".$msg); // redirecionamento
}
?>
