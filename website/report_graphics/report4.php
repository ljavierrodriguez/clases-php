<?php
//require_once('./database.php'); /* Informacion de Conexion a la base de datos ($conn) */

//$query = ""; /* Consulta para buscar el producto indicado */
//$results = mysqli_query($conn, $query); /* Ejecucion de la consulta SQL */
//$datos = mysqli_fetch_row($results); /* Resultado de la busqueda */
//$conn->close(); /* Cerramos la conexion a la base de datos */

$datos = [
    array(
        "totales_leads" => 1458,
        "agendados" => 127,
        "efectividad" => 8.71,
        "usuario" => "Laimarys Ramos"
    ),
    array(
        "totales_leads" => 733,
        "agendados" => 59,
        "efectividad" => 8.05,
        "usuario" => "Solange Estrada"
    ),
    array(
        "totales_leads" => 35,
        "agendados" => 24,
        "efectividad" => 68.57,
        "usuario" => "Jeanette"
    ),
    array(
        "totales_leads" => 1374,
        "agendados" => 114,
        "efectividad" => 8.30,
        "usuario" => "Nayade Araya"
    ),
    array(
        "totales_leads" => 446,
        "agendados" => 11,
        "efectividad" => 2.47,
        "usuario" => "Alejandra Rodriguez"
    )
];

$datasets = "";

for($i = 0; $i < count($datos); $i++){
    $colorR = rand(0, 255);
    $colorG = rand(0, 255);
    $colorB = rand(0, 255);
    $datasets .= "
    {
        label: '{$datos[$i]['usuario']}',
        data: [{$datos[$i]['totales_leads']}, {$datos[$i]['agendados']}, {$datos[$i]['efectividad']}],
        fill: false,
        borderColor: 'rgb({$colorR}, {$colorG}, {$colorB})',
        backgroundColor: 'rgb({$colorR}, {$colorG}, {$colorB})',
        tension: 0.1
      }
    ";
    if($i < count($datos)){
        $datasets .= ",";
    }
}
/* echo "<pre>";
echo $datasets;
echo "</pre>"; */
 
header('application/javascript');
echo "
const labels4 = ['Total Leads', 'Agendados', 'Efectividad (%)'];
const data4 = {
  labels: labels4,
  datasets: [{$datasets}]
};

const config4 = {
    type: 'bar',
    data: data4,
    options: {
        indexAxis: 'x'
    }
};

const ctx4 = document.getElementById('myChart4');
new Chart(ctx4, config4); 
";