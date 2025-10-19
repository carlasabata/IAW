<?php
$moneda=$_GET['moneda'];
$num=$_GET['num'];
$canvi_eur_dol=1.17;
$canvi_dol_eur=0.86;

if ($moneda == 'euros') {
    $conversio=$num*$canvi_eur_dol;
    echo 'El canvi de' . $num . '€ a dollars és de' . $conversio . '\$.';
} else {
    $conversio=$num*$canvi_dol_eur;
    echo 'El canvi de' . $num . '\$ a euros és de' . $conversio . '€.';
}
?>