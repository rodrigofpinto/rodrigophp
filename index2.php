<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input[type="text"] {
            padding: 5px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Nome: <input type="text" name="fnome">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['fnome']); // Validação de entrada
            if (empty($nome)) {
                echo "<p style='color: red;'>Nome não preenchido</p>";
            } else {
                echo "<p>Bom dia, " . $nome . "!</p>";
            }
        }
    ?>
</body>
</html>
