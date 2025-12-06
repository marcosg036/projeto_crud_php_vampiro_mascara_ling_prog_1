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
            <form action="action/create_action.php" method="get">
                <label for="nome">Titulo<br>
                    <input type="text" name="nome" id="nome">
                </label>
                <br>
                <label for="era">Era<br>
                    <input type="text" name="era" id="era">
                </label>
                <br>
                <label for="regiao">Região<br>
                    <input type="text" name="regiao" id="regiao">
                </label>
                <br>
                <label for="prologo">Prólogo<br>
                    <textarea name="prologo" id="prologo"></textarea>
                </label>
                <br>
                <input type="submit" value="Registrar">
                <br>
            </form>
        </div>
    </main>
</body>
</html>