<?php
    if(isset($_GET['personagemid']) && isset($_GET['escolha'])){
        $personagemid = $_GET['personagemid'];
        $escolha = $_GET['escolha'];

        if($escolha == 'Apresentar'){
            header('Location: ../read.php?personagemid='.$personagemid);
            exit;
        }
        if($escolha == 'Alterar'){
            header('Location: ../update.php?personagemid='.$personagemid);
            exit;
        }
        if($escolha == 'Apunhalar'){
            header('Location: ../delete.php?personagemid='.$personagemid);
            exit;
        }
        if($escolha == 'Apresentar Todos'){
            header('Location: ../read_all.php');
            exit;
        }
    }
?>                