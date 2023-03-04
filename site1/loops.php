<?php


for ($counter = 0; $counter < 10; $counter++) {
    echo $counter;
}

$counter = 1;
while ($counter <= 10) {
    echo $counter;
    $counter++;
}

echo "<br>";

$nombres = ["Hugo", "Paco", "Luis"];

$counter=1;
foreach($nombres as $nombre){
    echo $counter;
    echo $nombre."<br />";
    $counter++;
}

echo $counter;