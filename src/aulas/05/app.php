<?php
// Crie um script PHP que verifique se um número em um array é par ou ímpar e armazene os resultados em dois arrays separados: um para números pares e outro para números ímpares.

    $numbers = [328, 328, 278, 389, 218, 373, 109, 77, 92, 188, 22, 476, 165, 120, 14, 40, 206, 178, 123];
    $pares = [];
    $impares = [];

    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 === 0) {
            $pares[] = $numbers[$i];
        } else {
            $impares[] = $numbers[$i];
        }
    }

    echo "<br>Pares:<br>";
    print_r($pares);

    echo "<br>Ímpares:<br>";
    print_r($impares);


    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Crie um script PHP que classifique uma lista de produtos em categorias usando switch-case. Cada produto tem um nome e um código de categoria. Use switch-case para determinar a categoria e armazene os produtos classificados em arrays separados para cada categoria.

    $produtos = [
        ["nome" => "Televisão", "categoria" => 1],
        ["nome" => "Camiseta", "categoria" => 2],
        ["nome" => "Maçã", "categoria" => 3],
        ["nome" => "Sofá", "categoria" => 4],
        ["nome" => "Notebook", "categoria" => 1],
        ["nome" => "Calça", "categoria" => 2],
        ["nome" => "Pão", "categoria" => 3],
        ["nome" => "Cadeira", "categoria" => 4],
        ["nome" => "Relógio", "categoria" => 5],
        ["nome" => "Biscoito", "categoria" => 3],
        ["nome" => "Smartphone", "categoria" => 1],
    ];

    $eletronicos = [];
    $roupas = [];
    $alimentos = [];
    $moveis = [];
    $outros = [];

    for ($i = 0; $i < count($produtos); $i++) {
        switch ($produtos[$i]["categoria"]) {
            case 1:
                $eletronicos[] = $produtos[$i]["nome"];
                break;

            case 2:
                $roupas[] = $produtos[$i]["nome"];
                break;

            case 3:
                $alimentos[] = $produtos[$i]["nome"];
                break;

            case 4:
                $moveis[] = $produtos[$i]["nome"];
                break;

            default:
                $outros[] = $produtos[$i]["nome"];
                break;
        }
    }

    echo "Eletrônicos:<br>";
    print_r($eletronicos);

    echo "<br><br>Roupas:<br>";
    print_r($roupas);

    echo "<br><br>Alimentos:<br>";
    print_r($alimentos);

    echo "<br><br>Móveis:<br>";
    print_r($moveis);

    echo "<br><br>Outros:<br>";
    print_r($outros);

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
//Crie um script PHP que simule uma contagem regressiva. O script deve: Começar a contagem a partir de um número fornecido. Validar que o número inicial é positivo e maior que zero. Utilizar um laço while para fazer a contagem regressiva até zero. Exibir cada número da contagem regressiva.


    $contador = 25;

    if ($contador > 0) {
        echo "Iniciando a contagem regressiva a partir de $contador:<br>";

        while ($contador >= 0) {
            echo "<br>$contador";
            $contador--;
        }

        echo "<br><br>A contagem terminou..<br>";
    } else {
        echo "O número inicial não é maior que zero.";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Crie um script PHP que some todos os números pares em um intervalo especificado usando um laço while. O intervalo deve ser definido por dois números predefinidos, inicio e fim.

    $inicio = 1;
    $fim = 100;

    if ($inicio > $fim) {
        echo "Erro: O valor de início deve ser menor ou igual ao valor de fim.";
    } else {
        $somaPares = 0;
        $contador = $inicio;

        while ($contador <= $fim) {
            if ($contador % 2 === 0) {
                $somaPares += $contador;
            }
            $contador++;
        }

        echo "A soma dos números pares no intervalo de $inicio a $fim é: $somaPares";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>