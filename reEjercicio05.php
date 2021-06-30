<?php
    include 'header.php';
    include 'hdRepetitiva.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 05</h1>
    <hr>
    <br>
    <p>
        Dado un rango de números enteros m y n, muestre los números pares que exista en el rango, el numero m no puede ser mayor que n y si lo fuera mostrara un mensaje advirtiéndonos e invierte los valores.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="m">Ingrese el 1er número del rango: </label>
                </td>
                <td>
                    <input type="number" name="m">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="n">Ingrese el 2do número del rango: </label>
                </td>
                <td>
                    <input type="number" name="n">
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
                if(isset($_POST['m']) && isset($_POST['n'])) {
                    $m = $_POST['m'];
                    $n = $_POST['n'];
                    if (empty($m) || empty($n)) throw new Exception();
                    if ($m > $n) echo "El primer número no puede ser mayor. Por favor, invierta los valores. <br><br>"; 
                    else {
                        echo "Los números pares son: ";
                        for ($i=$m; $i <= $n; $i++) if($i % 2 == 0) echo $i. " ";
                        echo "<br><br>";
                    }
                }
            } catch (\Throwable) {
                echo "<span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >