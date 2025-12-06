<?php

    include("../../../config.php");
    include("../../../narradores/narrador.php");

    $claid = $_GET['claid'];

    $sql = "delete from clas where id_cla='$claid';";

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