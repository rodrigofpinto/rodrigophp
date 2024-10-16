A função filter_var() tanto valida como limpa os dados.
A função filter_var() filtra uma única variável com um filtro especificado. São necessários duas espécies de dados:

<?php
    $str = "<h1>Olá Braga</h1>"; // Definindo a string com HTML
    $str1 = "<h1>Olá Braga</h1>"; // Outra string com HTML
    $novasstr = strip_tags($str); // Remove as tags HTML da string
    echo $novasstr; // Exibe a string sem as tags HTML
    echo $str1;     // Exibe a string original com as tags HTML
?>
<?php
$str = "<h1>Olá Braga!</h1>";
$novastr = filter_var($str, FILTER_SANITIZE_STRING); //Desatualizado
echo $novastr;
?>
