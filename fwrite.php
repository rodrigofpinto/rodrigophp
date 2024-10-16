A função fwrite() é usada para gravar num arquivo.
O primeiro parâmetro de fwrite() contém o nome do arquivo para gravar e o segundo parâmetro é a string a ser escrita.
O exemplo abaixo escreve alguns nomes num novo arquivo chamado "ficheiro1.txt" - verifique em htdocs/suapasta (fwrite.php):

<?php 
    // Abre (ou cria) o ficheiro "ficheiro1.txt" em modo escrita, apagando o conteúdo anterior
    $ficheiro = fopen("ficheiro1.txt", "w") or die ("O ficheiro não foi aberto!");

    // Define a string a ser escrita no ficheiro
    $txt = "José Silva \r\n";
    fwrite($ficheiro, $txt); // Escreve "José Silva" no ficheiro

    $txt = "Maria Carvalho \r\n"; // Define outra string
    fwrite($ficheiro, $txt); // Escreve "Maria Carvalho" no ficheiro

    fclose($ficheiro); // Fecha o ficheiro após a escrita
    // Apaga os anteriores e poe os novos
?>
