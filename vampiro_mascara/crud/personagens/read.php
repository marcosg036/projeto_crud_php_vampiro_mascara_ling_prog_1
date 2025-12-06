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
        <div class="table">
            <table border="1">
                <?php include("action/read_action.php");?>
            </table>
            <table border="1">
                <br><br>
                <tr><th>Disciplinas</th></tr>
                <?php

                    $read = "select disciplina from personagens_disciplinas where personagem='$personagemid';";

                    $con_read = $connection->query($read);
                    $val = $con_read->fetch_assoc();

                    $disciplina_id = $val['disciplina'];

                    $read_nome = "select nome from disciplinas where id_disciplina='$disciplina_id';";

                    $read_disciplina = $connection->query($read_nome);

                    $loop_nome = $read_disciplina->fetch_assoc();
                    $nome_disciplina = $loop_nome['nome'];

                    echo"<tr><td>$nome_disciplina</td></tr>"; 

                ?>
            </table>
            <br><br>
            <table border="1">
                <tr><th>Crônicas</th></tr>
                <?php

                    $read_ = "select cronica from personagens_cronicas where personagem='$personagemid'";

                    $con_read_ = $connection->query($read_);
                    $val_ = $con_read_->fetch_assoc();

                    $cronica_id = $val_['cronica'];

                    $read_nome_ = "select nome from cronicas where id_cronica='$cronica_id';";

                    $read_cronica = $connection->query($read_nome_);

                    $loop_cronica = $read_cronica->fetch_assoc();
                    $nome_cronica = $loop_cronica['nome'];

                    echo"<tr><td>$nome_cronica</td></tr>"; 
                ?>
            </table>
        </div>
    </main>
</body>
</html>