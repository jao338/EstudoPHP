<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula002 - Variáveis, Arrays e Condicionais</title>
</head>
<body>
    <?php

    define('PI', 3.14);     // Sintaxe básica da declaração de uma constante
    $nome  = 'João Henrique';   //Variável do tipo string
    $idade = 22;    //Variável do tipo inteiro
    $altura = 1.74;     //Variável do tipo float
    $cursos = array('PHP', 'Bootstrap', 'MySQL');   //Variáveis do tipo array
    $frutas = ['Maçã', 'Banana'];   //Sintaxe alteranativa de declaração do tipo array

    //Sintaxe de declaração de um array associativo, onde usa-se 'strings' como identificadores ao invés de 'inteiros'
    $nomes = array(         
        'Primeiro nome' => 'João',
        'Segundo nome' => 'Paulo'
    );

    echo $nome.'<br>'.$idade.'<br>'.$altura.'<br><br>';
    print_r($cursos);
    echo '<br><br>';

    foreach($nomes as $value){
        echo $value.'<br>';
    }

    ?>
</body>
</html>