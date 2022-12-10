<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $string = "Curso na Dio";
        $numeros = 50;
        $array = array("PHP", "HTML", "CSS", "JAVA");
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/Y H:i:s");
    ?>
    <h4>
        Essa é uma variável do tipo string, para implementar uma variável do tipo string utilizamos uma aspas ('') ou duplas ("")
        :
        <?php 
            echo $string;
        ?>
    </h4>
    <h4>
        Essa é uma variável do tipo números / Integer,
        para implementar essa variável utilizamos somente os números desta forma:
        <?php 
            echo $numeros;
        ?>
    </h4>
    <h4>
        Essa é uma variável com um array, para implementar um array em uma variável utilizamos desta forma:
        <?php 
            print_r($array);
        ?>
    </h4>
    <h4>
        Vamos agora implementar uma variável do tipo datas, para implementar a variável com datas utilizamos uma função prórpria do PHP desta forma:
        <?php
            print $data;
        ?>
    </h4>
</body>
</html>