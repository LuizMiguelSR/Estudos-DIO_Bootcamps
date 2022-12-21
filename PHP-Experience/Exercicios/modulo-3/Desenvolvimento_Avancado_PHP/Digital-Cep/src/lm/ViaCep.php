<?php

namespace Luizm\DigitalCep\lm;

class ViaCep
{
    private $url = "https://viacep.com.br/ws/";
    private $zipCode;

    public function get(string $zipcode): array
    {

        $get = file_get_contents($this->url . $this->zipCode . "/json");

        return (array) json_decode($get);
    }
}
