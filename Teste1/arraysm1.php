Também podemos colocar um loop for dentro de outro loop para obter os elementos da matriz $alunos (arraysm1.php):

<?php
    // Criação de um array multidimensional com informações de alunos
    $alunos = array(
        array("Teresa", 19, "Feminino"),
        array("Mário", 17, "Masculino"),
        array("Frederico", 17, "Masculino"),
    );    

    // Loop para percorrer as linhas do array
    for ($row = 0; $row < 3; $row++) {
        echo "<p><b>Número da linha -  $row</b></p>"; // Exibe o número da linha
        echo "<ul>"; // Inicia uma lista não ordenada
        // Loop para percorrer as colunas do array
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $alunos[$row][$col] . "</li>"; // Exibe cada elemento em um item de lista
        }
        echo "</ul>"; // Fecha a lista não ordenada
    }
?>

