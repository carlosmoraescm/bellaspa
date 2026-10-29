<?php

session_start();

if(!isset($_SESSION["login"])){
    
    session_destroy();
    
  $msg = "Usuário sem acesso";
  header("location:indexrestrito.php?msg=".$msg); // redirecionamento
    
}

if($_SESSION["tempo"] + 5*60 < time()){
    session_destroy();
    
    $msg = "Sessão Expirada!";
    header("location:indexrestrito.php?msg=".$msg);
}else{
    $_SESSION["tempo"] = time(); //renovando o tempo
}

?>
