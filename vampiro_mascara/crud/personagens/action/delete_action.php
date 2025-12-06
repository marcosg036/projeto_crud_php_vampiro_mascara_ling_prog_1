<?php

include("../../../config.php");
include("../../../narradores/narrador.php");

$personagemid = $_GET['personagemid'];

$sql = "delete from personagens where id_personagem='$personagemid';";

if (isset($_GET['confirmar'])) {

    if ($_GET['confirmar'] === "sim") {

        $connection->query($sql);

        echo "<p>$sucesso</p>";

    } else {

        echo "<p>$falha</p>";

    }
}

echo "<p>$incompleto</p>";

$connection->close();

?>