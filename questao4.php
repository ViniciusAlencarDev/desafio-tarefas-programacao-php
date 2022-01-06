<?php

// questao 4
function SequenciaCrescente($array) {
    if(count($array) == 1) {
        return true;
    }
    $contador = 0;
    for($i = 0; $i < sizeof($array); $i++) {
        $verificarArray = $array;
        unset($verificarArray[$i]);
        $itemAnterior = null;
        $itemOrdemCrescente = true;
        foreach($verificarArray as $item) {
            if($itemAnterior == null)
                $itemAnterior = $item;
            else {
                if($item <= $itemAnterior) {
                    $itemOrdemCrescente = false;
                    break;
                }
            }
            $itemAnterior = $item;
        }
        if($itemOrdemCrescente)
            $contador++;
    }
    return $contador > 0;
}
echo "<pre>";
// var_dump(SequenciaCrescente([1]));
var_dump(SequenciaCrescente([1, 3, 2, 1]));
var_dump(SequenciaCrescente([1, 3, 2]  ));
var_dump(SequenciaCrescente([1, 2, 1, 2]  ));
var_dump(SequenciaCrescente([3, 6, 5, 8, 10, 20, 15] ));
var_dump(SequenciaCrescente([1, 1, 2, 3, 4, 4] ));
var_dump(SequenciaCrescente([1, 4, 10, 4, 2] ));
var_dump(SequenciaCrescente([10, 1, 2, 3, 4, 5] ));
var_dump(SequenciaCrescente([1, 1, 1, 2, 3] ));
var_dump(SequenciaCrescente([0, -2, 5, 6] ));
var_dump(SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6] ));
var_dump(SequenciaCrescente([40, 50, 60, 10, 20, 30] ));
var_dump(SequenciaCrescente([1, 1] ));
var_dump(SequenciaCrescente([1, 2, 5, 3, 5] ));
var_dump(SequenciaCrescente([1, 2, 5, 5, 5] ));
var_dump(SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1] ));
var_dump(SequenciaCrescente([1, 2, 3, 4, 3, 6] ));
var_dump(SequenciaCrescente([1, 2, 3, 4, 99, 5, 6] ));
var_dump(SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45] ));
var_dump(SequenciaCrescente([3, 5, 67, 98, 3] ));
echo "</pre>";
