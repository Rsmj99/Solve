<?php
    include 'header.php';
    include 'hdRepetitiva.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 09</h1>
    <hr>
    <br>
    <p>
        Dado un número entero, determinar la cantidad de dígitos pares e impares y ordenarlos de menor a mayor.
    </p>
    <br>
    <form method="POST">
    <fieldset>
        <br>
        <table>
            <tr>
                <td>
                    <label for="num">Ingrese el número entero: </label>
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
                    $digitos = str_split($num);
                    sort($digitos);
                    echo "Lista ordenada: ";
                    foreach($digitos as $dig){
                        echo $dig. " ";
                        if ($dig % 2 == 0) $conp++; 
                        else $coni++;
                    }
                    echo "<br><br>La cantidad de dígitos pares es: " .$conp;
                    echo "<br><br>La cantidad de dígitos impares es: " .$coni. "<br><br>";
                }
            } catch (\Throwable) {
                echo "<span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>  
    </form>

</section  >