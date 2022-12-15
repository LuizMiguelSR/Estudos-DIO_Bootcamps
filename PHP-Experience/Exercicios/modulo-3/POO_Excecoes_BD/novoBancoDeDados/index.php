<?php 
    require 'produto.php';

    $produto = new Produto();

    switch ($_GET['operacao']) {

        case 'list':

            echo '<h3>Produtos: </h3>';

            foreach ($produto->list() as $value) {
                echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
            }

            break;

        case 'insert':

            $status = $produto->insert('Produto teste 1 inserido');

            if (!$status) {
                echo "Não foi possível encontrar a operação!";
                return false;
            }

            echo "Registro inserido com sucesso";

            break;

        case 'update':

            $status = $produto->update('Produto teste 1 alterado', 1);

            if (!$status) {
                echo "Não foi possível encontrar a operação!";
                return false;
            }

            echo "Registro atualizado com sucesso";

            break;

        case 'delete':

            $status = $produto->delete(1);

            if (!$status) {
                echo "Não foi possível encontrar a operação!";
                return false;
            }

            echo "Registro removido com sucesso";

            break;
    }
?>