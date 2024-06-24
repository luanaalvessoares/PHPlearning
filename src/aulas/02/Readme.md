### Day 02

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