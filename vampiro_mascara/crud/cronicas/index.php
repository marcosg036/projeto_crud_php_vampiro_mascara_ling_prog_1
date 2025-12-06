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

         <h1>CRÔNICAS</h1>

        <div class="form">
            <a href="create.php">Adicionar</a>
            <form action="action/index_action.php" method="get">
                <label for="cronicaid">Crônica
                    <select name="cronicaid">
                        <?php
                            include("../../config.php");
                            $sql = "select id_cronica, nome from cronicas;";
                            $valor = $connection->query($sql);
                            foreach($valor as $option){
                                echo"<option value=\"{$option['id_cronica']}\">{$option['nome']}</option>";
                            }
                        ?>
                    </select>
                </label>
                <br>
                <label for="escolha">Ação
                    <select name="escolha">
                        <?php
                            $valores = ['Apresentar','Alterar','Apunhalar'];
                            for($i = 0; $i < count($valores); $i++){
                                echo"<option value=\"{$valores[$i]}\">{$valores[$i]}</option>";
                            }
                        ?>
                    </select>
                </label>
                <br>
                <input type="submit" value="Escolher">
            </form>
        </div>
    </main>
</body>
</html>