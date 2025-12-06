<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include("../../style.css");?></style>
    <title>Vampiro: A Mascara</title>
</head>
<body>
    <header>
        <img src="../../img/logo_vampiro_mascara.png" alt="">
    </header>
    <main>
        <div class="form">
            <form action="action/update_action.php" method="get">
                <?php
                    include("../../config.php");
                    
                    $claid = $_GET['claid'];
                
                    $sql = "select nome, descricao from clas where id_cla='{$claid}'";
                    $select = $connection->query($sql);
                    $valores = $select->fetch_assoc();
                
                    $nome = $valores['nome'];
                    $descricao = $valores['descricao'];
                ?>
                <input type="hidden" name="claid" value="<?php print($claid);?>">

                <label for="nome_update">Renomeem-se<br>
                    <input type="text" name="nome_update" value="<?php print("$nome");?>" id="nome_update">
                </label>
                <br>
                <label for="descricao_update">Reapresentem-se<br>
                    <textarea name="descricao_update" id="descricao_update"><?php print("$descricao");?></textarea>
                </label>
                <br>
                <input type="submit" value="Atualizar">
                <br>
            </form>
        </div>
    </main>
</body>
</html>