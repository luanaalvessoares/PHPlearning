### Dia 03

#### Escopo

01. _Escopo local_
O escopo local é basicamente o corpo de uma função. Uma variável local deve respeitar o espaço entre a função onde está localizada sem afetar algo no escopo global do código. Ela não é acessível fora desse escopo e sempre retornam ao seu valor inicial, ou seja, uma função após ser rodada pode ter seus valores modificados mas após esse evento tudo dentro da função retorna ao seu valor original.

02. _Escopo global_
Escopo global é basicamente tudo que está ao redor de escopos protegidos por chaves ({}), ou seja, tudo que está ao redor de maneira "livre". Uma variável de escopo global é sempre declarada fora de uma função e não é acessível, por padrão, dentro de uma função a fim de prevenir problemas de software. Para acessar uma variável global dentro de um escopo local precisaremos utilizar a palavra reservada _global_.