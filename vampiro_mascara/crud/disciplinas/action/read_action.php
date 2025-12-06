<?php

    include("../../config.php");

    $disciplinaid = $_GET['disciplinaid'];

    $sql = "select nome, funcionamento from disciplinas where id_disciplina='$disciplinaid'";
    $con = $connection->query($sql);
    $select= $con->fetch_assoc();

    $nome = $select['nome'];
    $funcionamento = $select['funcionamento'];

    echo"<tr><th>{$nome}</th></tr>";
    echo"<tr><td>{$funcionamento}</td></tr>";

    $connection->close();

?>