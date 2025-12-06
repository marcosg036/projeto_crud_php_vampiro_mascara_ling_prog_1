<?php

    include("../../../config.php");
    include("../../../narradores/narrador.php");

    $cronicaid = $_GET['cronicaid'];

    if( isset($_GET['nome_update']) && 
        isset($_GET['era_update']) && 
        isset($_GET['regiao_update']) && 
        isset($_GET['prologo_update']) ){

        $nome_update = $_GET['nome_update'];
        $era_update = $_GET['era_update'];
        $regiao_update = $_GET['regiao_update'];
        $prologo_update = $_GET['prologo_update'];

        $sql = "update cronicas 
                set nome='$nome_update', 
                    era='$era_update', 
                    regiao='$regiao_update', 
                    prologo='$prologo_update' 
                where id_cronica='$cronicaid'";

        if($connection->query($sql) === true){
            echo "<p>$sucesso</p>";
        }
        else{
            echo "<p>$falha</p>";
        }
    }
    else{
        echo "<p>$incompleto</p>";
    }

    $connection->close();

?>