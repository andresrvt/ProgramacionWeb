<!-- 002formulario.html/.php: Crea un formulario que solicite:
Nombre y apellidos. Email. URL página personal. Sexo (radio). Número de convivientes 
en el domicilio. Aficiones (checkboxes) – poner mínimo 4 valores.
Menú favorito (lista selección múltiple) – poner mínimo 4 valores.
Muestra los valores cargados en una tabla-resumen. -->

<?php 
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $sexo = $_POST["sexo"];
    $convivientes = $_POST["convivientes"];
    $aficiones = $_POST["aficiones"];
    $menu = $_POST["menu"];

    echo "$nombre<br>";
    echo "$apellidos<br>";
    echo "$email<br>";
    echo "$url<br>";
    echo "$sexo<br>";
    echo "$convivientes<br>";

    for ($i=0; $i < count($aficiones); $i++) { 
        echo "$aficiones[$i]-";
    }
    
    echo "$menu<br>";



?>

<table border="3px solid">
        <thead>
            <tr colspan="4">Lista de productos
               <th>Nombre</th> 
               <th>Apellidos(€)</th> 
               <th>Email</th> 
               <th>Url Personal</th> 
               <th>Sexo</th> 
               <th>convivientes</th>
               <th>Menú</th>
               <th colspan="4">Aficiones</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    
                <?php
                    echo "<td>".$nombre. "</td>";
                    echo "<td>".$apellidos. "</td>";
                    echo "<td>".$email. "</td>";
                    echo "<td>".$url. "</td>";
                    echo "<td>".$sexo. "</td>";
                    echo "<td>".$convivientes. "</td>";
                    echo "<td>".$menu. "</td>";
                    for ($i=0; $i < count($aficiones); $i++) { 
                        
                        echo "<td>".$aficiones[$i]. "</td>";
                        }
                ?>
                </tr>
            
            </tbody>
    </table>
