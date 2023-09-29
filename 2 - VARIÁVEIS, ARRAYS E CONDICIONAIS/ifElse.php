<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula002 - Variáveis, Arrays e Condicionais</title>
</head>
<body>
    <?php

    /*

    Nullish coalescing operator () é nome dado ao procedimento de validação de variáveis.
    A forma mais atual de utilizar esse procedimento é:

    */

    $estuda = true;
    $trabalha = true;
    $nome = '';
    $sobrenome = '';
    $primeiro = null;
    $segundo = null;
    $terceiro = null;
    $quarto = null;
    $_POST = array(
        'nome' => 'João',
        'sobrenome' => null
    );

    if($estuda === false){
        echo 'Estuda';
    }else if($trabalha === true){
        echo 'Trabalha';
    }

    $nome = $_POST['nome'] ?? 'Não preenchido';
    $sobrenome = $_POST['sobrenome'] ?? 'Não preenchido';
    $resultado = $primeiro ?? $segundo ?? $terceiro ?? $quarto ?? 'Não preenchido';     //É possível realizar multiplas verificações em uma mesma linha

    echo "<br>{$resultado}<br>";
    echo ($estuda === true) ? 'Estuda' : 'Não estuda';
    echo "<br>{$nome} <br>{$sobrenome}<br>";

    /*

    Forma mais antiga:

        if ($_POST['nome'] <> null) {
            $nome = $_POST['nome'];
        }else{
            $nome = 'Não encontrado';
        }
        if ($_POST['sobrenome'] <> null) {
            $sobrenome = $_POST['sobrenome'];
        }else{
            $sobrenome = 'Não preenchido';
        }

    */

    ?>
</body>
</html>