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

    A StdClass é uma classe predefinida do PHP. Ela é vazia, ou seja, não possui métodos nem propriedades. Ela é a classe padrão dos objetos que não são declarados, ou seja, quando você converte um array ou algum outro tipo para objeto, na verdade está criando um objeto da StdClass. É útil também utilizar a StdClass quando se deseja criar um objeto vazio e ir adicionando as propriedades conforme necessário.

    */

    $std = new \StdClass();
    $nome  = 'João Henrique';
    $idade = 22;
    $altura = 1.74;
    $cursos = array('PHP', 'Bootstrap', 'MySQL'); 

    echo '$nome: ' . gettype($nome) . '<br>';
    echo '$idade: ' . gettype($idade) . '<br>';
    echo '$altura: ' . gettype($altura) . '<br>';
    echo '$std: ' . gettype($std) . '<br>';
    echo '$cursos: ' . gettype($cursos) . '<br>';
    var_dump($idade == $altura);
    echo '<br>';
    var_dump($idade === $altura);
    echo '<br>';
    var_dump($idade <= $altura);
    echo '<br>';
    var_dump($idade >= $altura);
    echo '<br>';
    var_dump($idade < $altura);
    echo '<br>';
    var_dump($idade > $altura);
    echo '<br>';
    var_dump($idade !== $altura);

    ?>
</body>
</html>