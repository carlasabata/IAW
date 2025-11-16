<?php
# if comptadors visites = 5 desc=20%
# "                     " 10 desc = 50 + no ha fet servir el desc previament

# iniciar sessió per poder utilitzar la variable de sessió
session_start();

# comprovar si la variable de sessió ja existeix
if (!isset($_SESSION['comptador'])) {
    $_SESSION['comptador'] = 1; // Primera visita
} else {
    $_SESSION['comptador']++; // Incrementar el comptador
}

$missatge="";
# descompte segons visites
if ($_SESSION['visites'] == 5 && !$_SESSION['usades']) {
    $missatge = "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte.";
} elseif ($_SESSION['visites'] == 10 && !$_SESSION['usades']) {
    $missatge = "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte.";
}
?>