<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
           
        $entero = 5;
        $real = 1.5;
        $logico = true; //false
        $cadena = "Hola Mundo";
        
        
        print gettype($entero)."<br>";
        print gettype($real)."<br>";
        print gettype($logico)."<br>";
        print gettype($cadena)."<br>";
        print gettype($caracter)."<br>";
       

        
          
        ?>
    </body>
</html>
<?php
        $animal = array(
            array("Perro", "Gato"),
            array("Lombriz", "Burro"),
            array("Murciélago", "Cocodrilo")
        );
        print "Filas: " . count($animal) . '<br>';
        print "Columnas: " . count($animal[0]) . '<br>';
        for ($i = 0; $i < count($animal); $i++) {
            for ($j = 0; $j < count($animal[0]); $j++) {
                print $animal[$i][$j] . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            print '<br>';
        }
        ?>

<?php
        //$vector = array();
        //int[] vector = new int[10];
        $vector[0] = 1;
        $vector[1] = 2;
        $vector[2] = 3;
        $vector[3] = 4;
        $vector[4] = 5;
        $vector[5] = 6;
        $vector[6] = 7;
        $vector[7] = 8;
        $vector[8] = 9;
        $vector[9] = 10;
        print 'Longitud: ' . count($vector) . '<br>';
        foreach ($vector as $valor) {
            print "$valor<br>";
        }
        $vector[10] = 11;
        print $vector[10];
        ?>
<?php
        $animal = array(
            array("Perro", "Gato"),
            array("Lombriz", "Burro"),
            array("Murciélago", "Cocodrilo"),
            array("Tortuga", "Loro")
        );
        print "Filas: " . count($animal) . '<br>';
        print "Columnas: " . count($animal[0]) . '<br>';
        print "<table border='2' cellpadding='5'>";
        print '<tbody>';
        for ($i = 0; $i < count($animal); $i++) {
            print '<tr>';
            for ($j = 0; $j < count($animal[0]); $j++) {
                print '<td>'.$animal[$i][$j].'</td>';
            }
            print ' </tr>';
            print '<br>';
        }
        print '</tbody>';
        print '</table>';
        ?>

<?php
        print "<table border='2' cellpadding='5'";
        print '<tbody>';
        for ($i = 1; $i <= 12; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                print '<tr>';
                print '<td>' . $i . '</td>';
                print '<td>' . $j . '</td>';
                print '<td>' . $r = $j * $i . '</td>';
                print'</tr>';
            }
            print '<br>';
        }
        print '</tbody>';
        print '</table>';
        ?>
