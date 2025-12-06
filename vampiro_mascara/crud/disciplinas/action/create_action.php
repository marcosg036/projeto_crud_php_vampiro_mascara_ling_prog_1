<?php

    include("../../../config.php");

    include("../../../narradores/narrador.php");

    if(isset($_GET['nome']) && isset($_GET['funcionamento'])){
        $nome = $_GET['nome'];
        $funcionamento = $_GET['funcionamento'];

        $sql = "insert into disciplinas(nome, funcionamento) values('$nome','$funcionamento')";

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