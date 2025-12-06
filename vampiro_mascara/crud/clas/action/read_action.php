<?php

    include("../../config.php");

    $claid = $_GET['claid'];

    $sql = "select nome, descricao from clas where id_cla='$claid'";
    $con = $connection->query($sql);
    $select= $con->fetch_assoc();

    $nome = $select['nome'];
    $descricao = $select['descricao'];

    echo"<tr><th>{$nome}</th></tr>";
    echo"<tr><td>{$descricao}</td></tr>";

    $connection->close();

?>