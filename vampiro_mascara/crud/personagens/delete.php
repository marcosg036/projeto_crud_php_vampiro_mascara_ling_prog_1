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
            <form action="action/delete_action.php" method="get">
                <?php 
                    $personagemid = $_GET['personagemid'];
                ?>
                <input type="hidden" name="personagemid" value="<?php print("$personagemid");?>">
                <br>

                <label for="nao_delete">Matar?
                    <input type="radio" name="confirmar" value="nao" id="nao_delete">
                </label>
                <label for="sim_delete">Matar.
                    <input type="radio" name="confirmar" value="sim" id="sim_delete">
                </label>
                <br>
                <input type="submit" value="Confirmar">
            </form>
        </div>
    </main>
</body>
</html>