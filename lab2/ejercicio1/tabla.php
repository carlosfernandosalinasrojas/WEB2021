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
        <div>
            <div>
                <?php
                    $filas = $_POST['filas'];
                    $columnas = $_POST['columnas'];
                ?>
            </div>
            <table border="1">
                <?php for ($i=0; $i<=$filas; $i++){  ?>
                    <tr>
                        <?php
                            for ($j=0; $j <= $columnas ; $j++){
                                if($i==0){
                                    if($i+$j==0){
                                        echo "<td class='tabla superior'></td>";
                                    }else{
                                        echo "<td class='tabla superior'>".($i+$j)."</td>";
                                    }
                                }else{
                                    if($j==0){
                                        if($i+$j==0){
                                            echo "<td class='tabla superior'></td>";
                                        }else{
                                            echo "<td class='tabla lateral'>".($i+$j)."</td>";
                                        }
                                    }else{
                                        echo "<td class='tabla'>".($i+$j)."</td>";
                                    }
                                }
                        
                            }
                        ?>
                    </tr>

                <?php } ?>
                    
            </table>
        </div>
    </body>
</html>