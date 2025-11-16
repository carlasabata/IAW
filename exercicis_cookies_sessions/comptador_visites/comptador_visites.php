<?php
$cookie_name = "comptador_visites";

# comprovar si la cookie ja existeix
if (isset($_COOKIE[$cookie_name])) {
    $visites = $_COOKIE[$cookie_name] + 1;
} else {
    $visites = 1;
}

# Actualitzem la cookie (caduca en 1 dia)
setcookie($cookie_name, $visites, time() + 86400, "/");

?>