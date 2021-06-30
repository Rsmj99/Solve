<?php
    include 'header.php';
    include 'hdCondicional.php';
?>
<section class="ejercicio">
    <h1>EJERCICIO 05</h1>
    <hr>
    <br>
    <p>
        Una tienda dedicada a la venta de equipos y suministros para PC desea premiar a
        sus clientes que realizan una compra superior o igual a S/. 1000.00 con el sorteo
        de premios según el valor de una bolilla que tiene un número grabado entre 1 y 5
        (este número debe obtenerse de forma aleatoria). Los premios se dan bajo la
        siguiente tabla:
    </p>
    <br>
    <img src="images/coEjercicio5.jpg" alt="">
    <br>
    <form method="POST">
        <fieldset>
            <br>
            <label for="monto">Ingrese el monto de la compra: </label>
            <input type="text" name="monto">
            <br><br>
        </fieldset>
        <br>
        <input type="submit" value="Calcular" name="btnenviar" />
        <br>
        <?php
            try {
                if(isset($_POST['monto'])) {
                    $monto = $_POST['monto'];
                    if (empty($monto)) {
                        throw new Exception();
                    } else if ($monto >= 1000) {
                        switch ($num = rand(1, 5)) {
                            case 1:
                                echo "<br>Usted recibirá un premio que es un: Mouse.<br><br>";
                                break;
                            case 2:
                                echo "<br>Usted recibirá un premio que es un: Teclado.<br><br>";
                                break;
                            case 3:
                                echo "<br>Usted recibirá un premio que es una: Cámara Web.<br><br>";
                                break;
                            case 4:
                                echo "<br>Usted recibirá un premio que son unos: Parlantes.<br><br>";
                                break;
                            case 5:
                                echo "<br>Usted recibirá un premio que es una: Memoria USB.<br><br>";
                                break;
                        }
                    } else {
                        echo "<br>Usted no recibirá un premio, debido a que su compra es menor a los 1000 soles.<br><br>";
                    }           
                }
            } catch (\Throwable) {
                echo "<br><span style=\"color: red;\">Por favor, complete de manera adecuada lo solicitado.</span><br><br>";
            }
        ?>
    </form>

</section  >