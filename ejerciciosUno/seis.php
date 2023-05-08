<?php

/**
 * Con codigo HTML mostrar la tabla de multiplicar del 1 al 10
 */

 echo "<table border='1'>";
    
    echo "<thead>";
        for ($i=1; $i <= 10 ; $i++) { 
            echo "<th>Tabla del $i</th>";
        }
    echo "</head>";
    for ($x=1; $x <= 10; $x++) { 
        echo "<tr>";
        
        for ($i=1; $i <= 10 ; $i++) { 
            $resultado = $x*$i;
            echo "<td>$x x $i = $resultado</td>";
        }
        echo "</tr>";
    }
    
 echo "</table>";

?>
