<?php
 include_once 'conexao.php';
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
//$dia = $_POST["dia"];
//$mes = $_POST["mes"];
//$ano = $_POST["ano"];
$dtnasc = $_POST["dtnasc"]; //dd/mmm/yyyy
// tratamento para transformar dd/mmm/yyyy --> yyyy/mm/dd
$data = explode ("/", $dtnasc);
$data = array_reverse($data);
$dtnasc = implode("-", $data);
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];

//verificando a existencia de um cliente antes de uma nova gravação
$sql0="select cpf from cliente where cpf='".$cpf."'";

$result = mysql_query($sql0,$con);
if(mysql_num_rows($result)== 0){
    


if (checkdate($mes, $dia, $ano)) {
   echo "Data OK";
  //  $dtnasc = $ano."-".$mes."-".$dia; // padrao do banco yyyy-mm-dd
    
   
    
    $sql="insert into cliente values (null,
        '".$nome."','".$email."','".$cpf."','".$dtnasc."')";
    if(mysql_query($sql, $con)) {
        //gravou cliente, posso gravar endereço
        $id = mysql_insert_id();
        
        $sql2 = "insert into endereco values (null,
            '".$endereco."','".$numero."','".$complemento."','".$bairro."','".$cep."','".$estado."','".$cidade."',".$id.")";
        if(mysql_query($sql2, $con)) {
            echo"Gravado com Sucesso!";
            }else{
                echo "Erro ao Gravar Endereço!";
                // vamos apagar o cliente sem endereço
              $sql3 = "Delete from cliente where idcliente ="  .$id;
              mysql_query($sql3, $con);
        }
    }else{
        echo"Erro ao Gravar Cliente";
    }
    mysql_close($con);
}else{ "Data Inválida";
}
}else{
    echo"Cliente já Cadastrado!";
}
?>
