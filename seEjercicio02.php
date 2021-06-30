<?php
    include 'header.php';
    include 'hdSecuencial.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 02</h1>
    <hr>
    <br>
    <p>
       Realizar una Aplicación Web que permita leer dos números enteros y encontrar:
    </p>
    <br>
    <ul>
            <li>La suma de sus cuadrados.</li>
            <li>La suma del doble del primero más el cuadrado del segundo.</li>
        </ul>
    <br>
    <form method="POST">
        <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="n1">Ingrese el primer número entero: </label>
                </td>
                <td>
                    <input type="number" name="n1">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="n2">Ingrese el segundo número entero: </label>
                </td>
                <td>
                    <input type="number" name="n2">
                </td>
            </tr>
        </table>
        <br>
        </fieldset>
        <br>
        <input type="submit" value="Calcular" name="btnenviar" />
        <br>
        <?php
            try {
                if(isset($_POST['n1']) && isset($_POST['n2']) ) {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $sumcua = pow($n1, 2) + pow($n2, 2);
                    $sumdocu = 2 * $n1 + pow($n2, 2);
                    echo "<br>La suma de sus cuadrados es: " .$sumcua. ".<br>";
                    echo "<br>La suma del doble del 1ro y el cuadrado del 2do es: " .$sumdocu. ".<br><br>";
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >