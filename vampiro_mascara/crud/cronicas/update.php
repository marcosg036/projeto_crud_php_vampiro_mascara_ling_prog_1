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
                    
                    $cronicaid = $_GET['cronicaid'];
                
                    $sql = "select nome, era, regiao, prologo from cronicas where id_cronica='$cronicaid'";
                    $select = $connection->query($sql);
                    $valores = $select->fetch_assoc();
                
                    $nome = $valores['nome'];
                    $era = $valores['era'];
                    $regiao = $valores['regiao'];
                    $prologo = $valores['prologo'];
                ?>
                <input type="hidden" name="cronicaid" value="<?php print($cronicaid);?>">

                <label for="nome_update">Reentitule-se<br>
                    <input type="text" name="nome_update" value="<?php print($nome);?>" id="nome_update">
                </label>
                <br>
                <label for="era_update">Era<br>
                    <input type="text" name="era_update" value="<?php print($era); ?>" id="era_update">
                </label>
                <br>
                <label for="regiao_update">Região<br>
                    <input type="text" name="regiao_update" value="<?php print($regiao); ?>" id="regiao_update">
                </label>
                <br>
                <label for="prologo_update">Prólogo<br>
                    <textarea name="prologo_update" id="prologo_update"><?php print($prologo);?></textarea>
                </label>
                <br>
                <input type="submit" value="Atualizar">
                <br>
            </form>
        </div>
    </main>
</body>
</html>