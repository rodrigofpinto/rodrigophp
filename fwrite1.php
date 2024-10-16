Agora que "ficheiro1.txt" contém alguns dados, podemos mostrar o que acontece quando abrimos um arquivo existente para gravação. Todos os dados existentes serão APAGADOS.
No exemplo abaixo, abrimos o nosso ficheiro "ficheiro1.txt" e escrevemos alguns dados novos – verifique em htdocs/suapasta (fwrite1.php):

<?php 
    // Abre (ou cria) o ficheiro "ficheiro1.txt" em modo escrita, apagando o conteúdo anterior
    $ficheiro = fopen("ficheiro1.txt", "w") or die ("O ficheiro não foi aberto!");

    // Define a string a ser escrita no ficheiro
    $txt = "Fatima Silva \r\n"; 
    fwrite($ficheiro, $txt); // Escreve "Fatima Silva" no ficheiro

    $txt = "Joaquim Ribeiro \r\n"; // Define outra string
    fwrite($ficheiro, $txt); // Escreve "Joaquim Ribeiro" no ficheiro

    fclose($ficheiro); // Fecha o ficheiro após a escrita
?>
