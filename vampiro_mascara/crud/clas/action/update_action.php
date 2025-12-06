<?php

    include("../../../config.php");
    include("../../../narradores/narrador.php");

    $claid = $_GET['claid'];

    if(isset($_GET['nome_update']) && isset($_GET['descricao_update'])){
        $nome_update = $_GET['nome_update'];
        $descricao_update = $_GET['descricao_update'];

        $sql = "update clas set nome='$nome_update', descricao='$descricao_update' where id_cla='$claid'";

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