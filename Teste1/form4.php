<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <!-- Formulário para upload de imagem -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Campo para selecionar o arquivo de imagem -->
        <input type="file" name="imgupload" id="imgupload">
        <!-- Botão para submeter o formulário e carregar a imagem -->
        <input type="submit" name="submit" value="Carregar imagem">
    </form>
</body>
</html>
