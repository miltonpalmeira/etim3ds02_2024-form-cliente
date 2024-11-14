<?php
    include_once "conexao.php";

    try {
        $sql = $conn->prepare("SELECT * FROM TESTE");
        $sql->execute();
        
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($resultado as $linha) {
            foreach($linha as $chave => $valor) {
                echo "$chave - $valor<br>";
            }
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>