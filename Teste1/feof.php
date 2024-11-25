Um método melhor para abrir arquivos é com a função fopen(). Esta função oferece mais opções do que a função readfile().
O primeiro parâmetro de fopen() contém o nome do arquivo a ser aberto e o segundo parâmetro especifica em que modo o arquivo deve ser aberto. O exemplo a seguir também gera uma mensagem se a função fopen() não puder abrir o arquivo (fopen.php):

<?php
    // Abre o ficheiro "webdicionario.txt" em modo leitura
    $ficheiro = fopen("webdicionario.txt", "r") or die ("O ficheiro não foi aberto!");

    // Lê o ficheiro linha por linha até o final
    while (!feof($ficheiro)) {
        echo fgets($ficheiro) . "<br/>"; // Exibe cada linha lida, adicionando uma quebra de linha HTML
    }

    fclose($ficheiro); // Fecha o ficheiro após a leitura
    // Pega exatamente como está no ficheiro
?>
