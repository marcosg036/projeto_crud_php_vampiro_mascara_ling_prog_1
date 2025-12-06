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
                    
                    $disciplinaid = $_GET['disciplinaid'];
                
                    $sql = "select nome, funcionamento from disciplinas where id_disciplina='{$disciplinaid}'";
                    $select = $connection->query($sql);
                    $valores = $select->fetch_assoc();
                
                    $nome = $valores['nome'];
                    $funcionamento = $valores['funcionamento'];
                ?>
                <input type="hidden" name="disciplinaid" value="<?php print($disciplinaid);?>">

                <label for="nome_update">Renomeie<br>
                    <input type="text" name="nome_update" value="<?php print("$nome");?>" id="nome_update">
                </label>
                <br>
                <label for="funcionamento_update">Funcionamento<br>
                    <textarea name="funcionamento_update" id="funcionamento_update"><?php print("$funcionamento");?></textarea>
                </label>
                <br>
                <input type="submit" value="Atualizar">
                <br>
            </form>
        </div>
    </main>
</body>
</html>