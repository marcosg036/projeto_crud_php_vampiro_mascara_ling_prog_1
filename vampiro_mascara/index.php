<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include("style.css");?></style>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="apresenta">
            <div class="logo_vampiro">
                <img src="img/logo_vampiro_mascara.png" alt="">
            </div>
            <div class="form">
                <form method="get">

                    <label for="user">Quem é esta criatura que deseja entrar?<br><input type="text" name="user" id="user"></label><br>
                    <label for="pass">Qual é nosso código?<br><input type="password" name="pass" id="pass"></label><br>
                    <input type="submit" value="Identificar"><br>

                    <?php

                        if(isset($_GET['user']) && isset($_GET['pass'])){
                            $user = $_GET['user'];
                            $pass = $_GET['pass'];
                            

                            if($user !== 'vampiro' or $pass !== 'mascara'){
                                echo"<p>Parece que ha algo errado aqui. Não reconheço esta criatura.</p>";
                            }
                            else{
                                printf("<p><a href=\"principal.php\">Adentre</a>, terrível criatura. Mas seja breve; não desejo me incomodar com você também.</p>");
                            }
                        }                 

                    ?>

                </form>
            </div>
        </div>
    </main>
</body>
</html>