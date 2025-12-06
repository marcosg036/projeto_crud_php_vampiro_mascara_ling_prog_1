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

        <H1>PERSONAGENS E CRÔNICAS</H1>

        <form action="action/create_action.php" method="get">
            <label for="personagem">
                <select name="personagem" id="personagem">
                    <?php
                        include("../../config.php");

                        $sql = "select id_personagem, nome from personagens;";
                        $val = $connection->query($sql);

                        foreach($val as $option){
                            print("<option value=\"{$option['id_personagem']}\">{$option['nome']}</option>");
                        }
                    ?>
                </select>
            </label>
            <p> + </p>
            <label for="cronica">
                <select name="cronica" id="cronica">
                    <?php 
                        $sql_ = "select id_cronica, nome from cronicas;";
                        $val_ = $connection->query($sql_);

                        foreach($val_ as $option_){
                            print("<option value=\"{$option_['id_cronica']}\">{$option_['nome']}</option>");
                        }
                    ?>
                </select>
            </label>
            <br>
            <input type="submit" value="Unir">
        </form>
    </main>
</body>
</html>