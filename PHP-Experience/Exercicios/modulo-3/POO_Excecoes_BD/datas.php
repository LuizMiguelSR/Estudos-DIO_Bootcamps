<?php 
    echo date('d/m/Y') . PHP_EOL;

    $data =  new DateTime();

    echo $data->format('d-m-Y') . PHP_EOL; // Mostrar data formatada
    echo $data->format('d-m-Y H:i:s') . PHP_EOL; // Mostrar data e hora formatada para 24 hrs

    /**
     * -> P representação de período: vem antes de dia, mês, ano e semana
     * Y anos
     * M meses
     * D dias
     * W semanas
     * 
     * -> T representação de tempo: vem antes de hora, minuto e segundo
     * H horas
     * M minutos
     * S segundos
     */

    $intervalo = new DateInterval('PT5M'); // Adiciona um período de 5 minutos
    $data->add($intervalo);

    var_dump($data);

    $intervalo = new DateInterval('P5Y10M5DT10H50M10S'); // Subtrai um período de 5 anos, 10 meses, 5 dias, 10 horas, 50 minutos e 10 segundos
    $data->sub($intervalo);

    var_dump($data);
?>