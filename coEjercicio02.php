<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 02</h1>
    <hr>
    <br>
    <p>
        Que pida tres números e indicar si el tercero es igual a la suma del primero y el segundo.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="n1">Ingrese el primer número: </label>
                </td>
                <td>
                    <input type="text" name="n1">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="n2">Ingrese el segundo número: </label>
                </td>
                <td>
                    <input type="text" name="n2">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="n3">Ingrese el tercer número: </label>
                </td>
                <td>
                    <input type="text" name="n3">
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
                if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])) {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $n3 = $_POST['n3'];
                    if($n3 == ($n1 + $n2)) echo "<br>El tercero es igual a la suma del primero con el segundo.<br><br>";
                    else echo "<br>El tercero NO es igual a la suma del primero con el segundo.<br><br>";
                } 
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >