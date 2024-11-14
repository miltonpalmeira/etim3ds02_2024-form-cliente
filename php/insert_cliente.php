<?php
    header('Content-Type: application/json');
    include_once "conexao.php";

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dtNascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $tel1 = $_POST["cel"];
    $tel2 = $_POST["tel2"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $estadoCivil = $_POST["estadoCivil"];
    $filhos = $_POST["filhos_qtd"];
    $escolaridade = $_POST["escolaridade"];

    try {
        $cmd = $conn->prepare("INSERT INTO CLIENTES (NOME, CPF, DT_NASCIMENTO, SEXO,
        TELEFONE1, TELEFONE2, EMAIL, CEP, RUA, NUMERO, BAIRRO, CIDADE, ESTADO,
        ESTADO_CIVIL, FILHOS, ESCOLARIDADE, PROFISSAO)
        VALUES (:nome, :cpf, :dtNascimento, :sexo, :tel1, :tel2, :email, :cep, :rua,
        :numero, :bairro, :cidade, :estado, :estadoCivil, :filhos, :escolaridade,
        :profissao)");
        $cmd->bindParam(":nome", $nome);
        $cmd->bindParam(":cpf", $cpf);
        $cmd->bindParam(":dtNascimento", $dtNascimento);
        $cmd->bindParam(":sexo", $sexo);
        $cmd->bindParam(":tel1", $tel1);
        $cmd->bindParam(":tel2", $tel2);
        $cmd->bindParam(":email", $email);
        $cmd->bindParam(":cep", $cep);
        $cmd->bindParam(":rua", $rua);
        $cmd->bindParam(":numero", $numero);
        $cmd->bindParam(":bairro", $bairro);
        $cmd->bindParam(":cidade", $cidade);
        $cmd->bindParam(":estado", $estado);
        $cmd->bindParam(":estadoCivil", $estadoCivil);
        $cmd->bindParam(":filhos", $filhos);
        $cmd->bindParam(":escolaridade", $escolaridade);
        $profissao = "";
        $cmd->bindParam(":profissao", $profissao);
        $cmd->execute();
        echo json_encode(["status" => "success", "message" => "Cliente inserido com sucesso!"]);
    }catch (Exception $ex) {
        echo json_encode(["status" => "error", "message" => $ex->getMessage()]);
    }
