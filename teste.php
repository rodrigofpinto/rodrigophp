<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nome: <?php echo $_POST["nome"]; ?></p><br/> <!-- Exibe o nome enviado pelo formulário -->
    <p>Email: <?php echo $_POST["email"]; ?></p><br/> <!-- Exibe o email enviado pelo formulário -->
    <p>WebSite: <?php echo $_POST["website"]; ?></p><br/> <!-- Exibe o website enviado pelo formulário -->
    <p>Género: <?php echo $_POST["genero"]; ?></p><br/> <!-- Exibe o género enviado pelo formulário -->
    <p>Comentário: <?php echo $_POST["coment"]; ?></p><br/> <!-- Exibe o comentário enviado pelo formulário -->
</body>
</html>
