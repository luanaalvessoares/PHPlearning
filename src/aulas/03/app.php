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