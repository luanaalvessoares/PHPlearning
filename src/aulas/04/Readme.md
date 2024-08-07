### Dia 04

#### Operadores

01. _Operador de concatenação e atribuição_
• **Concatenação**
O operador de concatenação em PHP é usado para unir duas ou mais strings. O operador utilizado para concatenação é o ponto (.). Veja um exemplo de uso:
```PHP
    <?php
        $nome = "João";
        $sobrenome = "Silva";
        $nomeCompleto = $nome . " " . $sobrenome;

        echo $nomeCompleto; // Imprime "João Silva"
    ?>
```

• **Concatenação e atribuição**
Além do operador . para concatenação, PHP também oferece o operador .= para concatenar e atribuir ao mesmo tempo.
```PHP
    <?php
        $mensagem = "Olá";
        $mensagem .= " mundo!"; // Equivale a $mensagem = $mensagem . " mundo!";

        echo $mensagem; // Imprime "Olá mundo!"
    ?>
```

02. _Incremento e decremento_
Os operadores de auto incremento e decremento são usados para aumentar ou diminuir o valor de uma variável em 1. Existem duas formas para cada operador: pré-incremento/decremento e pós-incremento/decremento. São operadores muito utilizados em estruturas de repetição (loops).

• **Operador de auto incremento**
    1. **Pré-incremento**
        • Incrementa a variável em 1 e depois retorna o valor. Veja o exemplo:
            ```PHP
                <?php
                    $a = 5;
                    echo ++$a; // Imprime 6
                ?>
            ```
    
    2. **Pós-incremento**
        • Retorna o valor da variável e depois incrementa em 1. Veja o exemplo:
            ```PHP
                <?php
                    $a = 5;
                    echo $a++; // Imprime 5
                    echo $a;   // Imprime 6
                ?>
            ```

• **Operador de auto decremento**
    1. **Pré-decremento**
        • Decrementa a variável em 1 e depois retorna o valor. Veja o exemplo:
            ```PHP
                <?php
                    $a = 5;
                   echo --$a; // Imprime 4
                ?>
            ```
    
    2. **Pós-decremento**
        • Retorna o valor da variável e depois decrementa em 1. Veja o exemplo:
            ```PHP
                <?php
                    $a = 5;
                    echo $a--; // Imprime 5
                    echo $a;   // Imprime 4
                ?>
            ```


03. _Operadores de comparação_
Os operadores de comparação em PHP são usados para comparar valores.

    1. **Maior (>)**
        • Verifica se o valor à esquerda é maior que o valor à direita. Veja o exemplo:
        ```PHP
            <?php
                $a = 10;
                $b = 5;
                var_dump($a > $b); // true pois 10 é maior que 5
            ?>
        ```

    2. **Maior ou Igual (>=)**    
        • Verifica se o valor à esquerda é maior ou igual ao valor à direita. Veja o exemplo:
        ```PHP
            <?php
                $a = 10;
                $b = 10;
                var_dump($a >= $b); // true pois 10 é igual a 10
            ?>
        ```

    3. **Menor (<)**    
        • Verifica se o valor à esquerda é menor que o valor à direita. Veja o exemplo:
        ```PHP
            <?php
                $a = 6;
                $b = 15;
                var_dump($a < $b); // true pois 6 é menor que 15
            ?>
        ```

    4. **Menor ou Igual (<=)**    
        • Verifica se o valor à esquerda é menor ou igual ao valor à direita. Veja o exemplo:
        ```PHP
            <?php
                $a = 10;
                $b = 10;
                var_dump($a <= $b); // true pois 10 é igual a 10
            ?>
        ```


04. _Operadores lógicos_
Os operadores lógicos são usados para combinar ou inverter condições booleanas.

    1. **Operador && (E)**
        • Retorna true se todas as expressões forem verdadeiras - comparadas - forem verdadeiras, podendo serem expressões simples ou até mesmo operações. Veja o exemplo:
        ```PHP
            <?php
                $a = true;
                $b = false;
                var_dump($a && $b); // false, porque $b é false
            ?>
        ```

    2. **Operador || (OU)**    
        • Retorna true se pelo menos uma das expressões comparadas for verdadeira. Veja o exemplo:
        ```PHP
            <?php
                $a = true;
                $b = false;
                var_dump($a || $b); // true, porque $a é true
            ?>
        ```

    3. **Operador ! (NÃO)**    
        • Inverte o valor booleano da expressão. Veja o exemplo:
        ```PHP
            <?php
                $a = true;
                var_dump(!$a); // false, porque $a é true
            ?>
        ```


05. _Operador de Cast_
O operador de cast em PHP é usado para converter uma variável de um tipo de dado para outro. A conversão pode ser feita explicitamente (usando o operador de cast) ou implicitamente (automaticamente pelo PHP).

    **Tipos de Casts**
        Conheça os principais tipos de cast disponíveis em PHP:

        • **(int) ou (integer)**: Converte para inteiro.
        • **(bool) ou (boolean)**: Converte para booleano.
        • **(float), (double), ou (real)**: Converte para ponto flutuante.
        • **(string)**: Converte para string.
        • **(array)**: Converte para array.
        • **(object)**: Converte para objeto.
        • **(unset)**: Converte para NULL.


06. _Operadores de Atribuição_
Os operadores de atribuição em PHP são usados para definir valores para variáveis. O operador de atribuição mais básico é o igual (=), mas PHP oferece vários operadores de atribuição combinados que realizam uma operação e atribuem o resultado ao mesmo tempo:

    1. **Operador de Atribuição Básico (=)**
        • Atribui o valor do lado direito à variável do lado esquerdo. Veja o exemplo:
        ```PHP
            <?php
                $a = 5;
                echo $a; // Imprime: 5
            ?>
        ```

    2. **Adição e atribuição (+=)**
        • Adiciona o valor do lado direito à variável do lado esquerdo e atribui o resultado à variável. Veja o exemplo:
        ```PHP
            <?php
                $a = 5;
                $a += 3; // Equivalente a $a = $a + 3;
                echo $a; // Imprime: 8
            ?>
        ```

    3. **Multiplicação e atribuição (*=)**
        • Multiplica o valor do lado direito pela variável do lado esquerdo e atribui o resultado à variável. Veja o exemplo:
        ```PHP
            <?php
                $a = 5;
                $a *= 3; // Equivalente a $a = $a * 3;
                echo $a; // Imprime: 15
            ?>
        ```

    4. **Divisão e atribuição (/=)**
        • Divide a variável do lado esquerdo pelo valor do lado direito e atribui o resultado à variável. Veja o exemplo:
        ```PHP
            <?php
                $a = 15;
                $a /= 3; // Equivalente a $a = $a / 3;
                echo $a; // Imprime: 5
            ?>
        ```

    5. **Módulo e atribuição (%=)**
        • Calcula o resto da divisão da variável do lado esquerdo pelo valor do lado direito e atribui o resultado à variável. Veja o exemplo:
        ```PHP
            <?php
                $a = 5;
                $a %= 2; // Equivalente a $a = $a % 2;
                echo $a; // Imprime: 1
            ?>
        ```

    6. **Concatenação e atribuição (.=)**
        • Concatena a string do lado direito à variável do lado esquerdo e atribui o resultado à variável. Veja o exemplo:
        ```PHP
            <?php
                $a = "Olá";
                $a .= ", mundo!"; // Equivalente a $a = $a . ", mundo!";
                echo $a; // Imprime: Olá, mundo!
            ?>
        ```


07. _Operador Ternário_
O operador ternário é uma forma concisa de realizar uma operação condicional em PHP. Ele é uma alternativa compacta à estrutura if-else, permitindo que você escreva expressões condicionais em uma única linha. Veja a sintaxe:
    ```PHP
        (condition) ? expression_if_true : expression_if_false;
    ```
        • condition: Uma expressão que é avaliada como true ou false.
        • expression_if_true: A expressão que é retornada se condition for true.
        • expression_if_false: A expressão que é retornada se condition for false.