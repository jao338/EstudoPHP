<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula002 - Variáveis, Arrays e Condicionais</title>
</head>
<body>
    <?php

    $nome  = 'João Henrique';
    $idade = 22;
    $frutas = ['Maçã', 'Banana'];   //Sintaxe alteranativa de declaração do tipo array
    $nomes = array(         
        'João' => 'Henrique',
        'Fabiano' => 'Pereira'
    );

    $resultado = compact('nome', 'idade');      //Método do PHP que converte uma variável em array associativo

    print_r($nomes);
    echo '<br><br>';

    echo $nomes['João'];    
    echo '<br><br>';

    print_r($resultado);
    echo '<br><br>';

    foreach($frutas as $value){
        echo $value.'<br>';
    }

    ?>
</body>
</html>