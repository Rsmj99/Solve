<?php
    include 'header.php';
    include 'hdRepetitiva.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 04</h1>
    <hr>
    <br>
    <p>
        Se necesita un programa que solicite dos números, los cuales son un rango, de los cuales queremos que imprima dichos números en pares e impares y el total de la suma de pares e impares.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="num1">Ingrese el 1er número: </label>
                </td>
                <td>
                    <input type="number" name="num1">
                </td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td>
                    <label for="num2">Ingrese el 2do número: </label>
                </td>
                <td>
                    <input type="number" name="num2">
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
                if(isset($_POST['num1']) && isset($_POST['num2'])) {
                    $menor = min($_POST['num1'], $_POST['num2']);
                    $mayor = max($_POST['num1'], $_POST['num2']);
                    $arrp = array();
                    $arri = array();
                    for ($i=$menor; $i <= $mayor; $i++) { 
                        if($i % 2 == 0) array_push($arrp, $i);
                        else array_push($arri, $i);
                    }
                    echo "Pares: ";
                    foreach ($arrp as $nump) echo $nump . " ";
                    echo "<br><br>La suma de los números pares es: " .array_sum($arrp). ".<br>";
                    
                    echo "<br><br>Impares: ";
                    foreach ($arri as $numi) echo $numi . " ";
                    echo "<br><br>La suma de los números impares es: " .array_sum($arri). ".<br><br>";
                }
            } catch (\Throwable) {
                echo "<span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section >