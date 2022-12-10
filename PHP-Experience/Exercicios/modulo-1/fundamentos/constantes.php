<?php 
    /* Entregador de delivery ganha 80 reais por dia porém ainda tem as gorjetas do clientes */

    define("valorDia", "80");
    define("gorjetas", "40");

    echo valorDia + gorjetas;

    define("gorjetas", "15");
    echo valorDia + gorjetas;
?>