<?php
// Faça operações de soma e subtração de números inteiros e imprima o resultado
    $number01 = 56;
    $number02 = 23;

    echo "<br>O resultado da soma de $number01 e $number02 é: " . $number01 + $number02 . "<br>";

    $number03 = 28;
    $number04 = 12;

    echo "<br>O resultado de $number03 - $number04 é: " . $number03 - $number04 . "<br>";

    echo "<br>O resultado da subtração de 48 de 72 é: " . 48 - 72 . "<br>";

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Checando se um dado é um inteiro
    $number = 3;

    if(is_int($number)) {
        echo "<br>O tipo de dado é um número inteiro.<br>";
    };

    if(is_int("Uma string aqui")) {
        echo "<br>O tipo de dado é um número inteiro.<br>";
    } else {
        echo "<br>O tipo de dado não é um número inteiro.<br>";
    }

    if(is_int(-4)) {
        echo "<br>O tipo de dado é um número inteiro.<br>";
    } else {
        echo "<br>O tipo de dado não é um número inteiro.<br>";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Checando se um dado é um float
    $number = 4.78;

    if(is_float($number)) {
        echo "<br>O tipo de dado é um float.<br>";
    };

    if(is_float("Uma string aqui")) {
        echo "<br>O tipo de dado é um float.<br>";
    } else {
        echo "<br>O tipo de dado não é um float.<br>";
    }

    if(is_float(-9.1)) {
        echo "<br>O tipo de dado é um float.<br>";
    } else {
        echo "<br>O tipo de dado não é um float.<br>";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Checando se um dado é uma string
    $str = "Meu texto";

    if(is_string($str)) {
        echo "<br>O tipo de dado é uma string.<br>";
    };

    if(is_string(98)) {
        echo "<br>O tipo de dado é uma string.<br>";
    } else {
        echo "<br>O tipo de dado não é uma string.<br>";
    }

    if(is_string("Meu número de telefone (11) 99999-9999")) {
        echo "<br>O tipo de dado é uma string.<br>";
    } else {
        echo "<br>O tipo de dado não é uma string.<br>";
    }


    // Interpolação de dados numa impressão
    $nome = "João";
    $idade = 21;

    echo "<br>Olá, eu me chamo $nome e tenho $idade anos.";

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Checando se um dado é um boolean
    $bool = true;

    if(is_bool($bool)) {
        echo "<br>O tipo de dado é um boolean.<br>";
    };

    if(is_bool(98)) {
        echo "<br>O tipo de dado é um boolean.<br>";
    } else {
        echo "<br>O tipo de dado não é um boolean.<br>";
    };

    if(is_bool(false)) {
        echo "<br>O tipo de dado é um boolean.<br>";
    } else {
        echo "<br>O tipo de dado não é um boolean.<br>";
    };


    if(0 == false) {
        echo "<br>O valor 0 é considerado falso.<br>";
    };

    if(0.0 == false) {
        echo "<br>O valor 0.0 é considerado falso.<br>";
    };

    if("0" == false) {
        echo '<br>O valor "0" é considerado falso.<br>';
    };

    if([] == false) {
        echo "<br>O valor [] é considerado falso.<br>";
    };

    if(NULL == false) {
        echo "<br>O valor NULL é considerado falso.<br>";
    };

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Imprimindo e acessando dados de um array
    $arr = [1, 2, 3];

    print_r($arr);

    echo "<br><br>";

    echo $arr[0];

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Imprimindo e acessando dados de um array associativo
    $cachorro = ["nome" => "Pluto", "idade" => 2, "cor" => "preto", "peso" => 5];

    print_r($cachorro);

    echo "<br><br>";

    echo "Meu cachorro se chama {$cachorro['nome']} e ele já tem {$cachorro['idade']} anos de idade. Ele é todo {$cachorro['cor']} e pesa {$cachorro['peso']}kg.";

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// O desafio é criar um array associativo com dados de uma pessoa e verificar com um if() se a pessoa é maior ou menor de idade
    $pessoa = ["nome" => "Ana", "cidade" => "São Paulo", "idade" => 19, "mesAniversario" => "maio", "altura" => 1.69];

    if($pessoa['idade'] >= 18) {
        echo "O nome dela é {$pessoa['nome']}, veio da cidade de {$pessoa['cidade']}, mede {$pessoa['altura']} e já é maior de idade, fez {$pessoa['idade']} anos em {$pessoa['mesAniversario']}.";
    } else {
        echo "A {$pessoa['nome']} não é maior de idade, portanto não haverá entrevista.";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Criando uma classe e instanciando um objeto dessa classe
    class Carro {
        function corDoCarro() {
            echo "O carro é azul<br>";
        }
    }

    $corsa = new Carro();

    $corsa->corDoCarro();

    $corsa->ano = 2021;

    echo "<br>O carro é do ano de {$corsa->ano}";

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Checando se um dado é NULL
    $valorNulo = NULL;

    if(is_null($valorNulo)) {
        echo "<br>O tipo de dado é um NULL.<br>";
    };

    if(is_null("Uma string aqui")) {
        echo "<br>O tipo de dado é um NULL.<br>";
    } else {
        echo "<br>O tipo de dado não é um NULL.<br>";
    }

    if(is_null(5)) {
        echo "<br>O tipo de dado é um NULL.<br>";
    } else {
        echo "<br>O tipo de dado não é um NULL.<br>";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Testando o conceito de "variável de variável"
    $nome = "Pedro";
    $$nome = "Programador";

    echo $joao;

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Testando o conceito de "variável por referência"
    $a = "<br>Olá<br>";
    $b =& $a;

    echo $a;
    echo $b;

    $b = "<br>Mundo<br>";

    echo $a;
    echo $b;

    echo "<br><br> ------------------------------------------- <br><br>";
?>