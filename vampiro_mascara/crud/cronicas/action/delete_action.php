<?php

    include("../../../config.php");
    include("../../../narradores/narrador.php");

    $cronicaid = $_GET['cronicaid'];

    $sql = "delete from cronicas where id_cronica='$cronicaid';";

    if(isset($_GET['confirmar'])){

        if($_GET['confirmar'] === "sim"){

            $connection->query($sql);

            echo"<p>$sucesso</p>";
        }
        else{
            echo"<p>$falha</p>";
        }
    }
    echo"<p>$incompleto</p>";

    $connection->close();

?>