<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Carta</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Lato:wght@100&family=Lora&family=Open+Sans:wght@300&family=Roboto+Mono:wght@300&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <img class="foto"src="./img/menu.png" alt="">
    <br>
    <br>
    <?php
    /* lectura del documento xml */
    if (file_exists('xml/carta.xml')) {
         $menu = simplexml_load_file('xml/carta.xml');
    } else {
        exit('Error abriendo carta.xml.');
    }
echo "<div class=column3>";
echo "<b class='tapas'>TAPAS</b>";
echo "<br>";
    foreach($menu->plato as $plato){

        if ($plato['tipo']=='Tapas') {

        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo $plato->precio;
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        foreach($plato->ingredientes->item as $item) {
            echo "<img class='ingrediente' src=".$item." alt=''>";
        }
        
        

}

}
echo "</div>";
echo "<div class=column3>";
echo "<b class='tapas'>ENSALADAS</b>";

echo "<br>";
    foreach($menu->plato as $plato){

        if ($plato['tipo']=='Ensaladas') {

        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo $plato->precio;
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
       
        foreach($plato->ingredientes->item as $item) {
            echo "<img class='ingrediente' src=".$item." alt=''>";
        }
        echo "<br>";

}
    }
echo "</div>";
?>


<?php

echo "<div class=column3  >";
echo "<b class='tapas'>BOCADILLOS</b>";

echo "<br>";
    foreach($menu->plato as $plato){

        if ($plato['tipo']=='Bocadillos') {

        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo $plato->precio;
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        echo "<br>";
        foreach($plato->ingredientes->item as $item) {
            echo "<img class='ingrediente' src=".$item." alt=''>";
        }
        echo "<br>";

}
    }
    echo "</div>";
echo "<div class=column3>";
echo "<b class='tapas'>CARNES Y PESCADOS</b>";

echo "<br>";
    foreach($menu->plato as $plato){

        if ($plato['tipo']=='Carnes y pescados') {

        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo $plato->precio;
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        
        foreach($plato->ingredientes->item as $item) {
            echo "<img class='ingrediente' src=".$item." alt=''>";
        }
        echo "<br>";
}
    }
    echo "</div>";
echo "<div class=column3>";
echo "<b class='tapas'>ARROCES</b>";

echo "<br>";
    foreach($menu->plato as $plato){

        if ($plato['tipo']=='Arroces') {

        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo $plato->precio;
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        
        foreach($plato->ingredientes->item as $item) {
            echo "<img class='ingrediente' src=".$item." alt=''>";
        
        }
        echo "<br>";
}
    }
    echo "</div>";
echo "<div class=column3>";
echo "<b class='tapas'>POSTRES</b>";

echo "<br>";
    foreach($menu->plato as $plato){

        if ($plato['tipo']=='Postres') {

        echo "<br>";
        echo "<b>".$plato->nombre."</b>";
        echo $plato->precio;
        echo "<br>";
        echo $plato->descripcion;
        echo "<br>";
        echo $plato->calorias; 
        echo "<br>";
        
        foreach($plato->ingredientes->item as $item) {
            echo "<img class='ingrediente' src=".$item." alt=''>";

        }
        echo "<br>";
}
}
echo "</div>";
    ?>

<footer class="ingredientes" background-color="black">
 
</footer>
</body>
</html>