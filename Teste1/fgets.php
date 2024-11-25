<?php
    // Abre o ficheiro "webdicionario.txt" em modo leitura
    $ficheiro = fopen("webdicionario.txt", "r") or die("O ficheiro não foi aberto!");

    // Lê e exibe apenas o primeiro caractere do ficheiro
    echo fgetc($ficheiro);

    fclose($ficheiro); // Fecha o ficheiro após a leitura
    // Só pega o primeiro
?>
