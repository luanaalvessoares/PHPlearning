### Dia 03

#### Escopo

01. _Escopo local_
O escopo local é basicamente o corpo de uma função. Uma variável local deve respeitar o espaço entre a função onde está localizada sem afetar algo no escopo global do código. Ela não é acessível fora desse escopo e sempre retornam ao seu valor inicial, ou seja, uma função após ser rodada pode ter seus valores modificados mas após esse evento tudo dentro da função retorna ao seu valor original.

02. _Escopo global_
Escopo global é basicamente tudo que está ao redor de escopos protegidos por chaves ({}), ou seja, tudo que está ao redor de maneira "livre". Uma variável de escopo global é sempre declarada fora de uma função e não é acessível, por padrão, dentro de uma função a fim de prevenir problemas de software. Para acessar uma variável global dentro de um escopo local precisaremos utilizar a palavra reservada _global_.

03. _Escopo static_
O escopo static refere-se a variáveis que mantêm seu valor entre diferentes chamadas de função. Uma variável declarada com static dentro de uma função não perde seu valor quando a execução da função termina, diferente das variáveis locais comuns. Em vez disso, ela retém o último valor atribuído a ela e esse valor é utilizado na próxima vez que a função for chamada. As variáveis static são úteis quando você precisa de uma variável que mantenha seu estado entre várias execuções da função, mas não quer usar variáveis globais.

04. _Escopo dos parâmetros_
O escopo dos parâmetros refere-se às variáveis que são passadas para uma função ou método como argumentos. Esses parâmetros são tratados como variáveis locais dentro da função ou método, o que significa que eles são acessíveis apenas dentro do corpo da função onde foram definidos. Eles são inicializados com os valores fornecidos quando a função é chamada e não afetam as variáveis globais ou de outros escopos. Após a execução da função, os parâmetros são destruídos e seus valores são descartados.


#### Operadores e expressões
A ordem das operações matemáticas em PHP segue as mesmas regras da aritmética tradicional, também conhecida como "ordem de precedência". Essas regras determinam a sequência em que as operações são realizadas quando há múltiplas operações em uma expressão.

**Ordem de Precedência**
    1. **Parênteses:** As expressões dentro de parênteses são avaliadas primeiro.
    2. **Exponenciação:** Operadores de exponenciação (**).
    3. **Multiplicação, Divisão e Módulo:** (*, /, %).
    4. **Adição e Subtração:** (+, -).

**Associatividade**
    • **Esquerda para Direita:** A maioria das operações (multiplicação, divisão, adição, subtração) é associativa da esquerda para a direita.
    • **Direita para Esquerda:** A exponenciação (**) é associativa da direita para a esquerda.

##### Operadores aritméticos
Os operadores aritméticos em PHP são usados para realizar operações matemáticas básicas. Aqui estão os principais:

    1. **Adição (+)**
        • Soma dois valores.
        • Exemplo: 3 + 2 resulta em 5.

    2. **Subtração (-)**
        • Subtrai o segundo valor do primeiro.
        • Exemplo: 5 - 2 resulta em 3.

    3. **Multiplicação (*)**
        • Multiplica dois valores.
        • Exemplo: 4 * 3 resulta em 12.

    4. **Divisão (/)**
        • Divide o primeiro valor pelo segundo.
        • Exemplo: 10 / 2 resulta em 5.

    5. **Módulo (%)**
        • Retorna o resto da divisão do primeiro valor pelo segundo.
        • Exemplo: 7 % 3 resulta em 1.

    6. **Exponenciação (**)**
        • Eleva o primeiro valor à potência do segundo.
        • Exemplo: 2 ** 3 resulta em 8.