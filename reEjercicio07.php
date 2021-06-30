<?php
    include 'header.php';
    include 'hdRepetitiva.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 07</h1>
    <hr>
    <br>
    <p>
        Desarrollar un programa que permita generar una lista en forma descendente desde un número N hasta 1.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="num">Ingrese el número: </label>
                </td>
                <td>
                    <input type="number" name="num">
                </td>
            </tr>
        </table>
        <br>
        </fieldset>
        <br>
        <input type="submit" value="Calcular" name="btnenviar" />
        <br><br>
        <?php   
            try {
                if(isset($_POST['num'])) {
                    $num = $_POST['num'];
                    if (empty($num)) throw new Exception();
                    echo "Lista en forma descendente: ";
                    for ($i=$num; $i >= 1; $i--) echo $i. " ";
                    echo "<br><br>";
                }
            } catch (\Throwable) {
                echo "<span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >