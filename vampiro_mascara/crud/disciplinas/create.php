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
                <label for="nome">Nome<br>
                    <input type="text" name="nome" id="nome">
                </label>
                <br>
                <label for="funcionamento">Funcionamento<br>
                    <textarea name="funcionamento" id="funcionamento"></textarea>
                </label>
                <br>
                <input type="submit" value="Registrar">
                <br>
            </form>
        </div>
    </main>
</body>
</html>