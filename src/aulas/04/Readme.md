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