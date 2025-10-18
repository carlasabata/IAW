<?php
    if (date('H')>=14 && date('H')<=5) {
        echo 'Bon dia';
    } elseif (date('H')>=19 && date('H')<14) {
        echo 'Bona tarda';
    } else {
        echo 'Bona nit';
    }
    echo '<br>';
    echo 'Són les ' . date("H") . ' hores.';
?>