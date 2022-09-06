<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trabajo Practico 1</title>
  </head>
  <body>
    <h1>Trabajo Practico 1</h1>

    <br>
    <h2>Roman Gomez</h2>
  </br>

   <h3>Ejercicios</h3>
   <ol>
       <li> Ejercicio 1 </li>
        <br>  <?php
              print "Hola potrero Digital";
           ?></br>


      <li>Ejercicio 2</li>
    <br>
       <?php
        $texto_1 = "Hola potrero";
        echo $texto_1;


         ?></br>

         <li>Ejercicio 3</li>

      <?php
        $num_1 = 9;
        $num_2 = 7;
        echo "Variables Enteras: " . $num_1 . " y " . $num_2;
        print "<p>suma : $num_1 + $num_2 = " . $num_1 + $num_2 ."\n</p>";
        print "<p>resta : $num_1 - $num_2 = " . $num_1 - $num_2 . "\n</p>";
        print "<P>multiplicacion : $num_1 x $num_2 = " . $num_1 * $num_2 . "\n</p>";
        print "<p>division : $num_1 / $num_2 = " . $num_1 / $num_2 . "\n</p>";
        print "<p>resto entero : $num_1 % $num_2 = " . $num_1 % $num_2 . "\n</p>";


       ?>

       <li>Ejercicio 4</li>

       <?php
        $temperatura = 20 ;
        print "<p>temperatura: $temperatura °C = " . ($temperatura*(9/5)+32) . "°F\n</p>";
        print "<p>pasar a grados Fahrenheit: [(t °C x 9/5) + 32]\n</p>";

        ?>

        <li>Ejercicio 5</li>

           <?php
           $base = 18;
           $altura = 12;

           print "<p>lados del rectangulo: $base cm y $altura cm </p>\n";
           print "<p>perimetro: " . (2*$base)+(2*$altura) . "cm</p>\n";
           print "<p>area: " . $base * $altura . "cm^2</p>\n";

            ?>

            <li>Ejercicio 6</li>
        <br>
            <?php
              $radio = 30;

              print "el radio del circulo es: $radio cm </p>\n";
              define("pi" , 3.14159); //definimos una constante
              print "<p>El valor de pi es " . pi . "</p>\n";
              print "<p>Perimetro: " . 2*pi*$radio . " cm</p>\n";
              print "<p>Area: " . pi*($radio**2) . " cm^2</p>\n";


             ?>
         </br>



   </ol>
  </body>
</html>
