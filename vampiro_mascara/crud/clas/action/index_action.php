<?php
    if(isset($_GET['claid']) && isset($_GET['escolha'])){
        $claid = $_GET['claid'];
        $escolha = $_GET['escolha'];

        if($escolha == 'Apresentar'){
            header('Location: ../read.php?claid='.$claid);
            exit;
        }
        if($escolha == 'Alterar'){
            header('Location: ../update.php?claid='.$claid);
            exit;
        }
        if($escolha == 'Apunhalar'){
            header('Location: ../delete.php?claid='.$claid);
            exit;
        }
    }
?>                