O exemplo a seguir usa a função filter_var() para verificar se a variável $int é um inteiro. Se $int for um inteiro, a saída do código abaixo será: "é inteiro válido". Se $int não for um inteiro, a saída será: "não é inteiro válido (int.php)":
O segundo trecho tem uma negação que pode ser confusa, mas na prática resultará na mensagem correta de que 100.1 não é um inteiro válido.
<?php
$int = 100.1;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("$int é inteiro válido");
} else {
    echo("$int não é inteiro válido");
}
?>

