<?php
    if(isset($_GET['disciplinaid']) && isset($_GET['escolha'])){
        $disciplinaid = $_GET['disciplinaid'];
        $escolha = $_GET['escolha'];

        if($escolha == 'Apresentar'){
            header('Location: ../read.php?disciplinaid='.$disciplinaid);
            exit;
        }
        if($escolha == 'Alterar'){
            header('Location: ../update.php?disciplinaid='.$disciplinaid);
            exit;
        }
        if($escolha == 'Apunhalar'){
            header('Location: ../delete.php?disciplinaid='.$disciplinaid);
            exit;
        }
    }
?>                