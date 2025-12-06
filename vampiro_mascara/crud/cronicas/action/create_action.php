<?php

    include("../../../config.php");
    include("../../../narradores/narrador.php");

    if(isset($_GET['nome']) && isset($_GET['era']) && isset($_GET['regiao']) && isset($_GET['prologo'])){
        $nome = $_GET['nome'];
        $era = $_GET['era'];
        $regiao = $_GET['regiao'];
        $prologo = $_GET['prologo'];
    
        $sql = "insert into cronicas(nome, era, regiao, prologo) values('$nome','$era','$regiao','$prologo');";

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

?>