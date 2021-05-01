<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css">
        <title>Ej-1</title>
    </head>
    <body>
	<?php 
		if (isset($_COOKIE['contador']))
		{
			$valor=$_COOKIE['contador']+1;
			echo "<span class='LetBlue'>Gracias por ser un visitante frecuente usted visito este sitio</span>";
			echo " $valor veces";
			setcookie("contador",$valor,time()+3600); /* expira en 1 hora */
			}
		else
		{
			echo "<span class='LetBlue'>Bienvenido </span>";
			echo " Es la visita 1";
			setcookie("contador",1,time()+3600); /* expira en 1 hora */
		}

	?>
    </body>
</html>




