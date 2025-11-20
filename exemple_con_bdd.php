<?php
    $nombre="Nicola";
    $email="nicola.renata@iticbcn.cat";
    $codigo"1234";

    $conexion=mysqli_connect("locahlost", "root", "", "base1")
        or die ("Problemes amb la connexió");

    mysqli_query($conexion,
            "insert insto alumnes(nombre, email, codigocurso)"
            . "value('$nombre', '$email', '$codigo')")
        or die("Problemes en el insert" . mysqli_error($conexion));

    mysqli_close($conexion)

    echo "El alumno fue dado de alta.";
?>