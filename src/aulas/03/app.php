<?php
// Exemplo de uma variável global e uma variável local com o mesmo nome
    $number = 10;

    function printNumber() {
        $number = 20;

        echo "<br>$number variável local<br>";
    }

    echo "<br>$number variável global<br>";

    printNumber();

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Testes de uma variável de escopo global
    $name = "Marcos";

    function printName() {
        echo "<br>O nome do cliente é $name<br>";
    }

    printName(); // A impressão é somente 'O nome do cliente é' pois não consegue acessar a variável global

    function printName2() {
        global $name; // Utilizando a palavra-chave 'global' para acessar a variável

        echo "<br>O nome do cliente é $name<br>";
    }

    printName2(); // A impressão é 'O nome do cliente é Marcos'


    function printName3() {
        global $name;

        $name = "Paulo"; // Mudando o valor da variável no escopo local utilizado a palavra-chave 'global'

        echo "<br>O nome do cliente é $name<br>";
    }

    printName3();

    echo "<br>O novo nome do cliente agora é $name<br>";

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Exemplo de uma variável declarada como static
    function contador() {
        static $contagem = 0; // Declaração de uma variável estática
        $contagem++;
        echo "$contagem<br>";
    }

    contador(); // Imprime 1
    contador(); // Imprime 2
    contador(); // Imprime 3

    function saudacao() {
        static $cumprimento = "<br>Olá";
        $cumprimento .= "!";
        echo "$cumprimento<br>";
    }
    
    saudacao(); // Imprime "Olá!"
    saudacao(); // Imprime "Olá!!"
    saudacao(); // Imprime "Olá!!!"

    echo "<br><br> ------------------------------------------- <br><br>";
?>

<?php
    $nome = "João";
    $primeiroValor = 5;
    $segundoValor = 9;

    function cumprimentar($nome) {
        echo "<br>Olá, $nome!<br>";
    }

    cumprimentar("Ana"); // Imprime "Olá, Ana!"
    cumprimentar($nome); // Imprime "Olá, João!"

    function soma($a, $b) {
        echo "<br>" . $a + $b . "<br>";
    }

    soma(2, 3); // Imprime 5
    soma($primeiroValor, $segundoValor); // Imprime 14

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Exercícios sobre a ordem das operações matemáticas
    $resultado = 2 + 3 * 4; // 3 * 4 é calculado primeiro, depois 2 + 12
    echo "<br> $resultado <br>"; // Imprime 14

    $resultado = (2 + 3) * 4; // 2 + 3 é calculado primeiro, depois 5 * 4
    echo "<br> $resultado <br>"; // Imprime 20

    $resultado = 2 + 3 * 4 / 2; // 3 * 4 é calculado primeiro, depois 12 / 2, e então 2 + 6
    echo "<br> $resultado <br>"; // Imprime 8

    $resultado = 2 ** 3 ** 2; // 3 ** 2 é calculado primeiro, depois 2 ** 9
    echo "<br> $resultado <br>"; // Imprime 512
?>


