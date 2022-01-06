<?php

// questao 2
function Primo($inicial, $final) {
    $numerosPrimos = [];
    $numerosPrimosString = "";
    for($i = $inicial; $i < $final; $i++) {
        $divisivelPorMaisNumeros = false;
        for($j = 2; $j < $i; $j++) {
            if($i % $j == 0) {
                $divisivelPorMaisNumeros = true;
                break;
            }
        }
        if(!$divisivelPorMaisNumeros) {
            $numerosPrimos[] = $i;
            if(sizeof($numerosPrimos) > 1)
                $numerosPrimosString .= ",";
            $numerosPrimosString .= $i;
        }
    }
    echo "Encontrados ".sizeof($numerosPrimos)." números primos, são eles".$numerosPrimosString;
}
Primo(10, 29);
