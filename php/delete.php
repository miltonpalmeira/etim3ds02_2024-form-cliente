<?php
    include_once "conexao.php";

    try {
        $sql = $conn->prepare("DELETE FROM TESTE
            WHERE ID = :id");
        $sql->bindParam(":id", 1);

        $sql->execute();

        echo "Item excluído com sucesso!";
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }