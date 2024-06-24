### Dia 02

#### Tipos de dados no PHP

01. _Integers (inteiros)_
    Números inteiros no PHP são tratados de maneira parecida em outras linguagens de programação. Ao declararmos um número inteiro dentro de uma variável ou em alguma condicão (pro exemplo numa impressão com echo) não precisamos colocá-lo dentro de aspas. Podemos também declarar um inteiro negativo, basta adicionar o sinal de menos (-) antes do número. 4, 6, 15, 109999 e -8 são exemplos de números inteiros.

    • Podemos checar se um tipo de dado é realmente um inteiro utilizando a função **is_int()**, se o número for realmente um inteiro, a função retornará _true_, do contrário retornará _false_. Para validarmos esse valor precisamos utilizar uma estrutura _if_.


02. _Float (ponto flutuante)_
    Floats no PHP são todos os números com casas decimais. Seguindo o padrão da língua inglesa, o ponto (.) é utilizado no lugar da vírgula, então _um e meio_ (1,5 no padrão BR) se torna _1.5_ como float no PHP. Números decimais podem ser somados (podendo ser também outros tipos de operações) facilmente no PHP, conseguimos somar, por exemplo, 12 + 13.45.

    • Podemos checar se um tipo de dado é realmente um float utilizando a função **is_float()**, se o número for realmente um float, a função retornará _true_, do contrário retornará _false_. Para validarmos esse valor precisamos utilizar uma estrutura _if_.


03. _Strings (conjunto de caracteres entre aspas)_
    Strings no PHP são todos os conjuntos de caracteres entre aspas. O ideal é sempre utilizar aspas duplas ("") e deixar as apas simples ('') para citações dentro das aspas duplas.

    • Podemos checar se um tipo de dado é realmente uma string utilizando a função **is_string()**, se o dado for realmente uma string, a função retornará _true_, do contrário retornará _false_. Para validarmos esse valor precisamos utilizar uma estrutura _if_.


04. _Boolean (true ou false)_
    Booleans no PHP são tipos de dados que verificam a procedência de uma informação, mostrando se ela é verdadeira ou falsa. Serve muito em operações lógicas trazendo o resultado de uma verificação como sendo _true_ ou _false_. Alguns valores - por natureza - são considerados _false_ no PHP: **0**, **0.0**, **"0"**, **[]**, **NULL**. Os booleans serão mais utilizados em comparações, verificações, etc, dificilmente veremos uma variável carregando puramente um dado boleano.

    • Podemos checar se um tipo de dado é realmente um boleano utilizando a função **is_bool()**, se o dado for realmente uma string, a função retornará _true_, do contrário retornará _false_. Para validarmos esse valor precisamos utilizar uma estrutura _if_.


05. _Arrays (conjunto de dados)_
    Array é um tipo de dado que permite agrupar diversos outros dados dentro de colchetes **([])**. Em sua sintaxe, cada dado dentro das chaves é separados por uma vírgula. Podemos adicionar qualquer tipo de dado em um array, mas o ideal é seguir com uma lista de um só tipo de dado, assim facilitando o tratamento dos mesmos. Exemplo de array com o mesmo tipo de dado: [1, 2, 3, 4, 5]. Exemplo de array com diferentes tipos de dados: ["Carlos", 24, 1.73, true].

    • Podemos imprimir um array utilizando um **print_r($arr)**, o que trará também o índice de cada um dos itens, permitindo o tratamento isolado de cada uma das informações do array.

    • Para imprimir um item do array vamos utilizar o _echo_ e informar o índice do item que queremos imprimir, por exemplo: _echo $arr[1];_.

    **Importante: a função _echo_ do PHP faz a conversão de uma informação para _string_ para que essa possa ser impressa na tela. Portanto, não é possível a impressão de um array a partir de um _echo_.**

    **Importante: todo índice começa a partir do 0 (zero). Tanto em arrays, objetos ou outros tipos de dados; o primeiro item vai ter sempre o índice 0, o segundo item vai ter índice 1 e assim por diante...**


06. _Arrays Associativos (conjuntos de chaves e valores)_
    Arrays associativos é uma possibilidade do PHP de nos permitir incluir o nome do dado dentro de um array. Cada nome de dado deve estar entre aspas e ser separado de seu valor por uma seta **(=>)**. Funciona como o array tradicional, seu diferencial durante a impressão é que não somente podemos indicar o índice do dado a ser impresso mas também o seu nome.

    • Podemos imprimir um dado de um array associativo informando o seu nome: _echo $arr['nome'];_, imprimindo, dessa maneira, o valor desse dado.


07. _Classes e Objetos_
    O PHP possui um paradigma de orientação a objeto. Podemos então criar classes e objetos e _objeto_ é considerado um tipo de dado. Objetos possuem metódos que são suas ações (o que farão a partir de uma função) e propriedades que são suas características. É importante lembrar que classe e objeto não são a mesma coisa, embora estejam intimamente relacionados. Veja a definição de cada um:
    - **Classe**: uma classe é um modelo ou blueprint que define as propriedades e métodos que os objetos criados a partir dela terão. Veja um exemplo de sua estrutura:
    ```PHP
        <?php
            class Carro {
                public $marca;
                public $modelo;

                public function __construct($marca, $modelo) {
                    $this->marca = $marca;
                    $this->modelo = $modelo;
                }

                public function descricao() {
                    return "Este carro é um $this->marca $this->modelo.";
                }
            }
        ?>
    ```

    - **Objeto**: um objeto é uma instância de uma classe. É uma entidade concreta que é criada a partir da classe e que possui as propriedades e métodos definidos pela classe. Veja um exemplo de sua estrutura:
    ```PHP
        <?php
            // Criação de um objeto a partir da classe Carro
            $meuCarro = new Carro("Chevrolet", "Corsa");
            echo $meuCarro->descricao(); // Imprime: Este carro é um Chevrolet Corsa.

            // Criação de outro objeto a partir da classe Carro
            $outroCarro = new Carro("Volkswagen", "Gol");
            echo $outroCarro->descricao(); // Imprime: Este carro é um Volkswagen Gol.
        ?>
    ```


08. _NULL_
    O tipo de dado _NULL_ é um tipo de dado especial que representa a ausência de valor. Comumente utilizado para iniciar variáveis que receberão valores posteriormente, é um tipo de dado simples em PHP que possui apenas um valor: _NULL_. Uma variável é considerada nula se foi atribuída a ela o valor _NULL_, se não foi definida ou se foi unset.

    • Podemos checar se um tipo de dado é realmente NULL utilizando a função **is_null()**, se o dado for realmente nulo, a função retornará _true_, do contrário retornará _false_. Para validarmos esse valor precisamos utilizar uma estrutura _if_.