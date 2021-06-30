<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 08</h1>
    <hr>
    <br>
    <p>
        El NIF (o letra asociada a un DNI) se obtiene de la siguiente manera:
    </p>
    <br>
    <ul>
        <li>
            Se divide el número de DNI entre 23 y el resto es codificado por una letra según
            la siguiente tabla de equivalencias:
            <img src="images/coEjercicio8.jpg" alt="Tabla de Equivalencias">
        </li>
        <li>
            Escribe un programa que pida el DNI y ofrezca como resultado letra asociada.
        </li>
        <li>
            Ejemplo: para el DNI 56321122 el NIF es ‘X’.
        </li>
    </ul>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="dni">Ingrese el DNI: </label>
                </td>
                <td>
                    <input type="number" name="dni" min="10000000" max="99999999">
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
                if(isset($_POST['dni'])) {
                    $dni = $_POST['dni'];
                    switch ($dni % 23) {
                        case 0:
                            $msg = "T";
                            break;
                        case 1:
                            $msg = "R";
                            break;
                        case 2:
                            $msg = "W";
                            break;
                        case 3:
                            $msg = "A";
                            break;
                        case 4:
                            $msg = "G";
                            break;
                        case 5:
                            $msg = "M";
                            break;
                        case 6:
                            $msg = "Y";
                            break;
                        case 7:
                            $msg = "F";
                            break;
                        case 8:
                            $msg = "P";
                            break;
                        case 9:
                            $msg = "D";
                            break;
                        case 10:
                            $msg = "X";
                            break;
                        case 11:
                            $msg = "B";
                            break;
                        case 12:
                            $msg = "N";
                            break;
                        case 13:
                            $msg = "J";
                            break;
                        case 14:
                            $msg = "Z";
                            break;
                        case 15:
                            $msg = "S";
                            break;
                        case 16:
                            $msg = "Q";
                            break;
                        case 17:
                            $msg = "V";
                            break;
                        case 18:
                            $msg = "H";
                            break;
                        case 19:
                            $msg = "L";
                            break;
                        case 20:
                            $msg = "C";
                            break;
                        case 21:
                            $msg = "K";
                            break;
                        case 22:
                            $msg = "L";
                            break;
                    }
                    echo "<br>El NIF es: " .$msg. ".<br><br>";
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >