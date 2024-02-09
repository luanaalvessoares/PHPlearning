<?php
//O exercício proposto foi a declaração de uma variável seguida da sua impressão a partir de um echo
    $userName = "Fabiano";

    echo "Usuário $userName <br>";
    echo "O nome do usuário é $userName e até o momento não temos informações sobre seu sobrenome. <br>";
?>




<?php
//Treinamento

//Crie uma variável chamada $nome e atribua a ela o seu próprio nome como um valor de string. Em seguida, use o echo para imprimir uma saudação que inclua o nome armazenado na variável. Por exemplo, se o seu nome for "João", o programa deve imprimir "Olá, João!".
$name = "João";
echo "Olá, $name! Como vai? <br>";

//Declare duas variáveis numéricas, $numero1 e $numero2, e atribua valores a elas. Use o echo para imprimir o resultado da soma dessas duas variáveis. Por exemplo, se $numero1 for 5 e $numero2 for 3, o programa deve imprimir "O resultado da soma é 8".
$value1 = 4;
$value2 = 9;
echo "O resultado da soma de $value1 e $value2 é " . ($value1 + $value2);

//Crie duas variáveis de string, $primeiraParte e $segundaParte. Atribua a $primeiraParte o valor "PHP é " e a $segundaParte o valor "incrível!". Use o echo para imprimir a concatenação dessas duas strings, resultando na frase completa "PHP é incrível!".
$firstPart = "O PHP";
$lastPart = "é incrível!";

echo "<br> $firstPart $lastPart <br>";
echo $firstPart . $lastPart;
?>