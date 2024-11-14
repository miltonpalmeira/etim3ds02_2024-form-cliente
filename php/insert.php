<?php
    include_once "conexao.php";

    $nome = "Mouse";
    $descricao = "Gamer";

    $sql = $conn->prepare("INSERT INTO TESTE (NOME, DESCRICAO) 
        VALUES (:nome, :descricao)");
    $sql->bindParam(":nome", $nome);
    $sql->bindParam(":descricao", $descricao);

    $sql->execute();

    echo "Cliente inserido com sucesso";
?>