Em seguida, criamos outra página chamada "sessao2.php". Nesta página, acederemos às informações da sessão que definimos.

<?php
session_start();

// Verifica se as variáveis de sessão estão definidas antes de usá-las
if (isset($_SESSION["favcor"])) {
    echo "A cor favorita é " . $_SESSION["favcor"] . ".<br />";
} else {
    echo "Nenhuma cor favorita definida.<br />";
}

if (isset($_SESSION["favanimal"])) {
    echo "O animal favorito é o " . $_SESSION["favanimal"] . ".";
} else {
    echo "Nenhum animal favorito definido.";
}
?>
