<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estiliza a tabela, suas bordas e o espaçamento interno das células */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    A função filter_list() pode ser usada para listar o que a extensão de filtro do PHP oferece. (filtros.php)

    <!-- Cria uma tabela com duas colunas: Nome do Filtro e ID -->
    <table>    
        <tr>
            <td>Nome do Filtro</td>
            <td>ID</td>
        </tr>
        <?php
            // Loop através da lista de filtros disponíveis no PHP
            foreach (filter_list() as $id => $filter) {
                // Cria uma linha para cada filtro com seu nome e ID
                echo "<tr><td>" . $filter . "</td><td>" . filter_id($filter) . "</td></tr>";
            }
        ?>
    </table>

</body>
</html>
