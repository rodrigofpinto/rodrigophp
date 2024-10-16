Uma sessão é iniciada com a função session_start(). As variáveis de sessão são configuradas com a variável global $ _SESSION. 
<?php
session_start(); // Inicia a sessão

// Define variáveis de sessão
$_SESSION["favcor"] = "verde"; // A cor favorita é verde
$_SESSION["favanimal"] = "gato"; // O animal favorito é gato

// Mensagem de confirmação
echo "Variáveis de sessão definidas."; 
?>
