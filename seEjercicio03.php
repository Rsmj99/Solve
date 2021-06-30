<?php
    include 'header.php';
    include 'hdSecuencial.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 03</h1>
    <hr>
    <br>
    <p>
       Realizar una Aplicación Web que permita obtener el porcentaje de estudiantes de cada carrera profesional en el IESTP VRHT, teniendo en cuenta que contamos con la carrera de COMPUTACIÓN E INFORMÁTICA, ENFERMERÍA TÉCNICA Y CONTABILIDAD.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="c1">Ingrese la cantidad de estudiantes de COMPUTACIÓN E INFORMÁTICA: </label>
                </td>
                <td>
                    <input type="number" name="c1">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="c2">Ingrese la cantidad de estudiantes de ENFERMERÍA TÉCNICA: </label>
                </td>
                <td>
                    <input type="number" name="c2">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="c3">Ingrese la cantidad de estudiantes de CONTABILIDAD: </label>
                </td>
                <td>
                    <input type="number" name="c3">
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
                if(isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3'])) {
                    $c1 = $_POST['c1'];
                    $c2 = $_POST['c2'];
                    $c3 = $_POST['c3'];
                    $porc1 = $c1 * 100 / ($c1 + $c2 + $c3);
                    $porc2 = $c2 * 100 / ($c1 + $c2 + $c3);
                    $porc3 = $c3 * 100 / ($c1 + $c2 + $c3);
                    echo "<br>El porcentaje de estudiantes de COMPUTACIÓN E INFORMÁTICA es: " .$porc1. "%.<br>";
                    echo "<br>El porcentaje de estudiantes de ENFERMERÍA TÉCNICA es: " .$porc2. "%.<br>";
                    echo "<br>El porcentaje de estudiantes de CONTABILIDAD es: " .$porc3. "%.<br><br>";
                } 
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >