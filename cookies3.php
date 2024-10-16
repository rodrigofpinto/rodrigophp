<?php 
/*
O exemplo a seguir cria um  script que verifica se os cookies estão ativados. Primeiro cria um cookie de teste com a função setcookie () e depois conta a variável array $ _COOKIE 
*/
setcookie("teste_cookie", "teste", time() + 3600, '/');
?>
<html>
<body>
<?php
if(count($_COOKIE) > 0) {
    echo "Cookies activados.";
} else {
    echo "Cookies não activados.";
}
?>