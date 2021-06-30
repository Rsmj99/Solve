<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 06</h1>
    <hr>
    <br>
    <p>
        Leer un número entero positivo e identificar si es de un dígito, dos dígitos, tres
        dígitos o más de tres dígitos.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="num">Ingrese el número entero positivo: </label>
                </td>
                <td>
                    <input type="number" name="num" min="1">
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
                if(isset($_POST['num'])) {
                    $dig = strlen($_POST['num']);
                    if ($dig==0) throw new Exception();
                    $msg = ($dig>3) ? "El número tiene más de tres dígitos" : "El número tiene ".$dig." dígito(s).";
                    echo "<br>".$msg."<br><br>";      
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >