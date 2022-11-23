<?php

include '../include/conexao.php';

try{

    $produto = $_POST['produto'];
    $fabricante = $_POST['fabricante'];

    $sql = "INSERT INTO tb_produtos(produto,fabricante)VALUES('$produto','$fabricante')";

    $comando = $con->prepare($sql);

    $comando->execute();

    $retorno = array("retorno"=>"ok","mensagem"=>"Produto inserido com sucesso!");

}catch(PDOException $erro){

    $retorno = array("retorno"=>"erro","mensagem"=>$erro->getMessage());

}

$json = json_encode("retorno", JSON_UNESCAPED_UNICODE);

echo $json;

$con = null;

?>