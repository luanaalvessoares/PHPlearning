### Dia 05

#### Estruturas Condicionais

01. _if, else, e elseif_
As estruturas condicionais if, else, e elseif permitem que executemos diferentes blocos de código com base em condições específicas. Estas estruturas são fundamentais para controle de fluxo em scripts PHP.

    1. **If**
    A estrutura if executa um bloco de código se a condição especificada for verdadeira (true). Exemplo:
    ```PHP
        <?php
            $idade = 20;

            if ($idade >= 18) {
                echo "Você é maior de idade.";
            }
        ?>
    ```

    2. **Else**
    A estrutura else executa um bloco de código se a condição do if correspondente for falsa (false). Exemplo:
    ```PHP
        <?php
            $idade = 16;

            if ($idade >= 18) {
                echo "Você é maior de idade.";
            } else {
                echo "Você é menor de idade.";
            }
        ?>
    ```

    3. **Else if**
    A estrutura elseif permite adicionar condições adicionais se a condição do if ou qualquer elseif anterior for falsa. Você pode ter vários elseif em uma cadeia de condicionais. Exemplo:
    ```PHP
        <?php
            $nota = 85;

            if ($nota >= 90) {
                echo "Grau: A";
            } elseif ($nota >= 80) {
                echo "Grau: B";
            } elseif ($nota >= 70) {
                echo "Grau: C";
            } elseif ($nota >= 60) {
                echo "Grau: D";
            } else {
                echo "Grau: F";
            }
        ?>
    ```