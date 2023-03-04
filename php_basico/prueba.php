<?php
$valor = 5;

switch($valor){
    case 1:
        echo "Opcion 1";
        break;
    
    case 5:
        echo "Opcion 5";
        break;
    
    default: 
        echo "Opcion Invalida";
        break;
}

if($valor === 1){

} elseif ($valor === 5){

} else {

}


$counter = 1;

while($counter <= 10){
    echo $counter;
    $counter+=1;
    if($counter===5) break;
}

$counter = 1;
do {
    echo $counter;
    $counter+=1;
}while($counter <= 10);