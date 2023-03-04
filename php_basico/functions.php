<?php

function sumar($arg1, $arg2){
    /* echo "Sumando valores\n";
    echo ($arg1 + $arg2) . "\n"; */

    return $arg1 + $arg2;

}

function restar($arg1, $arg2){
    /* echo "Restando valores\n";
    echo ($arg1 - $arg2) . "\n"; */
    return $arg1 - $arg2;
}

function getColor($option){
    switch($option){
        case 1: return "Red";
        case 2: return "Yellow";
        case 3: return "Green";
        default: return "Opcion no Valida";
    }
}

function operacion($arg1, $arg2, $func){
    return $func($arg1, $arg2);
}

