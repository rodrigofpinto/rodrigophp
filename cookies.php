setcookie(name, value, expire, path, domain, secure, httponly);
    - Apenas o parâmetro name é obrigatório. Todos os outros parâmetros são opcionais.
    - O exemplo a seguir cria um cookie chamado "user" com o valor "José Sousa". 
    - O cookie expirará após 30 dias (86400 * 30). 
    - O "/" significa que o cookie está disponível em todo o site (caso contrário, selecione o diretório de sua preferência).
    - Em seguida, recuperamos o valor do cookie "user" (usando a variável global $ _COOKIE). 
    - Também usamos a função isset() para descobrir se o cookie está definido (gravar como cookies.php):
<?php  
    $cookie_name = "user"; // Define o nome do cookie
    $cookie_valor = "José Sousa"; // Define o valor do cookie

    // Cria o cookie 'user' com valor 'José Sousa' que expira em 30 dias
    setcookie($cookie_name, $cookie_valor, time() + (86400 * 30), "/"); // 86400 = 1 DIA

    // Verifica se o cookie 'user' está definido
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie ". $cookie_name . " não atribuído!";    
    } else {
        // Se o cookie estiver definido, exibe o valor
        echo "Cookie " . $cookie_name . " está atribuído!<br/>";    
        echo "O valor é: " . $_COOKIE[$cookie_name];
    }
?> 
