<?php
$preu=$_GET['preu'];
$iva=$_GET['iva'];
$resultat=$preu+($iva*$preu);

if ($iva==4) {
    echo '$resultat';
} elseif ($iva==10) {
    echo '$resultat';
} elseif ($iva==21) {
    echo '$resultat';
} else {
    echo "No s'ha seleccionat cap tipus d'iva";
}
?>