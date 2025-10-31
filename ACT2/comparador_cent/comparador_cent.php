<?php
$numero1=$_GET['num1'];
$numero2=$_GET['num2'];

$res=100-$numero1
$ress=100-$numero2

if ($res > $ress) {
    echo "El número $numero2 està més aprop de 100";
} elseif ($ress > $res) {
    echo "El número $numero1 està més aprop de 100";
} else {
    echo "Els dos números instroduïts són iguals.";
}
?>