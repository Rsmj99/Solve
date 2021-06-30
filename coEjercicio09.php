<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 09</h1>
    <hr>
    <br>
    <p>
        Determine un programa que ingrese tu número de DNI y calcule tu horario de votación para las elecciones 2021 (no usar repetitivas).
    </p>
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
                    switch ($dni % 10) {
                        case 1:
                            $msg = "9:00 a.m. a 10:00 a.m.";
                            break;
                        case 2:
                            $msg = "10:00 a.m. a 11:00 a.m.";
                            break;
                        case 3:
                            $msg = "11:00 a.m. a 12:00 p.m.";
                            break;
                        case 4:
                            $msg = "12:00 p.m. a 1:00 p.m.";
                            break;
                        case 5:
                            $msg = "1:00 p.m. a 2:00 p.m.";
                            break;
                        case 6:
                            $msg = "2:00 p.m. a 3:00 p.m.";
                            break;
                        case 7:
                            $msg = "3:00 p.m. a 4:00 p.m.";
                            break;
                        case 8:
                            $msg = "4:00 p.m. a 5:00 p.m.";
                            break;
                        case 9:
                            $msg = "5:00 p.m. a 6:00 p.m.";
                            break;
                        case 0:
                            $msg = "6:00 p.m. a 7:00 p.m.";
                            break;
                    }
                    echo "<br>Deberá ir a votar de " .$msg. "<br><br>";
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >