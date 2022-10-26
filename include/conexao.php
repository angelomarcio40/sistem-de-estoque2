<?php

try{

    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('SERNHA','');
    define('SBASEDADOS','db_sistem_estoque2');

    // $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BASEDADOS, USUARIO, SENHA);

    // $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $erro){
    echo "Erro ao conectar ao banco de dados: ".$erro->getMessage();

}

?>