<?php

include("../../../config.php");
include("../../../narradores/narrador.php");

$personagemid = $_GET['personagemid'];

if( isset($_GET['nome_update']) &&
    isset($_GET['geracao_update']) &&
    isset($_GET['cla_update']) &&
    isset($_GET['conceito_update']) ){

    $nome_update = $_GET['nome_update'];
    $geracao_update = $_GET['geracao_update'];
    $cla_update = $_GET['cla_update'];
    $conceito_update = $_GET['conceito_update'];

    $sql = "update personagens
            set nome='$nome_update',
                geracao='$geracao_update',
                cla='$cla_update',
                conceito='$conceito_update'
            where id_personagem='$personagemid'";

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