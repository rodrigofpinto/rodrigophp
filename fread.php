A função fread() lê de um arquivo aberto.
O primeiro parâmetro de fread() contém o nome do arquivo para ler e o segundo parâmetro especifica o número máximo de bytes a serem lidos.

<?php 
    fread($myfile,filesize("webditionario.txt"));
?>