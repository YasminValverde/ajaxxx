<?php

if (isset($_GET['numero1'])) {
    $quadrat = pow($_GET['numero1'], 2);
    echo $quadrat;
}

if (isset($_POST['numero2'])) {
    $sqrt = sqrt($_POST['numero2']);
    echo $sqrt;
}
?>
