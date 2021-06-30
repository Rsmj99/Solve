<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 04</h1>
    <hr>
    <br>
    <p>
        Elabore un programa que solicite el nombre y la edad de 2 hermanos. Realice la
        comparación de las edades y muestre un mensaje indicando el nombre del
        hermano mayor y cuantos años de diferencia tiene con el menor.
    </p>
    <br>
    <form method="POST">
        <fieldset>
            <br>
            <table>
                <tr>
                    <td>
                        <label for="n1">Ingrese el nombre del 1er hermano: </label>
                    </td>
                    <td>
                        <input type="text" name="n1">
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        <label for="e1">Ingrese la edad del 1er hermano: </label>
                    </td>
                    <td>
                        <input type="number" name="e1">
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        <label for="n2">Ingrese el nombre del 2do hermano: </label>
                    </td>
                    <td>
                        <input type="text" name="n2">
                    </td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>
                        <label for="e2">Ingrese la edad del 2do hermano: </label>
                    </td>
                    <td>
                        <input type="number" name="e2">
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
                if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['e1']) && isset($_POST['e2'])) {
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $e1 = $_POST['e1'];
                    $e2 = $_POST['e2'];
                    if (empty($n1) || empty($n2) || empty($e1) || empty($e2)) throw new Exception();
                    if ($e1 > $e2) {
                        echo "<br>El hermano mayor es " .$n1. " y le lleva " .$e1-$e2. " años de diferencia.<br><br>";
                    } else if($e2 > $e1){
                        echo "<br>El hermano mayor es " .$n2. " y le lleva " .$e2-$e1. " años de diferencia.<br><br>";
                    } else {
                        echo "<br>Ambos tienen la misma edad ya que no hay diferencia en las edades.<br><br>";
                    }                    
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >