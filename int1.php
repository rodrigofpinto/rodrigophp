No exemplo anterior, se $int foi definido como 0, a função acima retornará "não é inteiro válido". Para resolver esse problema, use o código abaixo (int1.php):
O primeiro trecho usa uma condição que pode ser confusa, mas é correta. Ele considera tanto o caso de 0 como um inteiro válido.
<?php
$int = 0;
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("$int" . " é inteiro válido");
} else {
    echo("$int" . " não é inteiro válido");
}
?>

