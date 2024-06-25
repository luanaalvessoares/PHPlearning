### Dia 03

#### Escopo

01. _Escopo local_
O escopo local é basicamente o corpo de uma função. Uma variável local deve respeitar o espaço entre a função onde está localizada sem afetar algo no escopo global do código. Ela não é acessível fora desse escopo e sempre retornam ao seu valor inicial, ou seja, uma função após ser rodada pode ter seus valores modificados mas após esse evento tudo dentro da função retorna ao seu valor original.

02. _Escopo global_
Escopo global é basicamente tudo que está ao redor de escopos protegidos por chaves ({}), ou seja, tudo que está ao redor de maneira "livre". Uma variável de escopo global é sempre declarada fora de uma função e não é acessível, por padrão, dentro de uma função a fim de prevenir problemas de software. Para acessar uma variável global dentro de um escopo local precisaremos utilizar a palavra reservada _global_.

03. _Escopo static_
O escopo static refere-se a variáveis que mantêm seu valor entre diferentes chamadas de função. Uma variável declarada com static dentro de uma função não perde seu valor quando a execução da função termina, diferente das variáveis locais comuns. Em vez disso, ela retém o último valor atribuído a ela e esse valor é utilizado na próxima vez que a função for chamada. As variáveis static são úteis quando você precisa de uma variável que mantenha seu estado entre várias execuções da função, mas não quer usar variáveis globais.