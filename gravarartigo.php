<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
            
        <a href="cadastrarartigo.php">Volta ao Cadastro</a>
         <br/>
    </body>
</html>


<?php

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$foto = $_FILES["foto"]; // vem como vetor
$artigo = $_POST["artigo"];

if($foto["name"]!="") {
    // mandou o arquivo
    // echo $foto ["name"];
    
    //verificar a extenção do arquivo.
    
    //foto.ferias.JPG
    $ext = explode(".", $foto["name"]); //[foto] [ferias] [JPG]
    $ext = array_reverse($ext); // [jpg] [ferias][foto]
    $ext = strtolower ($ext[0]);
    // echo $ext;
    
    // verificar se a extenção é valida
    $msg = "";
    if($ext != "jpg" && $ext != "gif" && $ext != "png") { // && é usado como o operador or a diferença é que ele é usado com a condição != "não é igual" e o operador  OR é usado com a condição == igual
        $msg = "Arquivo Inválido";
    }else if ($foto["size"] > 1024*8000) {
    
$msg = "Tamanho Excedido!";
    }else {
        // vai tentar gravar
        $nomefoto = date("YmdHis").rand(1000, 9999).".".$ext;
       // echo $nomefoto;
    
       include_once 'conexao.php';
       $sql = "insert into artigos values (null, 
           '".$titulo."','".$autor."','".$nomefoto."','".$artigo."')";
       
       if(mysql_query($sql,$con)) {
           $msg = "Gravado com sucesso!";
         
           // mover a imagem para um local
           move_uploaded_file($foto["tmp_name"], "imagens/".$nomefoto);
       }else{    
           $msg = "Erro ao Gravar!";
       }
        
    }
    
    echo $msg;
    
}else{
    echo "Escolha uma foto!";
}
?>
