<?php
// Exemplos de concatenação e atribuição
    $nome = "João";
    $sobrenome = "Silva";

    echo "<br>" . $nome . " " . $sobrenome . "<br>";


    $nomeCompleto = $nome . " " . $sobrenome;

    echo "<br> $nomeCompleto <br>";


    $modelo = "Corsa ";
    $cor = "Vermelho";

    $modelo .= $cor; // Equivale a $modelo = $modelo . $cor;

    echo "<br> $modelo <br>";

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Operadores de incremento e decremento
    $number1 = 3;
    echo $number1++; // Imprime 3, pois primeira foi feita a impressão e depois a incrementação
    echo "<br>" . $number1 . "<br>"; // Imprime 4

    $number2 = 5;
    echo "<br>" . ++$number2 . "<br>"; // Imprime 6, pois primeira foi feita a incrementação e depois foi impressa

    $number3 = 7;
    echo "<br>" . $number3--; // Imprime 7, pois primeira foi feita a impressão e depois a decrementação
    echo "<br>" . $number3 . "<br>"; // Imprime 6

    $number4 = 9;
    echo "<br>" . --$number4 . "<br>"; // Imprime 8, pois primeira foi feita a decrementação e depois foi impressa
?>
