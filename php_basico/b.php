<?php 

require('a.php'); // obligatoriamente debe existir el archivo
//include('c.php'); // continua su ejecucion aunque el archivo no exista

require_once('a.php');
//include_once('c.php');
goto a;

echo $valor;

echo DB_HOST;




a:
echo "Hola Mundo no quiero trabajar";