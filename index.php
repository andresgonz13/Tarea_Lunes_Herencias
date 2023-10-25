<html>
    <body>
    <?php
    require "codigo.php";
    $resolver = new Operaciones;
	$saludo = new Saludo;
        echo $resolver->convertirdolar(75);
        echo "<br>";
        echo $resolver->sumar(75);
        echo "<br>";
        echo $saludo->buenas();
    ?>
    </body>
<html>
