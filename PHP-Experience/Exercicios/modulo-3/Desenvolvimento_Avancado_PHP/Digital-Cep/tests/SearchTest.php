<?php 

    use PHPUnit\Framework\TestCase;
    use Luizm\DigitalCep\Search;

    class SearchTest extends TestCase
    {
        public function testGetAddressFromZipcodeDefaultUsage()
        {
            $resultado = new Search;
            $resultado = $resultado->getAddressFromZipcode('11713400');

            $esperado = [
                "cep" => "11713-400",
                "logradouro" => "Rua Oito",
                "complemento" => "",
                "bairro" => "Esmeralda",
                "localidade" => "Praia Grande",
                "uf" => "SP",
                "ibge" => "3541000",
                "gia" => "5587",
                "ddd" => "13",
                "siafi" => "6921"
            ];

            $this->assertEquals($esperado, $resultado);
        }
    }
?>