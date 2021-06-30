<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 11</h1>
    <hr>
    <br>
    <p>
        Programa que permita el ingreso del día y mes de nacimiento, indique a que signo zodiacal que corresponde según la imagen:
    </p>
    <br>
    <img src="images/coEjercicio11.jpg" alt="Signos Zodiacales">
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="dia">Ingrese el día de nacimiento: </label>
                </td>
                <td>
                    <input type="number" name="dia" min="1" max="31">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="mes">Ingrese el mes de nacimiento: </label>
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
                    if (($mes == 12 && $dia >= 22 && $dia <= 31) || ($mes == 1 && $dia <= 19)) {
                        $msg = "Capricornio";
                    } else if (($mes == 1 && $dia >= 20 && $dia <= 31) || ($mes == 2 && $dia <= 17)) {
                        $msg = "Acuario";
                    } else if (($mes == 2 && $dia >= 18 && $dia <= 29) || ($mes == 3 && $dia <= 19)) {
                        $msg = "Piscis";
                    } else if (($mes == 3 && $dia >= 20 && $dia <= 31) || ($mes == 4 && $dia <= 19)) {
                        $msg = "Aries";
                    } else if (($mes == 4 && $dia >= 20 && $dia <= 30) || ($mes == 5 && $dia <= 20)) {
                        $msg = "Tauro";
                    } else if (($mes == 5 && $dia >= 21 && $dia <= 31) || ($mes == 6 && $dia <= 20)) {
                        $msg = "Géminis";
                    } else if (($mes == 6 && $dia >= 21 && $dia <= 30) || ($mes == 7 && $dia <= 22)) {
                        $msg = "Cáncer";
                    } else if (($mes == 7 && $dia >= 23 && $dia <= 31) || ($mes == 8 && $dia <= 22)) {
                        $msg = "Leo";
                    } else if (($mes == 8 && $dia >= 23 && $dia <= 31) || ($mes == 9 && $dia <= 22)) {
                        $msg = "Virgo";
                    } else if (($mes == 9 && $dia >= 23 && $dia <= 30) || ($mes == 10 && $dia <= 22)) {
                        $msg = "Libra";
                    } else if (($mes == 10 && $dia >= 23 && $dia <= 31) || ($mes == 11 && $dia <= 21)) {
                        $msg = "Escorpio";
                    } else if (($mes == 11 && $dia >= 22 && $dia <= 30) || ($mes == 12 && $dia <= 21)) {
                        $msg = "Sagitario";
                    } else {
                        throw new Exception();
                    }
                    echo "<br>Su signo zodiacal es: ".$msg;
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >