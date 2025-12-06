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
                    
                    $personagemid = $_GET['personagemid'];
                
                    $sql = "select nome, geracao, cla, conceito from personagens where id_personagem='{$personagemid}'";
                    $select = $connection->query($sql);
                    $valores = $select->fetch_assoc();
                
                    $nome = $valores['nome'];
                    $geracao = $valores['geracao'];
                    $cla = $valores['cla'];
                    $conceito = $valores['conceito'];

                ?>
                <input type="hidden" name="personagemid" value="<?php print($personagemid);?>">

                <label for="nome_update">Renomeie<br>
                    <input type="text" name="nome_update" value="<?php print("$nome");?>" id="nome_update">
                </label>
                <br>
                <label for="geracao_update">Geração<br>
                    <input type="text" name="geracao_update" value="<?php print("$geracao");?>" id="geracao_update">
                </label>
                <br>
                <label for="cla_update">Clã<br>
                    <input type="number" name="cla_update" value="<?php print("$cla");?>" id="cla_update">
                </label>
                <br>
                <label for="conceito_update">Conceito<br>
                    <textarea name="conceito_update" id="conceito_update"><?php print("$conceito");?></textarea>
                </label>
                <br>
                <input type="submit" value="Atualizar">
                <br>
            </form>
        </div>
    </main>
</body>
</html>