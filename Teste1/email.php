O exemplo a seguir usa a função filter_var() para primeiro remover todos os caracteres ilegais da variável $email e, em seguida, verificar se é um endereço de email válido (email.php):

<?php
    $email = "maria silva@exemplo.com"; // Define uma variável $email com um valor que aparenta ser um endereço de e-mail

    // Valida o e-mail utilizando filter_var com o filtro FILTER_VALIDATE_EMAIL
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Verifica se a validação do e-mail retornou um valor válido
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        // Se o e-mail for válido, exibe uma mensagem informando que o e-mail é válido
        echo "$email é uma válido!"; // Nota: '$EMAIL' está em maiúsculas, o correto seria '$email'
    } else {
        // Caso contrário, exibe uma mensagem informando que o e-mail não é válido
        echo "$email não é email válido";
    }
?>