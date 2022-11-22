<!-- 005subidaImagen.php: Modifica el ejercicio anterior para que únicamente permita 
subir imágenes (comprueba la propiedad type del archivo subido). Si el usuario 
selecciona otro tipo de archivos, se le debe informar del error y permitir que suba un 
nuevo archivo.
En el caso de subir el tipo correcto, visualizar la imagen con el tamaño de anchura y 
altura recibido como parámetro. -->

<?php

    $alto = $_POST["alto"];
    $ancho = $_POST["ancho"];

    if (isset($_FILES['archivo'])) {
        $file_name = $_FILES['archivo']['name'];
        $file_size = $_FILES['archivo']['size'];
        $file_tmp = $_FILES['archivo']['tmp_name'];
        $file_type = $_FILES['archivo']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $extensions = array("jpeg","jpg","png");
        if (in_array($file_ext,$extensions) === false) {
            $error = "Extensión no permitida. Prueba con una imagen";
        }

        if (empty($errors) === true) {
            move_uploaded_file($file_tmp,"/005/obiwan.jpg".$file_name);
            echo "La imagen se ha guardado correctamente";
        }else{
            echo $error;
        }
    }

    echo "<br>El nombre del archivo es: " . $file_name . "<br>";
    echo "El tamaño del archivo es: " . $file_size . "<br>";
    echo "La ruta del archivo es: " . $file_tmp . "<br>";
    echo "El alto es: " . $alto . "<br>";
    echo "El ancho es: " . $ancho;

?>
