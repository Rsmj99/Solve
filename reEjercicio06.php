<?php
    include 'header.php';
    include 'hdRepetitiva.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 06</h1>
    <hr>
    <br>
    <p>
        Diseñar un programa que permita generar una lista de N números aleatorios entre 1 y N y cuente la cantidad de números pares e impares.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="num">Ingrese la cantidad de números aleatorios: </label>
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
                    $conp = 0;
                    $coni = 0;
                    for ($i=1; $i <= $num; $i++) {
                        $alt = rand(1, $num);
                        echo $alt. " ";
                        if($alt % 2 == 0) $conp++;
                        else $coni++;
                    }
                    echo "<br><br>Hay " .$conp. " números pares en la lista";
                    echo "<br><br>Hay " .$coni. " números impares en la lista<br><br>";
                }
            } catch (\Throwable) {
                echo "<span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >