<?php
$edat=$_GET['maj_edat'];
$idioma=$_GET['llengua'];
$moneda=$_GET['mon'];
#                    ?? ''     si el valor existeix i no és null assigna el valor
#                                si no existeix, assigna una cadena buida ('')

# if (idioma=cat & moneda=eur) ----- t'oferim el vi "Les Terrasses" a un preu de 39€.

# 1h duració,     per consultar una cookie: $_COOKIE['nom']
setcookie("majoredat", $edat, time() + 3600);
setcookie("idioma", $idioma, time() + 3600);
setcookie("moneda", $moneda, time() + 3600);

if ($edat == "no") {
    if ($idioma == "cat") {
        echo "No podem vendre alcohol a menors d’edat.";
    } elseif ($idioma == "esp") {
        echo "No podemos vender alcohol a menores de edad.";
    } else {
        echo "We cannot sell alcohol to minors.";
    }
} else {
    $producte1 = "Les Terrasses";
    $producte2 = "Montsant";

    if ($moneda == "euro") {
        $preu1 = "39 €";
        $preu2 = "25 €";
    } elseif ($moneda == "lliure") {
        $preu1 = "34 £";
        $preu2 = "22 £";
    } else {
        $preu1 = "$42";
        $preu2 = "$27";
    }
  
    if ($idioma == "cat") {
        echo "T’oferim el vi \"$producte1\" a un preu de $preu1.<br>";
        echo "També tenim \"$producte2\" a $preu2.";
    } elseif ($idioma == "esp") {
        echo "Te ofrecemos el vino \"$producte1\" por $preu1.<br>";
        echo "También tenemos \"$producte2\" por $preu2.";
    } else {
        echo "We offer the wine \"$producte1\" for $preu1.<br>";
        echo "We also have \"$producte2\" for $preu2.";
    }
}
?>

