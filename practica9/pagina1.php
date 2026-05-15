<?php

$preg = $_GET['preg'];

$host = "localhost";
$user = "cfgs";
$pw = "sol19";
$db = "cfgs";

$conexio = new mysqli($host, $user, $pw, $db);

#Comprovar la connexió
if ($conexio->connect_error) {
    printf("Connexió fallida: %s", $conexio->connect_error);
    exit();
}

#Actualitzar la taula enquesta
if ($preg == 1) {
    $conexio->query("update enquesta set pregunta1=pregunta1+1 where codi=1") || die("Error al actualitzar dades");
} elseif ($preg == 2) {
    $conexio->query("update enquesta set pregunta2=pregunta2+1 where codi=1") || die("Error al actualitzar dadess");
} elseif ($preg == 3) {
    $conexio->query("update enquesta set pregunta3=pregunta3+1 where codi=1") || die("Error al actualitzar dades");
} else {
    die("selecció enquesta incorrecta!!");
}

#Retornar vots
$consulta = $conexio->query("SELECT * FROM enquesta WHERE codi=1");
$reg = $consulta->fetch_object();

echo "<canvas id='myChart' class='chart'></canvas>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['PHP', 'ASP', 'JSP'],
                    datasets: [{
                        label: 'Resultats',
                        data: [$reg->pregunta1,$reg->pregunta2,$reg->pregunta3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{

                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Número de vots'
                            },

                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    },
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        </script>";
?>