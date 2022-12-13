<?php 

    declare(strict_types=1);

    /** Criada a classe, Visibilidade e Propriedades da classe */
    class ContaBancaria 
    {                  
        private string $banco;
        private string $nomeTitular;
        private string $numeroDaAgencia;
        private string $numeroConta;
        private float $saldo;

        /** Criação de um método construtor */
        public function __construct
        (
            string $banco, 
            string $nomeTitular, 
            string $numeroDaAgencia, 
            string $numeroConta, 
            float $saldo
        ){
            $this->banco = $banco;
            $this->nomeTitular = $nomeTitular;
            $this->numeroDaAgencia = $numeroDaAgencia;
            $this->numeroConta = $numeroConta;
            $this->saldo = $saldo;
        }

        /** Criação de métodos com visibilidade pública */
        public function obterSaldo(): string
        {
            return 'Seu saldo atual é R$ '.$this->saldo;
        }

        public function depositar(float $valor): string 
        {
            $this->saldo += $valor;
            return 'Depósito de R$ ' . $valor . ' realizado';
        }

        public function sacar(float $valor): string
        {
            $this->saldo -= $valor;
            return 'Saque de R$ ' . $valor . ' realizado';
        }
    }

    /** Criação do objeto e atribuição deste objeto a uma variável */
    $conta1 = new ContaBancaria(
        /**
         * banco
         * nommeTitular
         * numeroAgencia
         * numeroConta
         * saldo
         */
        'Banco do Brasil',
        'Luiz Miguel',
        '8273',
        '573854-10',
        0
    ); 

    var_dump($conta1);

    $conta2 = new ContaBancaria(
        /**
         * banco
         * nommeTitular
         * numeroAgencia
         * numeroConta
         * saldo
         */
        'Caixa Economica',
        'Fulano da Silva',
        '84576',
        '5178912-10',
        300.00
    ); 

    var_dump($conta2);
    
    /*
    echo $conta->obterSaldo(); // retorna 0

    echo PHP_EOL;

    echo $conta->depositar(300.00);

    echo PHP_EOL;

    echo $conta->obterSaldo(); // retorna 300

    echo PHP_EOL;

    echo $conta->sacar(150.00);

    echo PHP_EOL;

    echo $conta->obterSaldo(); // retorna 150

    echo PHP_EOL; 
    */

?>