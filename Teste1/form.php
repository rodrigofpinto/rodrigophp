<!DOCTYPE>
<html>
<head>
    <style>
        .error {color: #FF0000;}  /*Estilo para mensagens de erro*/
    </style>
</head>
<body>
    ajax
    <?php
    // Função para limpar e validar os inputs
    function teste_input($dados) {
        $dados = trim($dados); // Remove espaços em branco no início e no final
        $dados = stripslashes($dados); // Remove barras invertidas
        $dados = htmlspecialchars($dados); // Converte caracteres especiais em entidades HTML
        return $dados;
    }

    // Define variáveis com valores vazios para mensagens de erro e campos
    $nomeErr = $emailErr = $generoErr = "";
    $nome = $email = $genero = $coment = $website = "";

    // Verifica se o método de requisição é POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Validação do campo nome
        if (empty($_POST["nome"])) {
            $nomeErr = "Preencha o nome."; // Mensagem de erro se o campo estiver vazio
        } else {
            $nome = teste_input($_POST["nome"]); // Limpa o input
            // Verifica se o nome contém apenas letras e espaços
            if (!preg_match("/^[a-zA-Z ]*$/", $nome)) { 
                $nomeErr = "Só são permitidas letras e espaços em branco.";
            }
        }

        // Validação do campo email
        if (empty($_POST["email"])) {
            $emailErr = "Preencha o e-mail."; // Mensagem de erro se o campo estiver vazio
        } else {
            $email = teste_input($_POST["email"]); // Limpa o input
            // Verifica se o email tem formato válido
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato de e-mail inválido.";
            }
        }

        // Validação do campo website
        if (empty($_POST["website"])) {
            $website = ""; // Se o campo estiver vazio, o valor é uma string vazia
        } else {
            $website = teste_input($_POST["website"]); // Limpa o input
            // Verifica se a URL tem formato válido
            if (!filter_var($website, FILTER_VALIDATE_URL)) {
                $websiteErr = "Formato de URL inválido.";
            }
        }

        // Validação do campo comentário (opcional)
        if (empty($_POST["coment"])) {
            $coment = ""; // Se o campo estiver vazio, o valor é uma string vazia
        } else {
            $coment = teste_input($_POST["coment"]); // Limpa o input
        }

        // Validação do campo género
        if (empty($_POST["genero"])) {
            $generoErr = "Preencha o género."; // Mensagem de erro se o campo estiver vazio
        } else {
            $genero = teste_input($_POST["genero"]); // Limpa o input
        }
    }
    ?>
    <h2>Validação de formulário</h2>
    <p><span class="error">* Campo obrigatório</span></p>
    
    <!-- Formulário para entrada de dados -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nome: <input type="text" name="nome">
        <span class="error">* <?php echo $nomeErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        WebSite: <input type="text" name="website">
        <br><br>
        Comentarios: <textarea name="coment" rows="5" cols="40"></textarea>
        <br><br>
        Género: <input type="radio" name="genero" value="Feminino">Feminino
        <input type="radio" name="genero" value="Masculino">Masculino
        <input type="radio" name="genero" value="Outro">Outro
        <span class="error">* <?php echo $generoErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Confirmar dados">
    </form>

    <!-- Formulário oculto para enviar dados para "teste.php" -->
    <form action="teste.php" method="post">
        <input type="hidden" name="nome" value="<?php echo $nome;?>">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="hidden" name="website" value="<?php echo $website;?>">
        <input type="hidden" name="coment" value="<?php echo $coment;?>">
        <input type="hidden" name="genero" value="<?php echo $genero;?>">
        
        <?php
            // Exibe os dados inseridos pelo usuário
            echo "<h2>Os seus dados:</h2>";
            echo $nome;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $coment;
            echo "<br>";
            echo $genero;
            echo "<br>";
        ?>  
        <input type="submit" name="submit" id="Enviar"> <!-- Botão para enviar os dados -->
    </form>
</body>
</html>
