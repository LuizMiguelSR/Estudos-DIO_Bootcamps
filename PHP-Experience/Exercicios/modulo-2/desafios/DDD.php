<?php 
/**Desafio
Leia um número inteiro que representa um código de DDD para discagem interurbana. Em seguida, informe à qual cidade o DDD pertence, considerando a tabela abaixo:
Se a entrada for qualquer outro DDD que não esteja presente na tabela acima, o programa deverá informar:
DDD nao cadastrado

Entrada
A entrada consiste de um único valor inteiro.

Saída
Imprima o nome da cidade correspondente ao DDD existente na entrada. Imprima DDD nao cadastrado caso não existir DDD correspondente ao número digitado. */

    $ddd = fgets(STDIN);

    if($ddd == 61){
        echo "Brasilia\n";
    }else if($ddd == 71){
        echo "Salvador\n";
    }else if($ddd == 11){
        echo "Sao Paulo";
    }else if($ddd == 21){
        echo "Rio de Janeiro";
    }else if($ddd == 32){
        echo "Juiz de Fora";
    }else if($ddd == 19){
        echo "Campinas";
    }else if($ddd == 27){
        echo "Vitoria";
    }else if($ddd == 31){
        echo "Belo Horizonte";
    }else{
        echo "DDD nao cadastrado\n";
    }
?>