Podemos armazenar os dados da tabela num array bidimensional, assim:

<?php
// Criação de um array multidimensional com informações de alunos
$alunos = array(
    array("Teresa", 19, "Feminino"),
    array("Mário", 17, "Masculino"),
    array("Frederico", 17, "Masculino"),
);

// Exibição das informações dos alunos
echo $alunos[0][0] . " - Idade: " . $alunos[0][1] . ", Género: " . $alunos[0][2] . ".<br />";
echo $alunos[1][0] . " - Idade: " . $alunos[1][1] . ", Género: " . $alunos[1][2] . ".<br />";
echo $alunos[2][0] . " - Idade: " . $alunos[2][1] . ", Género: " . $alunos[2][2] . ".<br />";
?>
