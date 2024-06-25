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

?>