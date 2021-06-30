<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 03</h1>
    <hr>
    <br>
    <p>
        Elabore un programa que acepte un número del año mayor a 2000 y muestre "PRESENTE" si el número es el año actual, "PASADO" si es menor o "FUTURO" si es mayor, en razón al año actual.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="anio">Ingrese el número del año: </label>
                </td>
                <td>
                    <input type="number" name="anio" min="2001">
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
                if(isset($_POST['anio'])) {
                    $anio = $_POST['anio'];
                    if (empty($anio)) {
                        throw new Exception();
                    } else if ($anio == date('Y')) {
                        echo "<br>PRESENTE.<br><br>";
                    } else if ($anio < date('Y')) {
                        echo "<br>PASADO.<br><br>";
                    } else if ($anio > date('Y')) {
                        echo "<br>FUTURO.<br><br>";
                    }
                } 
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >