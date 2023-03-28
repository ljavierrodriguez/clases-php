<?php
$datos = [
    (object) array("name" => "Hugo", "totales" => 10, "actives" => 3, "inactives" => 3, "canceleds" => 4),
    (object) array("name" => "Paco", "totales" => 14, "actives" => 5, "inactives" => 6, "canceleds" => 3),
    (object) array("name" => "Luis", "totales" => 8, "actives" => 6, "inactives" => 1, "canceleds" => 1)
];

$labels = "'totales','actives', 'inactives', 'canceled'";

$t1 = 0;
$t2 = 0;
$t3 = 0;
$t4 = 0;

foreach ($datos as $info) {
    //print_r($info);
    $t1 += $info->totales;
    $t2 += $info->actives;
    $t3 += $info->inactives;
    $t4 += $info->canceleds;
}


header('application/javascript');
echo "
const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: [{$labels}],
            datasets: [{
                label: '# de Pedidos',
                data: [{$t1},{$t2},{$t3},{$t4}],
                borderWidth: 1
            }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
    }
});
";
