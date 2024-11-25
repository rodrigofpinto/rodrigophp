O exemplo a seguir usa a função filter_var () para primeiro remover todos os caracteres ilegais de um URL e, em seguida, verificar se o $url é um URL válido (url.php):

<?php
    $url = "https://casantiga.netlify .app"; // Define uma variável $url com um valor que parece ser uma URL

    // Sanitiza a URL para remover caracteres inválidos ou indesejados
    
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Verifica se a URL sanitizada é válida
    if (!filter_var($url, FILTER_VALIDATE_URL) == false) {
        // Se a URL for válida, exibe uma mensagem informando que a URL é válida
        echo "$url é URL válido.";
    } else {
        // Caso contrário, exibe uma mensagem informando que a URL é inválida
        echo "$url é URL inválido.";
    }
?>
