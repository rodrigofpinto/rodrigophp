O exemplo a seguir usa a função filter_var () para verificar se a variável $ip é um endereço IP válido (ip.php):

<?php
    $ip = "127.0.01"; // Definindo uma variável $ip com o valor "127.0.01" (que é um IP incorreto)

    // Verifica se o valor armazenado em $ip é um IP válido
    // A função filter_var($ip, FILTER_VALIDATE_IP) retorna FALSE se o IP for inválido
    if (!filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        // Se o IP for válido, exibe uma mensagem informando que o IP é válido
        echo "$ip é IP válido!";
    } else {
        // Caso contrário, exibe uma mensagem informando que o IP não é válido
        echo "$ip não é válido!";
    }
?>
