<?php
    if (date('H')>=19 && date('H')<14) {
        echo 'Bona tarda';
    } elseif (date('H')>=14 && date('H')<=5) {
        echo 'Bon dia';
    } else {
        echo 'Bona nit';
    }
    echo '<br>';
    echo 'Són les ' . date("H") . ' hores.';
?>