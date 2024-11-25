<a href="index.php">Home</a>
<?php

require_once 'login.php';

$ligacao = new mysqli($hn, $un, $pw, $db);
mysqli_set_charset($ligacao, "utf8");

if ($ligacao->connect_error) die("Erro fatal");

// Função para sanitizar a entrada do usuário
function get_post($ligacao, $var) {
    return $ligacao->real_escape_string($_POST[$var]);
}

// Eliminar registos
if (isset($_POST['delete']) && isset($_POST['isbn'])) {
    $isbn = get_post($ligacao, 'isbn');

    // Exercício: crie um método de confirmação da intenção de apagar um registo
    $query = "DELETE FROM classicos_lit WHERE isbn='$isbn'";
    $result = $ligacao->query($query);

    if (!$result) echo "Falha ao eliminar registo<br>";
    else echo "Registro eliminado com sucesso!<br>";
}

// Inserir registos (verifica se todos os campos estão preenchidos)
if (isset($_POST['autor']) &&
    isset($_POST['titulo']) &&
    isset($_POST['categoria']) &&
    isset($_POST['ano']) &&
    isset($_POST['isbn'])) {

    $autor = get_post($ligacao, 'autor');
    $titulo = get_post($ligacao, 'titulo');
    $categoria = get_post($ligacao, 'categoria');
    $ano = get_post($ligacao, 'ano');
    $isbn = get_post($ligacao, 'isbn');

    // Adicionar o registo no banco de dados
    $query = "INSERT INTO classicos_lit (autor, titulo, categoria, ano, isbn) VALUES ('$autor', '$titulo', '$categoria', '$ano', '$isbn')";
    $result = $ligacao->query($query);

    if (!$result) echo "Falha ao inserir registo<br>";
    else echo "Registro inserido com sucesso!<br>";
}

// Formulário para inserção de registros
echo <<<_END
<form action="ins_elim.php" method="post"><pre>
<!-- utilizamos a tag pre para o texto ficar alinhado -->

     Autor     <input type="text" name="autor">
     Titulo    <input type="text" name="titulo">
     Categoria <input type="text" name="categoria">
     Ano       <input type="text" name="ano">
     ISBN      <input type="text" name="isbn">
     <input type="submit" value="Adiciona registo">
</pre></form>
_END;

// Exibir registros existentes
$query = "SELECT * FROM classicos_lit ORDER BY titulo";
$result = $ligacao->query($query);
if (!$result) die("Falha no acesso a base de dados");

$rows = $result->num_rows;

for ($j = 0; $j < $rows; ++$j) {
    $row = $result->fetch_array(MYSQLI_NUM);
    $r0 = htmlspecialchars($row[0]);
    $r1 = htmlspecialchars($row[1]);
    $r2 = htmlspecialchars($row[2]);
    $r3 = htmlspecialchars($row[3]);
    $r4 = htmlspecialchars($row[4]);

    echo <<<_END
<pre>
Autor      $r0
Titulo     $r1	
Categoria  $r2
Ano        $r3	
ISBN       $r4
</pre>
<form action='ins_elim.php' method='post'>
    <input type='hidden' name='delete' value='yes'>
    <input type='hidden' name='isbn' value='$r4'>
    <input type='submit' value='Apagar registo'>
</form>
_END;
}

$result->close();
$ligacao->close();
?>
