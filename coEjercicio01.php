<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 01</h1>
    <hr>
    <br>
    <p>
        Elabore un programa que permita calcular el descuento según el valor de la compra de un cliente. Si la compra es igual o mayor a S/. 1000.00 se le otorgará el descuento del 10%. Mostrar el valor inicial, el descuento y el total neto a pagar.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="valor">Ingrese el valor de la compra: </label>
                </td>
                <td>
                    <input type="text" name="valor">
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
                if(isset($_POST['valor'])) {
                    $valor = $_POST['valor'];
                    $desc = ($valor >= 1000) ? $valor * 0.10 : 0;
                    $total = $valor - $desc;
                    echo "<br>El valor inicial es de: " .$valor. " soles.<br>";
                    echo "<br>El descuento es de: " .$desc. " soles.<br>";
                    echo "<br>El total a pagar es de: " .$total. " soles.<br><br>";
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >