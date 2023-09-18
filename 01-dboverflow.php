<?php 

//local do banco de dados
$db_server = "localhost";
//credencial login usuario mysql
$db_user = "root";
//senha do mysql
$db_pass = "";
//nome do bancodedados
$db_banco = "01overflow";

//testando a conexão do banco:
//se conectado {} senao catch
try{
    $con= mysqli_connect
    ($db_server,$db_user,$db_pass,$db_banco);
    //echo"conectado";
}

catch(mysqli_sql_exception){
    echo"banco desconectado";
}
?>