<?php
    include("../../config.php");

    $sql = "select personagens.nome as nome_personagem, personagens.geracao, clas.nome as nome_cla from personagens join clas on personagens.cla = clas.id_cla";
    
    $con = $connection->query($sql);
    
    echo "<tr><th>Personagem</th><th>Geração</th><th>Clã</th></tr>";
    
    $soma = 0;
    $quantidade = 0;
    
    foreach ($con as $person) {
        echo "<tr>
                <td>{$person['nome_personagem']}</td>
                <td>{$person['geracao']}</td>
                <td>{$person['nome_cla']}</td>
              </tr>";
        $soma += (int)$person['geracao'];
        $quantidade++;
    }
    
    $media = $soma/$quantidade;
    
    echo "<tr><th>Média Gerações:</th><th>$media</th><th></th></tr>";
    
    $connection->close();
?>