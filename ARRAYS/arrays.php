<?php

// a
$array_escalar=["manzana","pera","piña","mango","kiwi"];
echo $array_escalar[2];

// b
$array_e_vacio=[];
for ($i=0;$i<=4;$i++) {
    $array_e_vacio[$i] = $a;
    $a=$a+1;
}
echo $array_e_vacio[4];

//c

$array_asociativo=["nombre"=>"Ayman","apellido"=>"Buxta","edad"=>"19"];
echo $array_asociativo["nombre"];
echo $array_asociativo["apellido"];

// d
$array_libro=["titulo"=>"Titulo","autor"=>"Autor","precio"=>"15.99"];
echo $array_libro["precio"];
$array_libro["precio"="19.99"];
echo $array_libro["precio"];

// e
$array_coche=["marca"=>"Marca","modelo"=>"Modelo","año"=>"2005"];
$array_coche["color"]="rojo";
$contador=count($array_coche);
echo "Hay un total de $contador valores en el array";
for ($i=0;$i<=$contador;$i++) {
    echo $array_coche[$i];
}
?>