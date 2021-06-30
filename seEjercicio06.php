<?php
    include 'header.php';
    include 'hdSecuencial.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 06</h1>
    <hr>
    <br>
    <p>
       Realizar una Aplicación Web que permita ingresar un número y reporte el último dígito.
       Nota: Para hallar el último dígito de un número, solo debe hallar el residuo del número en mención entre 10.
    </p>
    <br>
    <form method="POST">
        <fieldset>
            <br>
            <table>
                <tr>
                    <td>
                        <label for="nu">Ingrese el número: </label>
                    </td>
                    <td>
                        <input type="number" name="nu">
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
                if(isset($_POST['nu'])) {
                    $nu = $_POST['nu'];
                    $ud = $nu % 10;
                    echo "<br>El último dígito del número es: " .$ud. ".<br><br>";
                } 
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >