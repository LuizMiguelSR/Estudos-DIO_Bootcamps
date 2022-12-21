<?php

    namespace Luizm\DigitalCep;

use Luizm\DigitalCep\lm\ViaCep;

class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
        $get = (new ViaCep())->get($zipCode);

        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        return $get;
    }
}
