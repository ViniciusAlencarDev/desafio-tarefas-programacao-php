<?php

// questao 1
function SeculoAno($ano) {
    $resultadoAno = ($ano / 100);
    $seculo = floor($resultadoAno + 1);
    if($resultadoAno == round($resultadoAno))
        $seculo -= 1;
    return $seculo;
}
print_r(SeculoAno(1905)."<br/>");
print_r(SeculoAno(1700)."<br/>");
