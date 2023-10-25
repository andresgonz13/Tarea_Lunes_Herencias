<html>
    <body>
    <?php
    require "codigo.php";
    $resolver = new Operaciones;
	$saludo = new SaludoHijo;
        echo $resolver->convertirdolar(75);
        echo "<br>";
        echo $resolver->sumar(75);
        echo "<br>";
        echo $saludo->buenaspadre();
	echo $saludo->buenashijo();
    ?>
    </body>
<html>
