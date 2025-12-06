<?php

    include("../../config.php");

    $cronicaid = $_GET['cronicaid'];

    $sql = "select nome, era, regiao, prologo from cronicas where id_cronica='$cronicaid'";
    $con = $connection->query($sql);
    $select= $con->fetch_assoc();

    $nome = $select['nome'];
    $era = $select['era'];
    $regiao = $select['regiao'];
    $prologo = $select['prologo'];

    echo"<tr><th>{$nome}</th></tr>";
    echo"<tr><td>{$era}</td></tr>";
    echo"<tr><td>{$regiao}</td></tr>";
    echo"<tr><td>{$prologo}</td></tr>";

    $connection->close();

?>