<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 07</h1>
    <hr>
    <br>
    <p>
        Elabore un programa que permita determinar la temperatura corporal de una
        persona, según la medida de un termómetro.
    </p>
    <br>
    <ol>
        <li>> 39º       Fiebre Alta: Diríjase al Centro de Salud más cercano.</li>
        <li>37º - 38º   Fiebre: Tómese una pastilla y repose.</li>
        <li>35º - 36º   Temperatura Normal.</li>
        <li>< 35º       Temperatura muy baja: Tómese algo caliente.</li>
    </ol>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="med">Ingrese la medida del termómetro: </label>
                </td>
                <td>
                    <input type="text" name="med">
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
                if(isset($_POST['med'])) {
                    $med = $_POST['med'];
                    if (empty($med)) { 
                        throw new Exception();
                    } else if ($med > 39) {
                        echo "<br>Fiebre Alta: Diríjase al Centro de Salud más cercano.<br><br>";
                    } else if (37 <= $med && $med <= 38) {
                        echo "<br>Fiebre: Tómese una pastilla y repose.<br><br>";
                    } else if (35 <= $med && $med <= 36) {
                        echo "<br>Temperatura Normal.<br><br>";
                    } else {
                        echo "<br>Temperatura muy baja: Tómese algo caliente.<br><br>";
                    }
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >