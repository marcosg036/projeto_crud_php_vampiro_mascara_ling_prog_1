<?php
    if(isset($_GET['cronicaid']) && isset($_GET['escolha'])){
        $cronicaid = $_GET['cronicaid'];
        $escolha = $_GET['escolha'];

        if($escolha == 'Apresentar'){
            header('Location: ../read.php?cronicaid='.$cronicaid);
            exit;
        }
        if($escolha == 'Alterar'){
            header('Location: ../update.php?cronicaid='.$cronicaid);
            exit;
        }
        if($escolha == 'Apunhalar'){
            header('Location: ../delete.php?cronicaid='.$cronicaid);
            exit;
        }
    }
?>                