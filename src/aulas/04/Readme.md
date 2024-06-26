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