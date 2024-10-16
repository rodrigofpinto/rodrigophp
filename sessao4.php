Para alterar uma variável de sessão, basta sobrescrevê-la (gravar como sessao4.php):

<?php
    // Inicia uma nova sessão ou retoma uma sessão existente
    session_start();

    // Define uma variável de sessão 'favcor' com o valor 'amarelo'
    $_SESSION["favcor"] = "amarelo";

    // Imprime o conteúdo da variável de sessão
    print_r($_SESSION);
?>

