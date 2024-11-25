Para remover todas as variáveis de sessão globais e destruir a sessão, use session_unset() e session_destroy() (gravar como sessao5.php):

<?php
    // Inicia a sessão
    session_start();

    // Remove todas as variáveis de sessão
    session_unset();

    // Destrói a sessão
    session_destroy();

    // Mensagem de confirmação
    echo "Todas as variáveis de sessão foram removidas e a sessão foi destruída.";
?>

