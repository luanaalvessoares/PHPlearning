<?php
// Exemplos de concatenação e atribuição
    $nome = "João";
    $sobrenome = "Silva";

    echo "<br>" . $nome . " " . $sobrenome . "<br>";


    $nomeCompleto = $nome . " " . $sobrenome;

    echo "<br> $nomeCompleto <br>";


    $modelo = "Corsa ";
    $cor = "Vermelho";

    $modelo .= $cor; // Equivale a $modelo = $modelo . $cor;

    echo "<br> $modelo <br>";

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Operadores de incremento e decremento
    $number1 = 3;
    echo $number1++; // Imprime 3, pois primeira foi feita a impressão e depois a incrementação
    echo "<br>" . $number1 . "<br>"; // Imprime 4

    $number2 = 5;
    echo "<br>" . ++$number2 . "<br>"; // Imprime 6, pois primeira foi feita a incrementação e depois foi impressa

    $number3 = 7;
    echo "<br>" . $number3--; // Imprime 7, pois primeira foi feita a impressão e depois a decrementação
    echo "<br>" . $number3 . "<br>"; // Imprime 6

    $number4 = 9;
    echo "<br>" . --$number4 . "<br>"; // Imprime 8, pois primeira foi feita a decrementação e depois foi impressa

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Operadores de comparação maior e maior ou igual

    class Pessoa {
        public $nome;
        public $idade;

        public function __construct($nome, $idade) {
            $this->nome = $nome;
            $this->idade = $idade;
        }
    }

    $pessoa1 = new Pessoa("Pedro", 26);
    $pessoa2 = new Pessoa("João", 22);


    if($pessoa1->idade > $pessoa2->idade) {
        echo "<br> $pessoa1->nome é mais velho que $pessoa2->nome <br>";
    } else {
        echo "<br> $pessoa1->nome é mais novo que $pessoa2->nome <br>";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Operadores de comparação menor e menor ou igual

    class Refrigerante {
        public $sabor;
        public $quantidadeML;

        public function __construct($sabor, $quantidadeML) {
            $this->sabor = $sabor;
            $this->quantidadeML = $quantidadeML;
        }
    }

    $refrigerante1 = new Refrigerante("Laranja", 2200);
    $refrigerante2 = new Refrigerante("Guaraná", 2600);


    if($refrigerante1->quantidadeML < $refrigerante2->quantidadeML) {
        echo "<br> O refrigerante sabor $refrigerante1->sabor é menor que o refrigerante sabor $refrigerante2->sabor <br>";
    } else {
        echo "<br> O refrigerante sabor $refrigerante2->sabor é menor que o refrigerante sabor $refrigerante2->sabor <br>";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Operador && (E): Crie um script PHP que verifica se uma pessoa está apta para votar. Considere que a pessoa deve ter 18 anos ou mais e ser cidadã do país.

    class Eleitor {
        public $nome;
        public $idade;
        public $nacionalidade;

        public function __construct($nome, $idade, $nacionalidade) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->nacionalidade = $nacionalidade;
        }

        public function podeVotar() {
            return $this->idade > 18 && $this->nacionalidade == "Brasileiro";
        }
    }

    $eleitor1 = new Eleitor("Bruna", 19, "Brasileiro");
    $eleitor2 = new Eleitor("Cesar", 17, "Brasileiro");
    $eleitor3 = new Eleitor("Mario", 16, "Canadense");

    if($eleitor1->podeVotar()) {
        echo "<br> $eleitor1->nome está apto para votar nas próximas eleições. <br>";
    } else {
        echo "<br> $eleitor1->nome não está apto para votar nas próximas eleições. <br>";
    }

    if($eleitor2->podeVotar()) {
        echo "<br> $eleitor2->nome está apto para votar nas próximas eleições. <br>";
    } else {
        echo "<br> $eleitor2->nome não está apto para votar nas próximas eleições. <br>";
    }

    if($eleitor3->podeVotar()) {
        echo "<br> $eleitor3->nome está apto para votar nas próximas eleições. <br>";
    } else {
        echo "<br> $eleitor3->nome não está apto para votar nas próximas eleições. <br>";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Operador || (OU): Crie um script PHP que verifica se uma pessoa tem acesso a um evento. Considere que a pessoa deve ter um ingresso ou ser um VIP.

    class Convidado {
        public $nome;
        public $ingresso;
        public $vip;

        public function __construct($nome, $ingresso, $vip) {
            $this->nome = $nome;
            $this->ingresso = $ingresso;
            $this->vip = $vip;
        }

        public function podeEntrar() {
            return $this->ingresso || $this->vip;
        }
    }

    $convidado1 = new Convidado("Fabio", true, false);
    $convidado2 = new Convidado("Ana", false, true);
    $convidado3 = new Convidado("Mike", false, false);
    $convidado4 = new Convidado("Bianca", true, true);

    if($convidado1->podeEntrar()) {
        echo "<br> $convidado1->nome tem acesso ao evento. <br>";
    } else {
        echo "<br> $convidado1->nome não tem acesso ao evento. <br>";
    }

    if($convidado2->podeEntrar()) {
        echo "<br> $convidado2->nome tem acesso ao evento. <br>";
    } else {
        echo "<br> $convidado2->nome não tem acesso ao evento. <br>";
    }

    if($convidado3->podeEntrar()) {
        echo "<br> $convidado3->nome tem acesso ao evento. <br>";
    } else {
        echo "<br> $convidado3->nome não tem acesso ao evento. <br>";
    }

    if($convidado4->podeEntrar()) {
        echo "<br> $convidado4->nome tem acesso ao evento. <br>";
    } else {
        echo "<br> $convidado4->nome não tem acesso ao evento. <br>";
    }

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Operador ! (NÃO): Crie um script PHP que verifica se uma pessoa não é estudante. Se não for estudante, ela deve pagar um valor de ingresso mais caro.

    class Estudante {
        public $nome;
        public $estudante;

        public function __construct($nome, $estudante) {
            $this->nome = $nome;
            $this->estudante = $estudante;
        }

        public function valorIngresso() {
            if(!$this->estudante) {
                echo "<br> $this->nome não é estudante, por isso pagará o valor total do ingresso, R$50,00. <br>";
            } else {
                echo "<br> $this->nome é estudante, por isso pagará metade do valor do ingresso, R$25,00. <br>";
            }
        }
    }

    $estudante1 = new Estudante("Vitor", true);
    $estudante2 = new Estudante("Paula", false);

    echo $estudante1->valorIngresso();
    echo $estudante2->valorIngresso();

    echo "<br><br> ------------------------------------------- <br><br>";
?>

<?php
// Operadores de Cast

    // Convertendo para Inteiro
    $valor1 = "123";
    $valorInteiro = (int) $valor1;
    echo "<br> $valorInteiro <br>"; // 123


    // Convertendo para Booleano
    $valor2 = 1;
    $valorBooleano = (bool) $valor2;
    echo "<br> $valorBooleano <br>"; // bool(true)


    // Convertendo para Ponto Flutuante
    $valor3 = "12.34";
    $valorFloat = (float) $valor3;
    echo "<br> $valorFloat <br>"; // 12.34


    // Convertendo para String
    $valor4 = 123;
    $valorString = (string) $valor4;
    echo "<br> $valorString <br>"; // 123


    // Convertendo para Array
    $valor5 = "123";
    $valorArray = (array) $valor5;
    echo "<br> $valorArray <br>"; // Array ( [0] => 123 )


    // Convertendo para Objeto
    $valor6 = "123";
    $valorObjeto = (object) $valor6;
    echo "<br> $valorObjeto->scalar <br>"; // Imprime: 123
    

    echo "<br><br> ------------------------------------------- <br><br>";
?>


<?php
// Uso do operador ternário no PHP
    $pessoaIdade = 21;

    $maioridade = ($pessoaIdade >= 18) ? "Já pode digirir, é maior de idade." : "Ainda não pode dirigir, é menor de idade.";
    
    echo "<br> $maioridade <br>";

    echo "<br><br> ------------------------------------------- <br><br>";


    function verificarParOuImpar($numeroParImpar) {
        return ($numeroParImpar % 2 == 0) ? "Par" : "Ímpar";
    }

    echo "<br>" . verificarParOuImpar(10) . "<br>"; // Imprime: Par
    echo "<br>" . verificarParOuImpar(7) . "<br>";  // Imprime: Ímpar

    echo "<br><br> ------------------------------------------- <br><br>";
?>