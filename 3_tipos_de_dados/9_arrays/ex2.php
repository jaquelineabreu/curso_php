<?php

    $pessoa = [
        'nome' => 'Maria',
        'idade' => 20,
        'profissao' => 'Designer'
    ];

    print_r($pessoa);

    $nome = $pessoa['nome'];

    $maioridade = 18;

    echo "<br>";

    if($pessoa['idade'] >= $maioridade){
        echo "$nome é maior de idade";
    }