<!-- 003validacion.php: A partir del formulario anterior, introduce validaciones en HTML 
mediante el atributo required de los campos (uso los tipos adecuados para cada 
campo), y en comprueba los tipos de los datos y que cumplen los valores esperados 
(por ejemplo, en los checkboxes que los valores recogidos forman parte de todos los 
posibles). Puedes probar a pasarle datos erróneos vía URL y comprobar su 
comportamiento. Tip: Investiga el uso de la función filter_var. -->

<?php

    if (isset($_GET["nombre"])) {
        $nombre = $_GET["nombre"];

        echo $nombre." es válido<br>";
    }

    if (isset($_GET["apellidos"])) {
        $apellidos = $_GET["apellidos"];

        echo $apellidos." es válido<br>";
    }

    if (isset($_GET["email"])) {
        $email = $_GET["email"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $email." es válido<br>";
        }else{
            echo $email." no es válido<br>";
        }
    }

    if (isset($_GET["url"])) {
        $url = $_GET["url"];
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            echo $url." es válido<br>";
        }else{
            echo $url." no es válido<br>";
        }
    }

    if (isset($_GET["sexo"])) {
        $sexo = $_GET["sexo"];
        if ($sexo == "hombre" || $sexo == "mujer") {
            echo $sexo." es válido<br>";
        }else{
            echo $sexo." no es válido<br>";
        }
    }
    
    if (isset($_GET["convivientes"])) {
        $convivientes = $_GET["convivientes"];
        if (filter_var($convivientes, FILTER_VALIDATE_INT)) {
            echo $convivientes." es válido<br>";
        }else{
            echo $convivientes." no es válido<br>";
        }
    }

    if (isset($_GET["aficiones"])) {
        $aficiones = $_GET["aficiones"];
        $comprobar = false;

        for ($i=0; $i < count($aficiones); $i++) { 
            if ($aficiones[$i] == "videojuegos"|| $aficiones[$i]== "billar"|| $aficiones[$i]== "series"|| $aficiones[$i] == "festivales") {
                echo ($aficiones[$i])." es válido<br>";
            }else{
                echo ($aficiones[$i])." no es válido<br>";
            }
        }

    }

    if (isset($_GET["menu"])) {
        $menu = $_GET["menu"];
        if ($menu == "Star Wars" || $menu == "Harry Potter" || $menu == "El Señor De Los Anillos") {
            echo $menu." es válido<br>";
        }else{
            echo $menu." no es válido<br>";
        }
    }

?>
