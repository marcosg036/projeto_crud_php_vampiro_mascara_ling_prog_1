<?php 
    include("../../../config.php");
    include("../../../narradores/narrador.php");

    if(isset($_GET['personagem']) && isset($_GET['disciplina'])){
        $personagem = $_GET['personagem'];
        $disciplina = $_GET['disciplina'];

        $sql = "insert into personagens_disciplinas(personagem, disciplina) values('$personagem','$disciplina');";

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