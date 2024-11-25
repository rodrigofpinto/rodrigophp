Para apagar um cookie, use a função setcookie () com uma data de expiração no passado 
<?php 
// coloca a data de expiração para uma hora atrás 60*60 = 3600
setcookie("user", "", time() - 3600, "/");
?>