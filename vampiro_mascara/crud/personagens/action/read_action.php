<?php

    /*
        nome varchar(255) not null,
        geracao int,
        cla int not null,
        foreign key (cla) references clas(id_cla),
        conceito text
    */

    include("../../config.php");

    $personagemid = $_GET['personagemid'];

    $sql = "select nome, geracao, cla, conceito from personagens where id_personagem='$personagemid'";
    $con = $connection->query($sql);
    $select= $con->fetch_assoc();

    $nome = $select['nome'];
    $geracao = $select['geracao'];
    $cla_id = $select['cla'];
    $conceito = $select['conceito'];

    $sql_cla = "select nome from clas where id_cla='$cla_id';";
    $con_cla = $connection->query($sql_cla);
    $select_cla = $con_cla->fetch_assoc();

    $cla = $select_cla['nome'];

    echo"<tr><th colspan=\"2\">{$nome}</th></tr>";
    echo"<tr><td>Geração:</td><td>{$geracao}</td></tr>";
    echo"<tr><td>Clã:</td><td>{$cla}</td></tr>";
    echo"<tr><td>Conceito:</td><td>{$conceito}</td></tr>";

?>