<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertar Valores</title>
</head>
<body>
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
    Calcular multiplicación: <input type="radio" name="operacion" value="multiplicar"><br>
	Calcular menor: <input type="radio" name="operacion" value="multiplicar"><br>
	Mostrar Calculos: <input type="radio" name="operacion" value="multiplicar"><br>
    <input type="submit" value="Mostrar Calculos">
</form>
	
</body>
</html>