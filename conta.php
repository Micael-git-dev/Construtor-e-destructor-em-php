<!DOCTYPE html>
<html>
    <body>

    <?php

        class conta {
            private $titular;
            private $saldo;
            
            public function __construct ($titular, $saldoInicial) {

                $this->titular = $titular;
                $this->saldo = $saldoInicial;

                echo "Conta criada para $titular com saldo inicial de R$ $saldoInicial <br>";
            }

            // Método para depositar dinheiro
            public function depositar ($quantia) {
                if ($quantia > 0) {
                    $this->saldo+= $quantia;
                    echo "Depositado: $quantia <br>";
                }
                else {
                    "quantia Inválida para deposito <br>";
                }
            }
            public function sacar ($quantia) {
                if ($quantia > 0 && $quantia <=$this->saldo){
                $this->saldo -= $quantia;
                echo "Sacado: R$ $quantia <br>";
                }
                else {
                    echo "Quantia inválida ou saldo insuficiente <br>";
                }
            }

            // Método para obter saldo atual
            public function obtersaldo () {
                return $this->saldo;
            }

            // Método para obter o saldo
            public function __destruct () {
                echo "Conta de $this->titular encerrar <br>";
            }

        }
            // testando a classe banco
            $conta = new conta("Maria", 1000);
            $conta->depositar(500);
            $conta->sacar(200);
            echo "Saldo atual: R$ " . $conta->obtersaldo() . "<br>";

    ?>

    </body>
</html>