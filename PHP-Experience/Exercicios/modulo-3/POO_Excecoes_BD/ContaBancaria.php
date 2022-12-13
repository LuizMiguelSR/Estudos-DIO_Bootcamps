<?php 

    /** Criada a classe, Visibilidade e Propriedades da classe */
    class ContaBancaria {                       
        public $banco;
        public $nomeTitular = 'Luiz Miguel';
        public $numeroDaAgencia = '3467';
        public $numeroConta;
        public $saldo = 1000.00;
    }

    /** Criação do objeto e atribuição deste objeto a uma variável */
    $conta = new ContaBancaria(); 

    var_dump($conta->saldo);

    $conta->saldo = 0;

    var_dump($conta->saldo);
?>