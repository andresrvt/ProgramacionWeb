<!-- 004subida.html/.php: Crea un formulario que permita subir un archivo al servidor. 
Además del fichero, debe pedir en el mismo formulario dos campos numéricos que 
soliciten la anchura y la altura. Comprueba que tanto el fichero como los datos llegan 
correctamente. -->

<?php

    $alto = $_POST["alto"];
    $ancho = $_POST["ancho"];

    if (isset($_FILES['archivo'])) {
        $file_name = $_FILES['archivo']['name'];
        $file_size = $_FILES['archivo']['size'];
        $file_tmp = $_FILES['archivo']['tmp_name'];
        $file_type = $_FILES['archivo']['type'];

    }

    echo "El nombre del archivo es: " . $file_name . "<br>";
    echo "El tamaño del archivo es: " . $file_size . "<br>";
    echo "La ruta del archivo es: " . $file_tmp . "<br>";
    echo "El alto es: " . $alto . "<br>";
    echo "El ancho es: " . $ancho;

?>
