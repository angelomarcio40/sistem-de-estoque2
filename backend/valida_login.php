<?php

include "../include/conexao.php";

try{
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT
                *
            FROM
                tb_login
            WHERE
                usuario = 'usuario'
            AND
                BINARY
                senha = 'senha'
            AND
                ativo = 1
            ";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comand->fetchAll(PDO::FETCH_ASSOC);

    if($dados != null){

        session_start();

        $_SESSION['usuario'] =  $usuario;
        
        header('Location: ../admin/gerenciar_estoque.php');
    }else{

        echo "Usuario e senha invalidos";
    }
}catch(PDOException $erro){
    echo $erro->getMessage();
}

?>