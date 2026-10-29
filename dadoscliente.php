<?php
// eliminar o cache
header ("cache-control:no-cache");

//echo $_GET["nome"];

if(!empty($_GET["nome"])){
    $nome = $_GET["nome"];
    
    include_once 'conexao.php';
    
    $sql = "select * from cliente inner join endereco
        on cliente.id_end = endereco.idend
        where nome like '".$nome."%'";
    
    $result = mysql_query($sql, $con);
    
    if(mysql_num_rows($result)>0){
        //encotrou resultados
        echo "<table width = '850px' border = '1px'>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>N°</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>Cep</th>
                <th>Estado</th>
                <th>Cidade</th>
            </tr>";
        
        while($row = mysql_fetch_array($result)) {
            echo "<tr>";        
            echo "<td>".$row["nome"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["dtnasc"]."</td>";
            echo "<td>".$row["cpf"]."</td>";
            echo "<td>".$row["endereco"]."</td>";
            echo "<td>".$row["numero"]."</td>";
            echo "<td>".$row["complemento"]."</td>";
            echo "<td>".$row["bairro"]."</td>";
            echo "<td>".$row["cep"]."</td>";
            echo "<td>".$row["estado"]."</td>";
            echo "<td>".$row["cidade"]."</td>";
            
            echo "</tr>";
        }    
            echo "</table>";
            
    }else{
        echo"Nenhum Cliente Encontrado!";
         }
}



?>
