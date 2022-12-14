<?php
    /* Sem tratamento de Exceções
    function validarUsuario(array $usuario)
    {
        if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
            return false;
        }

        return true;
    }

    $usuario = [
        'codigo' => 1,
        'nome' => '',
        'idade' => 57,
    ];

    $usuarioValido = validarUsuario($usuario);

    if (!$usuarioValido) {
        echo "Usuário Inválido!";
        return false;
    }

    echo "\n... executando ..\n";
    */

    /* Com lançamento de exceções
    function validarUsuario(array $usuario)
    {
        if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
            throw new Exception("Campos obrigatorios não foram preenchidos!");
        }

        return true;
    }

    $usuario = [
        'codigo' => 1,
        'nome' => '',
        'idade' => 57,
    ];

    validarUsuario($usuario);

    echo "\n... executando ..\n";
    */

    function validarUsuario(array $usuario)
    {
        if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
            throw new Exception("Campos obrigatorios não foram preenchidos!");
        }

        return true;
    }

    $usuario = [
        'codigo' => 1,
        'nome' => 'Luiz Miguel',
        'idade' => 57,
    ];

    try {
        $status = validarUsuario($usuario);
    } catch (Exception $e) {
        echo $e-> getMessage();
    } finally {
        echo "Status da Operação: " . (int)$status; // cast
        die();
    }
    

    echo "\n... executando ..\n";
?>