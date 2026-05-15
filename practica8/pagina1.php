<?php

$nom = '';
$cognom = '';
$direccio = '';
if ($_GET['dni'] == '1') {
    $nom = 'Juan';
    $cognom = 'Rodriguez';
    $direccio = 'Colon 123';
}
if ($_GET['dni'] == '2') {
    $nom = 'Ana';
    $cognom = 'Maldonado';
    $direccio = 'Lima 245';
}
if ($_GET['dni'] == '3') {
    $nom = 'laura';
    $cognom = 'Pueyrredon';
    $direccio = 'Laprida 785';
}

$data = [
    'nom' => $nom,
    'cognom' => $cognom,
    'direccio' => $direccio
];

echo json_encode($data);
?>
