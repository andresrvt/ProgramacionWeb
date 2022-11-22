<!-- 001server.php: igual que el ejemplo visto en los apuntes, muestra los valores de 
$_SERVER al ejecutar un script en tu ordenador.
Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
Prepara un formulario (001post.html) que haga un envío por POST y compruébalo de 
nuevo.
Crea una página (001enlace.html) que tenga un enlace a 001server.php y comprueba 
el valor de HTTP_REFERER. -->

<?php 
    echo $_SERVER["PHP_SELF"]."<br>";
    echo $_SERVER["SERVER_SOFTWARE"]."<br>";
    echo $_SERVER["SERVER_NAME"]."<br>";
    echo $_SERVER["REQUEST_METHOD"]."<br>";
    echo $_SERVER["REQUEST_URI"]."<br>";
    echo $_SERVER["QUERY_STRING"]."<br>"; /* Al pasarle valores por URL, nos devolverá dicho valores. */
    echo $_SERVER["HTTP_REFERER"]."<br>"; 

    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $ciudad = $_POST["ciudad"];
    $cp = $_POST["cp"];

    echo "$nombre<br>";
    echo "$apellidos<br>";
    echo "$email<br>";
    echo "$ciudad<br>";
    echo "$cp";
?>
