<?php
    session_start();
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $_SESSION['a'] = $a;
    $_SESSION['b'] = $b;
    $_SESSION['c'] = $c;
?>

<form action="mostrar.php" method="POST">
    <!-- Sumar: <input type="radio" name="operacion" value="sumar"><br>
	Restar: <input type="radio" name="operacion" value="restar"><br> -->
    Multiplicacion: <input type="radio" name="operacion" value="multiplicar"><br>
    Menor: <input type="radio" name="operacion" value="dividir"><br>
    <input type="submit" value="Calcular">
</form>