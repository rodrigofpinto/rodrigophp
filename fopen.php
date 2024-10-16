A função fopen() também é usada para criar um ficheiro. Talvez um pouco confuso, mas no PHP, um arquivo é criado usando a mesma função usada para abrir arquivos.
Se você usar fopen() num ficheiro que não existe, ele irá criá-lo, dado que o arquivo é aberto para gravação (w) ou anexação (a).
O exemplo abaixo cria um novo arquivo chamado "testeficheiro.txt". O arquivo será criado no mesmo diretório em que o código PHP reside - verifique em htdocs/suapasta (fopen1.php):

<?php
    // Abre o ficheiro "webdicionario.txt" em modo leitura
    $ficheiro = fopen("webdicionario.txt", "r") or die("O ficheiro não foi aberto!");

    // Lê e exibe todo o conteúdo do ficheiro
    echo fread($ficheiro, filesize("webdicionario.txt"));

    fclose($ficheiro); // Fecha o ficheiro após a leitura
?>
