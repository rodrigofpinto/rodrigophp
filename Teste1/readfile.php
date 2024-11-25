O código PHP para ler o arquivo e escrevê-lo no buffer de saída é o seguinte (a função readfile() retorna o número de bytes lidos com sucesso) (readfile.php):

<?php
    echo readfile("webdicionario.txt"); // Lê e exibe o conteúdo do arquivo "webdicionario.txt"
?>

