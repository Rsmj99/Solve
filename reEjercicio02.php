<?php
    include 'header.php';
    include 'hdRepetitiva.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 02</h1>
    <hr>
    <br>
    <p>
        Diseñar un algoritmo que imprima los primeros N números pares (asuma como máximo el valor de N a 100), además que calcule y muestre la suma de dichos números.
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
                    <input type="number" name="num" max="100">
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
                    $sum = 0;
                    for ($i=1; $i <= $num*2; $i++) { 
                        if($i % 2 == 0) {
                            echo $i. " ";
                            $sum = $sum + $i;
                        }
                    }
                    echo "<br><br>La suma de los " .$num. " primeros números pares es: " .$sum. ".<br><br>";
                }
            } catch (\Throwable) {
                echo "<span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >