<!--exibir.php-->
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registos</title>
    <style type="text/css">
        table {
            border: 1px solid gray;
            padding: 2px;
        }

        td {
            border: 1px solid lightgray;
            font-size: 1em;
            padding: 2px;
        }

        .cat {
            font-family: Trebuchet MS;
            color: #0000FF;
        }
    </style>
</head>

<body>
    <p>
        <a href="index.php">Home</a>
    </p>
    <?php
    if (isset($_GET['alter'])) {
        if ($_GET['alter'] == "true") {
            echo "<p>Os dados foram alterados.</p>";
        } else {
            echo "<p>Erro ao alterar os dados.</p>";
        }
    }
    ?>
    <table>
        <tr class="cat">
            <td>ISBN</td>   <td>Autor</td> <td>Título</td>  <td>Categoria</td>    <td>Ano</td>    <td>Ação</td>
        </tr>
        <?php
        // Estabelece a ligação com o MySQL
        $ligacao = mysqli_connect("localhost", "rodrigopinto", "password123", "publicacoes");

        mysqli_set_charset($ligacao, "utf8"); // Resolve a questão dos acentos e cedilhas

        if (!$ligacao) {
            echo "Erro na ligação à base de dados.";
            exit;
        }

        $sql = "SELECT * FROM classicos_lit ORDER BY isbn";
        $consulta = mysqli_query($ligacao, $sql);

        if (!$consulta) {
            echo "Erro ao realizar a consulta";
            exit;
        }

        while ($dados = mysqli_fetch_assoc($consulta)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($dados['isbn']) . "</td>";
            echo "<td>" . htmlspecialchars($dados['autor']) . "</td>";
            echo "<td>" . htmlspecialchars($dados['titulo']) . "</td>";
            echo "<td>" . htmlspecialchars($dados['categoria']) . "</td>";
            echo "<td>" . htmlspecialchars($dados['ano']) . "</td>";
            echo "<td>";
            // Chama o ficheiro editar.php
            echo "<form action='editar.php' method='post'>";
            echo "<input name='isbn' type='hidden' value='" . htmlspecialchars($dados['isbn']) . "'>";
            echo "<input name='autor' type='hidden' value='" . htmlspecialchars($dados['autor']) . "'>";
            echo "<input name='titulo' type='hidden' value='" . htmlspecialchars($dados['titulo']) . "'>";
            echo "<input name='categoria' type='hidden' value='" . htmlspecialchars($dados['categoria']) . "'>";
            echo "<input name='ano' type='hidden' value='" . htmlspecialchars($dados['ano']) . "'>";
            echo "<input type='submit' value='Editar'>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        mysqli_close($ligacao);
        ?>
    </table>
</body>

</html>