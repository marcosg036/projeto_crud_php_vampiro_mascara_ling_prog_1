<?php 
    include("../../../config.php");
    include("../../../narradores/narrador.php");

    if(isset($_GET['personagem']) && isset($_GET['cronica'])){
        $personagem = $_GET['personagem'];
        $cronica = $_GET['cronica'];

        $sql = "insert into personagens_cronicas(personagem, cronica) values('$personagem','$cronica');";

        if($connection->query($sql) === true){
            echo"<p>$sucesso</p>";
        }
        else{
            echo"<p>$falha</p>";
        }
    }
    else{
        echo"<p>$incompleto</p>";
    }

    $connection->close();