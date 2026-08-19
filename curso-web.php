<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Clase 1</h1>

        <?php 
        $nombre = "juana";
        echo "<h2>hola $nombre. </h2>"
        ?>
        
        <?php
       
        $dia = date('l');
        $hora = date('H:i');
        echo "Hoy es, $dia y son las $hora horas.";
        ?>

        <?php
        $a = 5;
        $b = 3;

        echo "<br><br>La suma de las dos variables es: ". $a + $b; // Suma: 13
        echo "<br>La resta de las dos variables es: ". $a - $b; // Resta: 7
        echo "<br>La multiplicación de las dos variables es: ". $a * $b; // Multiplicación: 30
        echo "<br>La división de las dos variables es: ". $a / $b; // División: 3.333...
        
        ?>
<p>&nbsp;</p>
        
            <?php
            $a = 5;
            $b = "5";

            var_dump($a == $b); 
            echo "<br>"; // true (compara valor)
            var_dump($a != $b); 
            echo "<br>"; // false
            var_dump($a > 6);  
            echo "<br>"; // true
            var_dump($a <= 5); // true
            ?>
       
       <p>&nbsp;Operadores lógicos</p>
       <?php
        $esMayor = true;
        $tienePermiso = true;

        var_dump($esMayor && $tienePermiso); 
        var_dump($esMayor || $tienePermiso); 
        var_dump(!$esMayor);                 
       
       ?>




        <p>&nbsp;</p>

        <?php
        $nombre = "Florencia";
        $saludo = "Hola, " . $nombre . "!";

        echo $saludo; // Hola, Florencia!
        echo "<br><br>"
        ?>

<!-- Estructuras de Control: If, While y For -->
       
       <?php
            $nota = 10;
            
            if ($nota >= 9) {
                echo "Excelente 💯";

            } elseif ($nota >= 6) {
                echo "Aprobado ✅";

            } elseif ($nota >= 4) {
                echo "Regular ⚠️";

                } else {
                    echo "Desaprobado ❌";
            }
        ?>

<p>&nbsp;</p>
<!-- while -->

        <?php
        $contador = 1;

        while ($contador <= 4) {
            echo "Número (while): $contador<br>";
            $contador++;
        }
        ?>

<p>&nbsp;</p>
<!-- for -->
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Número for: $i<br>";
    }
    ?>

    <!-- arrays -->
    <p>&nbsp;</p>

    <p>arreglos</p>
    
         <?php
        $frutas = ["Manzana", "Banana", "Naranja", "Pera" , "Melón" , "Sandía", "Cereza"];

        foreach ($frutas as $fruta) {
            echo "Fruta: $fruta<br>";
        }
        ?>



</body>
</html>