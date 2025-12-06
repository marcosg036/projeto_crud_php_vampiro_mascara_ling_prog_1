<?php

    include("../../../config.php");
    include("../../../narradores/narrador.php");

    if(isset($_GET['nome']) && isset($_GET['descricao'])){
        $nome = $_GET['nome'];
        $descricao = $_GET['descricao'];

        $sql = "insert into clas(nome, descricao) values('$nome','$descricao')";

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