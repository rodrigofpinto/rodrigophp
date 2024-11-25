Com o PHP, é fácil fazer upload de ficheiros para o servidor.

No entanto, com a facilidade vem o perigo, por isso tenha sempre cuidado ao permitir uploads!

Primeiro, certifique-se de que o PHP esteja configurado para permitir uploads de arquivos.

No "php.ini", pesquise file_uploads e defina como Ativado: file_uploads = On

Em seguida, crie um formulário HTML que permita aos utilizadores escolher o arquivo de imagem que desejam enviar (form4.php).

<?php 
    // Diretório onde as imagens serão carregadas
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imgupload"]["name"]);
    $uploadOk = 1; // Variável para verificar se o upload pode prosseguir
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // Tipo do arquivo da imagem

    // Verifica se o formulário foi enviado
    if (isset($_POST["submit"])) {
        // Verifica se o arquivo é realmente uma imagem
        $check = getimagesize($_FILES["imgupload"]["tmp_name"]);
        if ($check !== false) {
            echo "Ficheiro é uma imagem - " . $check["mime"] . ".";
            $uploadOk = 1; // Define como upload válido
        } else {
            echo "Ficheiro não é uma imagem.";
            $uploadOk = 0; // Define como upload inválido
        }
    }

    // Verifica se o ficheiro já existe
    if (file_exists($target_file)) {
        echo "O ficheiro já existe.";
        $uploadOk = 0; // Define como upload inválido
    } 

    // Verifica o tamanho do ficheiro (limite de 500 KB)
    if ($_FILES["imgupload"]["size"] > 500000) {
        echo "O ficheiro é muito grande. O tamanho máximo permitido é 500 KB.";
        $uploadOk = 0; // Define como upload inválido
    } 

    // Permite apenas determinados tipos de imagens
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp") {
        echo "Apenas pode carregar os formatos jpg, jpeg, png, gif e webp.";
        $uploadOk = 0; // Define como upload inválido
    }

    // Verifica se o upload está definido como válido
    if ($uploadOk == 0) {
        echo "O ficheiro não foi carregado.";
    } else {
        // Tenta mover o arquivo para o diretório de uploads
        if (move_uploaded_file($_FILES["imgupload"]["tmp_name"], $target_file)) {
            echo "O ficheiro " . basename($_FILES["imgupload"]["name"]) . " foi carregado com sucesso.";
        } else {
            echo "Aconteceu um erro ao carregar o ficheiro.";
        }
    }
?>
