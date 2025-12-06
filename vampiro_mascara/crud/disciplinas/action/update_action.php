<?php

include("../../../config.php");
include("../../../narradores/narrador.php");

$personagemid = $_get['personagemid'];

if (
    isset($_get['nome_update']) &&
    isset($_get['geracao_update']) &&
    isset($_get['cla_update']) &&
    isset($_get['conceito_update'])
) {
    $nome_update = $_get['nome_update'];
    $geracao_update = $_get['geracao_update'];
    $cla_update = $_get['cla_update'];
    $conceito_update = $_get['conceito_update'];

    $sql = "
        update personagens
        set
            nome='$nome_update',
            geracao='$geracao_update',
            cla='$cla_update',
            conceito='$conceito_update'
        where id_personagem='$personagemid'
    ";

    if ($connection->query($sql) === true) {
        echo "<p>$sucesso</p>";
    } else {
        echo "<p>$falha</p>";
    }

} else {
    echo "<p>$incompleto</p>";
}

$connection->close();

?>