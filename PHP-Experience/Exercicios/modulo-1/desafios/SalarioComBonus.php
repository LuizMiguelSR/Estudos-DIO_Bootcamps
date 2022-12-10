<?php
    /**
     * Desafio
     * Com o objetivo de ver quanto os seus funcionários vendem, um empresário te contratou para desenvolver um programa que leia: o nome do vendedor, seu salário fixo, e o total de vendas que ele efetuou no mês, sendo este valor em dinheiro.
     * Um vendedor da loja ganha 15% de comissão sobre o valor das suas vendas, sendo assim, descubra quanto esse funcionário vai receber no final do mês, com duas casas decimais.
     * Entrada
     * O arquivo de entrada contém um texto (primeiro nome do vendedor) e 2 valores de dupla precisão (double) com duas casas decimais, representando o salário fixo do vendedor e montante total das vendas efetuadas por este vendedor, respectivamente.
     * Saída
     * Imprima o total que o funcionário deverá receber, conforme exemplo fornecido.
     */

    $nome = fgets(STDIN);
    $salario = fgets(STDIN);
    $totalVendas = fgets(STDIN);

    //TODO: Calcule e imprima o TOTAL, tendo em vista o padrão de Saída.
    $total = $salario + ($totalVendas * 0.15);
    echo "TOTAL = R$ ".number_format(round($total, 2, PHP_ROUND_HALF_EVEN), 2, '.', '');
?>