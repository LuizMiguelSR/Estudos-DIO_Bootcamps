<?php 
/**Desafio
Você terá o desafio de ler um valor inteiro correspondente à idade de uma pessoa em dias e informe-a em anos, meses e dias

Obs.: apenas para facilitar o cálculo, considere todo ano com 365 dias e todo mês com 30 dias. Nos casos de teste nunca haverá uma situação que permite 12 meses e alguns dias, como 360, 363 ou 364. 

Entrada
O arquivo de entrada contém um valor inteiro.

Saída
Imprima a saída conforme exemplo fornecido. */

    $idade = (int) fgets(STDIN);
    $data = array(0, 0, 0);

    while ($idade > 0) {
        switch($idade) {
            case ($idade < 30):
                $data[2] = $idade;
                $idade = 0;
            break;
            case ($idade < 365):
                $data[1] = (int) ($idade / 30);
                $idade %= 30;
            break;
            default:
                $data[0] = (int) ($idade / 365);
                $idade %= 365;
        }
    }

    echo $data[0] . " ano(s)\n";
    echo $data[1] . " mes(es)\n";
    echo $data[2] . " dia(s)\n";
?>