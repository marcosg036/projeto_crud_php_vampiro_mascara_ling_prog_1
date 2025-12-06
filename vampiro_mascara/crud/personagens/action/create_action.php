<?php

    include("../../../config.php");
    include("../../../narradores/narrador.php");

    if(isset($_GET['nome']) && isset($_GET['geracao']) && isset($_GET['cla']) && isset($_GET['conceito'])){
        $nome = $_GET['nome'];
        $geracao = $_GET['geracao'];
        $cla = $_GET['cla'];
        $conceito = $_GET['conceito'];

        $sql = "insert into personagens(nome, geracao, cla, conceito) values('$nome','$geracao','$cla','$conceito')";

        if($connection->query($sql) === true){
            echo"<p>$sucesso</p>";
        }
        else{
            echo"<p>$falha</p>";
        }
    }
    else{
        echo"<p>$incompleto</p>";
    }

    $connection->close();

?>