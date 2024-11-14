<?php
    include_once "conexao.php";

    try {
        $sql = $conn->prepare("UPDATE TESTE SET NOME = :nome,
            DESCRICAO = :descricao
            WHERE ID = :id");
        $sql->bindParam(":nome", "TECLADO");
        $sql->bindParam(":descricao", "MECÂNICO");
        $sql->bindParam(":id", 1);

        $sql->execute();

        echo "Item alterado com sucesso!";
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }