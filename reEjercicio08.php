<?php
    include 'header.php';
    include 'hdRepetitiva.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 08</h1>
    <hr>
    <br>
    <p>
        Dado un número entero, determinar cuántos dígitos tiene, y la suma de ellos.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="num">Ingrese el número entero: </label>
                </td>
                <td>
                    <input type="number" name="num">
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
                    echo "La cantidad de dígitos es: " .strlen($num);
                    echo "<br><br>La suma de sus dígitos es: " .array_sum(str_split($num)). "<br><br>";
                }
            } catch (\Throwable) {
                echo "<span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >