<?php

include("../../../config.php");
include("../../../narradores/narrador.php");

$disciplinaid = $_GET['disciplinaid'];

$sql = "delete from disciplinas where id_disciplina='$disciplinaid';";

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