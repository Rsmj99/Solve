<?php
    include 'header.php';
    include 'hdSecuencial.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 05</h1>
    <hr>
    <br>
    <p>
       Una institución social tiene un centro de salud, un comedor infantil, una escuela infantil y un asilo de ancianos. La institución recibe anualmente una donación que lo reparte de la siguiente forma: 27% de la donación para la implementación del centro de salud, 34% de la donación para el comedor infantil, 29% de la donación para la escuela infantil y el resto para el asilo de ancianos. Realizar una Aplicación Web que permita efectuar el reparto de la donación.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="da">Ingrese la donación anual que recibirá la institución: </label>
                </td>
                <td>
                    <input type="text" name="da">
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
                if(isset($_POST['da'])) {
                    $da = $_POST['da'];
                    $cs = 0.27 * $da;
                    $ci = 0.34 * $da;
                    $ei = 0.29 * $da;
                    $aa = $da - ($cs + $ci + $ei);
                    echo "<br>El centro de salud recibirá: " .$cs. " soles.<br>";
                    echo "<br>El comedor infantil recibirá: " .$ci. " soles.<br>";
                    echo "<br>La escuela infantil recibirá: " .$ei. " soles.<br>";
                    echo "<br>El asilo de ancianos recibirá: " .$aa. " soles.<br><br>";
                } 
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >