<?php
    include 'header.php';
    include 'hdSecuencial.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 07</h1>
    <hr>
    <br>
    <p>
        Realizar una Aplicación Web que pida por teclado la fecha de nacimiento de una persona (día, mes, año) y calcule su número de la suerte. El número de la suerte se calcula sumando el día, mes y año de la fecha de nacimiento y a continuación sumando las cifras obtenidas en la suma. Por ejemplo: Si la fecha de nacimiento es 05/10/1979, calculamos el número de la suerte así:
    </p>
    <br>
    <ul>
        <li>5+10+1979 = 1994</li>
        <li>1+9+9+4 = 23</li>
        <li>Número de la suerte: 23</li>
    </ul>
    <br>
    <form method="POST">
    <fieldset>
            <br>
            <table>
                <tr>
                    <td>
                        <label for="fecha">Ingrese su fecha de nacimiento: </label>
                    </td>
                    <td>
                        <input type="date" name="fecha"  max="<?= date("Y-m-d") ?>">
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
                if(isset($_POST['fecha'])) {
                    $fecha = $_POST['fecha'];
                    $nfecha = strtotime($fecha);
                    if ((strlen($fecha) != 10)) throw new Exception();
                    $sf = date("d", $nfecha) + date("m", $nfecha) + date("Y", $nfecha);
                    // $ns = array_sum(str_split($sf));
                    // echo "<br>Su número de la suerte es: " .$ns. ".<br><br>";
                    $sumresto = 0;
                    while($sf!=0) {
                        $sumresto += $sf % 10;
                        $sf = (int) ($sf / 10);
                    }
                    echo "<br>Su número de la suerte es: " .$sumresto. ".<br><br>";
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >