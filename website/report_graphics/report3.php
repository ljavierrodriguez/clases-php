<?php
header('application/javascript');
echo "
const labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'];
const data = {
  labels: labels,
  datasets: [{
    label: 'Hugo',
    data: [65, 59, 80, 81, 56, 55, 40],
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    backgroundColor: 'rgb(75, 192, 192)',
    tension: 0.1
  },
  {
    label: 'Paco',
    data: [15, 29, 40, 21, 56, 95, 40],
    fill: false,
    borderColor: 'rgb(75, 100, 122)',
    backgroundColor: 'rgb(75, 100, 122)',
    tension: 0.1
  },
  {
    label: 'Luis',
    data: [135, 22, 10, 41, 26, 55, 90],
    fill: false,
    borderColor: 'rgb(222, 100, 176)',
    backgroundColor: 'rgb(222, 100, 176)',
    tension: 0.1
  },
  {
    label: 'Mickey',
    data: [135, 22, 10, 41, 26, 55, 90],
    fill: false,
    borderColor: 'rgb(122, 120, 246)',
    backgroundColor: 'rgb(122, 120, 246)',
    tension: 0.1
  }
  
  ]
};

const config = {
    type: 'bar',
    data: data,
    options: {
        indexAxis: 'x'
    }
};

const ctx3 = document.getElementById('myChart3');
new Chart(ctx3, config); 
";
