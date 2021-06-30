<?php
    include 'header.php';
    include 'hdSecuencial.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 01</h1>
    <hr>
    <br>
    <p>
       Realizar una Aplicación Web que permita calcular el salario que recibirá un Empleado, a partir del número de horas trabajadas y un pago que recibe por hora. Considere además que por concepto de AFP se le descuenta el 11%.
    </p>
    <br>
    <form method="POST">
        <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="horas">Ingrese la cantidad de horas trabajadas: </label>
                </td>
                <td>
                    <input type="number" name="horas">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="pago">Ingrese el pago por hora trabajada: </label>
                </td>
                <td>
                    <input type="text" name="pago">
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
                if(isset($_POST['horas']) && isset($_POST['pago']) ) {
                    $horas = $_POST['horas'];
                    $pago = $_POST['pago'];
                    $total = $horas * $pago * (1 - 0.11);
                    echo "<br>Recibirá un salario de: " .$total. " soles.<br><br>";
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >