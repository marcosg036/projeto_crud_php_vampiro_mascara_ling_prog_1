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
                    $cronicaid = $_GET['cronicaid'];
                ?>
                <input type="hidden" name="cronicaid" value="<?php print("$cronicaid");?>">
                <br>

                <label for="nao_delete">Esquecer?<input type="radio" name="confirmar" value="nao" id="nao_delete"></label>
                <br>
                <label for="sim_delete">Esquecer.<input type="radio" name="confirmar" value="sim" id="sim_delete"></label>
                <br>
                <input type="submit" value="Confirmar">
            </form>
        </div>
    </main>
</body>
</html>