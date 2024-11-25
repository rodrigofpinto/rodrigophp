<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Exibe uma mensagem em negrito
    echo "<strong>Ola mundo!</strong>";
    $color = "vermelho"; // Define a variável de cor
     
    // Exibe mensagens com a cor
    echo "A minha casa é " . $color . "<br>"; 
    echo "O meu barco é " . $color . "<br>";
    echo "O meu carro é " . $color . "<br>";

    // Operadores Aritméticos
    $x = 5;
    $y = 4;
    
    echo $x + $y . "<br>"; // Soma
    echo $x - $y . "<br>"; // Subtração
    echo $x * $y . "<br>"; // Multiplicação
    echo $x / $y . "<br>"; // Divisão
    echo $x % $y . "<br>"; // Módulo
    
    // Funções de string
    echo strlen("Conta o numero de caracters") . "<br>"; // Conta caracteres
    echo str_word_count("Conta o numero de palavras") . "<br>"; // Conta palavras
    echo strrev("Inverte a string") . "<br>"; // Inverte string
    echo strpos("Procura o texto", "texto") . "<br>"; // Procura por uma substring
    echo str_replace("nada", "texto", "substitui nada") . "<br>"; // Substitui texto
    
    // Manipulação de strings
    echo ucfirst("Converte o primeiro caracter de uma string para maiuscula <br>");
    echo ucwords("Converte o primeiro caracter de cada palavra de uma letra maiusculas <br>");
    echo strtoupper("Converte uma string para maiuscula <br>");
    echo strtolower("Converte uma string para minuscula <br>");    
    
    // Condicional baseada na hora atual
    $t = date("H");
    if($t < "20"){
        echo "Boa pra nois"; // Mensagem de dia
    } else {
        echo "Boa noite"; // Mensagem de noite
    }
    echo "<br>";

    // Estrutura switch para cor favorita
    $favcolor = "red";
    switch ($favcolor){
        case "vermelho":
            echo "vermelho";
            break;
        case "azul":
            echo "azul";
            break;
        case "verde":
            echo "verde";
            break;
        default:
            echo "Sua cor favorita não é vermelho, verde, nem azul";
    }
    echo "<br>";

    // Loop while para contar de 1 a 5
    $a = 1;
    while($a <= 5){
        echo "O numero  é $a <br>";
        $a++;
    }
    
    echo "<br>";

    // Loop do-while para contar de 1 a 5
    $b = 1;
    do {
        echo "O numero  é $b <br>";
        $b++;
    } while($b <= 5);

    echo "<br>";

    // Loop do-while que não executa o corpo
    $b = 6;
    do {
        echo "O numero  é $b <br>";
        $b++;
    } while($b <= 5);

    echo "<br>";

    // Loop for para contar de 0 a 10
    for($x = 0; $x <= 10; $x++){
        echo "O numero é $x <br>";
    }

    echo "<br>";

    // Loop foreach para iterar sobre um array
    $cores = array("vermelho", "azul", "amarelo");
    foreach($cores as $valor){
        echo "$valor <br>";
    }

    echo "<br>";

    // Função sem parâmetros
    function escreverMsg(){
        echo "Olá mundo!";
    }
    escreverMsg();
    
    echo "<br>";

    // Função com um parâmetro
    function familiaNome($nome){
        echo "$nome Silva <br>";
    }
    familiaNome("Joana");
    familiaNome("Gonçalo");

    echo "<br>";

    // Função com dois parâmetros
    function familiaAno($nome, $ano){
        echo "$nome Silva, nasceu em $ano <br>";
    }
    familiaAno("Gonçalo", "2006");

    // Função com valor padrão para parâmetro
    function altura($altura = 170){
        echo "A altura é: $altura";
    }

    echo "<br>";
    altura(180); // Chama a função com um valor específico
    
    echo "<br>";
    altura(); // Chama a função com o valor padrão
    
    // Exibe múltiplos parâmetros
    echo "Está", "string", "foi", "feita", "com", "multiplos", "parametros<br>";
    echo "<br>";

    // Exibição de variáveis
    $txt1 = "Estudo PHP";
    $txt2 = "EPB";
    $x = 5;
    $y = 4;
    echo "<h2>". $txt1 ."</h2>";
    echo "Estudo PHP na ". $txt2 ."<br>";
    echo $x + $y . "<br>";

    // Array de frutas
    $frutinhas = array("Maçã", "Manga", "Açai");
    $lenghFrutinhas = count($frutinhas);
    
    // Loop for para iterar sobre o array de frutas
    for($x = 0; $x < $lenghFrutinhas; $x++){
        echo $frutinhas[$x];
        echo "<br>";
    }
    
    // Array associativo de idades
    $idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
    echo "O Gabriel do desce e quebra tem ". $idades["Gabriel"] ." anos de idade";
    echo "<br>";

    // Loop foreach para iterar sobre o array associativo
    foreach($idades as $x => $x_value){
        echo "Chave= ". $x ." Valor= ". $x_value;
        echo "<br>";
    }

    // Array de números
    $numeros = array(1, 6, 3);
    sort($numeros); // Ordena o array
    $lenghNumeros = count($numeros);
    
    // Loop for para exibir números ordenados
    for($x = 0; $x < $lenghNumeros; $x++){
        echo $numeros[$x]. ",";
        echo "<br>";
    }

    rsort($numeros); // Ordena em ordem decrescente
    for($x = 0; $x < $lenghNumeros; $x++){
        echo $numeros[$x]. ",";
        echo "<br>";
    }

    // Array de nomes
    $nome = array("Gabriel", "Maria", "Sofia");
    sort($nome); // Ordena o array
    $lenghNumeros = count($nome);
    
    // Loop for para exibir nomes ordenados
    for($x = 0; $x < $lenghNumeros; $x++){
        echo $nome[$x]. ",";
        echo "<br>";
    }
    
    echo "<br>";

    // Array de nomes em ordem decrescente
    $nome = array("Gabriel", "Maria", "Sofia");
    rsort($nome); // Ordena em ordem decrescente
    $lenghNumeros = count($nome);
    
    // Loop for para exibir nomes em ordem decrescente
    for($x = 0; $x < $lenghNumeros; $x++){
        echo $nome[$x]. ",";
        echo "<br>";
    }

    echo "<br>";
    
    // Ordenação associativa
    $idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
    asort($idades); // Ordena por valor
    foreach($idades as $x => $x_value){
        echo "Chave= ". $x ." Valor= ". $x_value;
        echo "<br>";
    }

    echo "<br>";

    $idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
    ksort($idades); // Ordena por chave
    foreach($idades as $x => $x_value){
        echo "Chave= ". $x ." Valor= ". $x_value;
        echo "<br>";
    }

    echo "<br>";

    $idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
    arsort($idades); // Ordena em ordem decrescente por valor
    foreach($idades as $x => $x_value){
        echo "Chave= ". $x ." Valor= ". $x_value;
        echo "<br>";
    }

    echo "<br>";

    $idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
    krsort($idades); // Ordena em ordem decrescente por chave
    foreach($idades as $x => $x_value){
        echo "Chave= ". $x ." Valor= ". $x_value;
        echo "<br>";
    }

    // Função para adição usando variáveis globais
    $x = 7;
    $y = 3;

    function adicao(){
        $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"]; // Acesso a variáveis globais
    }
    adicao();
    echo $z; // Exibe o resultado da adição
    echo "<br>";

    // Função para adição com parâmetros
    function adicao1($a, $b){
        echo $a + $b; // Exibe a soma
    }

    adicao1(75, 25); // Chama a função
    echo "<br>";
    
    // Exibe informações do servidor
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo "PHP_SELF<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo "SERVER NAME<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo "HTTP_HOST<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo "HTTP_REFERER<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo "HTTP_USER_AGENT<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo "SCRIPT_NAME'<br>";
?>
</body>
</html>
