<?php

    $conn = new PDO("mysql:dbname=EXERCICIOFORMCLIENTE;host=localhost", 
        "root", "",
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"))
        or die ("Erro na conexão");
?>