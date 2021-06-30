<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 10</h1>
    <hr>
    <br>
    <p>
        Al ingresar el día y el número de un mes, devolver la estación del año de acuerdo a la siguiente tabla:
    </p>
    <br>
    <img src="images/coEjercicio10.jpg" alt="">
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="dia">Ingrese el día del mes: </label>
                </td>
                <td>
                    <input type="number" name="dia" min="1" max="31">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="mes">Ingrese el número del mes: </label>
                </td>
                <td>
                    <input type="number" name="mes" min="1" max="12">
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
                if(isset($_POST['dia']) && isset($_POST['mes'])) {
                    $dia = $_POST['dia'];
                    $mes = $_POST['mes'];
                    if (($mes == 12 && $dia >= 21 && $dia <= 31) || ($mes == 1 && $dia <= 31) || ($mes == 2 && $dia <= 29) || ($mes == 3 && $dia <= 20)) {
                        $msg = "Verano";
                    } else if (($mes == 3 && $dia <= 31) || ($mes == 4 && $dia <= 30) || ($mes == 5 && $dia <= 31) || ($mes == 6 && $dia <= 21)) {
                        $msg = "Otoño";
                    } else if (($mes == 6 && $dia <= 30) || ($mes == 7 && $dia <= 31) || ($mes == 8 && $dia <= 31) || ($mes == 9 && $dia <= 22)) {
                        $msg = "Invierno";
                    } else if (($mes == 9 && $dia <= 30) || ($mes == 10 && $dia <= 31) || ($mes == 11 && $dia <= 30) || $mes == 12){
                        $msg = "Primavera";
                    } else {
                        throw new Exception();
                    }
                    echo "<br>La estación del año es: ".$msg.".<br><br>";
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >