A função fclose() é usada para fechar um arquivo.
É uma boa prática de programação fechar todos os arquivos depois de ter terminado com eles. Você não quer um arquivo aberto no servidor ocupando recursos!
O fclose() requer o nome do arquivo (ou uma variável que contém o nome do arquivo) que queremos fechar:

<?php 
    $ficheiro = fopen("webdicionario.txt", "r");
    // código....
    fclose($ficheiro);
?>

