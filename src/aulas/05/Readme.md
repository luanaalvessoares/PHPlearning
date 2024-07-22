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


02. _Switch Case_
A estrutura switch é usada para executar diferentes blocos de código com base no valor de uma expressão. É uma alternativa ao uso de múltiplos if, elseif, e else quando se está comparando a mesma variável ou expressão com diferentes valores.

    **_Componentes:_**
    • expression: A expressão que você deseja comparar.
    • case: Cada case verifica se a expressão é igual ao valor especificado.
    • break: Interrompe a execução do switch após a execução do código correspondente ao case (evita o "fall-through").
    • default: Opcional, executado se nenhum case corresponder.

```PHP
    <?php
        $diaDaSemana = "terça";

        switch ($diaDaSemana) {
            case "segunda":
                echo "Hoje é segunda-feira.";
                break;
            case "terça":
                echo "Hoje é terça-feira.";
                break;
            case "quarta":
                echo "Hoje é quarta-feira.";
                break;
            case "quinta":
                echo "Hoje é quinta-feira.";
                break;
            case "sexta":
                echo "Hoje é sexta-feira.";
                break;
            case "sábado":
                echo "Hoje é sábado.";
                break;
            case "domingo":
                echo "Hoje é domingo.";
                break;
            default:
                echo "Dia inválido.";
        }
    ?>
```

_Uso de switch Sem break_
Se omitirmos o break, o PHP continuará executando o próximo bloco de código até encontrar um break ou o final do switch. Isso é chamado de "fall-through" e pode ser útil em alguns casos específicos:

```PHP
    <?php
        $letra = 'b';

        switch ($letra) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                echo "A letra é uma vogal.";
                break;
            default:
                echo "A letra é uma consoante.";
        }
    ?>
```


03. _While_
A estrutura de repetição while é usada para executar um bloco de código repetidamente, enquanto uma condição especificada for verdadeira. É útil para situações onde o número de iterações não é conhecido previamente e depende de uma condição dinâmica. Veja alguns exemplos de uso e suas explicações:

    1. **Exemplo Básico**
    Aqui está um exemplo básico de como usar o while para imprimir números de 1 a 5:
    ```
        <?php
            $contador = 1;

            while ($contador <= 5) {
                echo "Número: $contador<br>";
                $contador++;
            }
        ?>
    ```

    **Explicação**
    • Inicialização: $contador é inicializado com o valor 1.
    • Condição: A condição $contador <= 5 é avaliada antes de cada iteração.
    • Execução: O bloco de código dentro do while é executado enquanto a condição for verdadeira.
    • Incremento: $contador++ incrementa o valor de $contador em 1 a cada iteração.
    • Terminação: Quando $contador chega a 6, a condição $contador <= 5 torna-se falsa, e o laço while é interrompido.


    2. **Exemplo com Condição Dinâmica**
    Um exemplo mais dinâmico onde a condição de parada depende de uma entrada do usuário:
    ```
        <?php
            $senhaCorreta = "12345";
            $tentativa = "";

            while ($tentativa != $senhaCorreta) {
                // Simulando uma entrada do usuário
                $tentativa = readline("Digite a senha: ");
                
                if ($tentativa == $senhaCorreta) {
                    echo "Senha correta! Acesso concedido.";
                } else {
                    echo "Senha incorreta! Tente novamente.\n";
                }
            }
        ?>
    ```

    **Explicação**
    • Inicialização: A senha correta é definida como "12345", e $tentativa é inicializada como uma string vazia.
    • Condição: O laço while continua até que $tentativa seja igual a $senhaCorreta.
    • Execução: O bloco de código dentro do while solicita ao usuário que digite a senha.
    • Verificação: Se a senha digitada estiver correta, exibe "Acesso concedido". Caso contrário, solicita nova tentativa.
    • Terminação: O laço termina quando a senha correta é digitada.


    3. **Exemplo com Array**
    Outro exemplo é iterar sobre os elementos de um array:
    ```
        <?php
            $frutas = ["Maçã", "Banana", "Laranja"];
            $index = 0;

            while ($index < count($frutas)) {
                echo "Fruta: {$frutas[$index]}<br>";
                $index++;
            }
        ?>
    ```

    **Explicação**
    • Inicialização: O array $frutas é definido, e $index é inicializado com 0.
    • Condição: A condição $index < count($frutas) verifica se ainda há elementos no array para iterar.
    • Execução: O bloco de código dentro do while exibe o elemento atual do array.
    • Incremento: $index++ incrementa o valor de $index em 1 a cada iteração.
    • Terminação: O laço while termina quando todos os elementos do array são processados.


