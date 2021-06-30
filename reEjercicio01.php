<?php
    include 'header.php';
    include 'hdRepetitiva.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 01</h1>
    <hr>
    <br>
    <p>
        Desarrollar un programa que muestre por consola los N primeros números naturales y calcule la sumas de todos los números pares e impares:
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="num">Ingrese el número: </label>
                </td>
                <td>
                    <input type="number" name="num" min="1">
                </td>
            </tr>
        </table>
        <br>
        </fieldset>
        <br>
        <input type="submit" value="Calcular" name="btnenviar" />
        <br><br>
        <?php   
            try {
                if(isset($_POST['num'])) {
                    $num = $_POST['num'];
                    if (empty($num)) throw new Exception();
                    $sumi = 0;
                    $sump = 0;
                    for ($i=1; $i <= $num; $i++) { 
                        echo $i. " ";
                        if($i % 2 == 0) $sump = $sump + $i;
                        else $sumi = $sumi + $i;
                    }
                    echo "<br><br>La suma de todos los números pares es: " .$sump. ".<br>";
                    echo "<br>La suma de todos los números impares es: " .$sumi. ".<br><br>";
                }
            } catch (\Throwable) {
                echo "<span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >