<?php
$musica=$_GET['mus'];
if ($musica=='rock') {
    echo 'Gènere musical contemporani encaminat a englobar cadascun dels 
    diversos gèneres musicals derivats del rock and roll.';
} elseif ($musica=='dancehall') {
    echo 'El dancehall pren el seu nom de les pistes de ball jamaicanes, 
    on els enregistraments jamaicans en discos de vinil es reproduïen
     als sound systems locals';
} elseif ($musica=='salsa') {
    echo '';
} elseif ($musica=='makina') {
    echo 'La música màkina es caracteritza pel seu ritme ràpid de 150
    a 190 ppm i melodies alegres.';
} elseif ($musica=='jazz') {
    echo 'Nascut a nova Orleans a principis de la dècada del 1900, 
    barreja una rítmica pròpia dels afroamericans dels EEUU amb 
    una instrumentació i una tímbrica genuïnes de les bandes del carrer';
} else {
    echo 'No has escollit cap genere musical.';
}
?>