<html>

<head>
    <title>Editar</title>
    <style type="text/css">
        input {
            display: block;
            margin-bottom: 1em;
            padding: 5px
        }
    </style>
</head>

<body>
    <p><a href="index.php">Home</a></p>
    <?php
    //Recebe os dados a serem editados
    $isbn = filter_input(INPUT_POST, 'isbn');
    $autor = filter_input(INPUT_POST, 'autor');
    $titulo = filter_input(INPUT_POST, 'titulo');
    $categoria = filter_input(INPUT_POST, 'categoria');
    $ano = filter_input(INPUT_POST, 'ano');
    ?>
    <h2>Alteração de dados</h2>
    <!--chama o ficheiro salvar.php-->
    <form action="salvar.php" method="post">
        <input type="hidden" name="isbn" value="<?php echo $isbn ?>"> <!--não permite alterar isbn, campo escondido-->
        <input type="text" name="autor" value="<?php echo $autor ?>">
        <input type="text" name="titulo" value="<?php echo $titulo ?>">
        <input type="text" name="categoria" value="<?php echo $categoria ?>">
        <input type="text" name="ano" value="<?php echo $ano ?>">
        <input type="submit" value="Guardar Alterações">
    </form>