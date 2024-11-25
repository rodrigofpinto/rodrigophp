A função fgetc() é usada para ler um único caractere de um arquivo.
O exemplo abaixo lê o arquivo "webdicionario.txt" caractere por caractere, até que o fim do arquivo seja alcançado (fgetc.php):

<?php 
    // Abre o ficheiro "webdicionario.txt" em modo leitura
    $ficheiro = fopen("webdicionario.txt", "r") or die ("O ficheiro não foi aberto!");

    // Lê o ficheiro caractere por caractere até o final
    while (!feof($ficheiro)) {
        echo fgetc($ficheiro); // Exibe cada caractere lido
    }

    // Pega tudo em linha
?>
