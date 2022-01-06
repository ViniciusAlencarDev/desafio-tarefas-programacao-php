<?php

//questao 3
$arraySorteado = [];
$numerosNaoRepetidos = [];
for($i = 0; $i < 20; $i++) {
    $numeroAleatorio = rand(1, 10);
    $arraySorteado[] = $numeroAleatorio;
}
foreach($arraySorteado as $item) {
    $count = 0;
    foreach($arraySorteado as $itemVerify)
    {
        if($itemVerify == $item)
            $count++;
    }
    if($count == 1)
        $numerosNaoRepetidos[] = $item;
}
echo "<pre>";
echo "Todos os numeros<br>";
var_dump($arraySorteado);
echo "Numeros que nao se repetem<br>";
var_dump($numerosNaoRepetidos);
echo "<pre>";
