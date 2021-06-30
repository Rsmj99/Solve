<?php
    include 'header.php';
    include 'hdSecuencial.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 04</h1>
    <hr>
    <br>
    <p>
       Realizar una Aplicación Web que permita hallar el cociente y el residuo (resto) de dos números enteros ingresados por teclado.
    </p>
    <br>
    <form method="POST">
        <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="n1">Ingrese el primer número entero (dividendo): </label>
                </td>
                <td>
                    <input type="number" name="n1">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="n2">Ingrese el segundo número entero (divisor): </label>
                </td>
                <td>
                    <input type="number" name="n2">
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
                if(isset($_POST['n1']) && isset($_POST['n2'])) {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $coc = floor($n1 / $n2);
                    $res = $n1 % $n2;
                    echo "<br>El cociente de la división es: " .$coc. ".<br>";
                    echo "<br>El residuo de la división es: " .$res. ".<br><br>";
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >