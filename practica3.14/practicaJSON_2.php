<?php

//EJEMPLO 1. Almacenando datos JSON en una variable php
//y luego decodificarlos en un objeto PHP.

//Almacenando datos JSON en una variable PHP
// nota que el string tiene forma de json
$miJson = '{"Pedro":35,"Benito":37,"Joel":43}';
//decodificamos el json, convertimos a objeto PHP
// nota que no utilizamos assoc = true
$obj = json_decode($miJson, false);
//mostramos contenido del objeto
var_dump($obj);
echo "<br>";

//EJEMPLO 2. Almacenando datos JSON en una variable PHP 
//y luego decodificarlos en un arreglo asociativo PHP.

//Almacenando datos JSON en una variable PHP
// nota que el string tiene forma de json
$miJson2 = '{"Pedro":35,"Benito":37,"Joel":43}';
//decodificamos el json, convertimos a objeto PHP
// usamoa ahora assoc = true para convertir el json
//en arreglo asociativo en vez de objeto estandar
$obj = json_decode($miJson2, true);
//mostramos contenido del objeto
var_dump($obj);
echo "<br>";

//EJEMPLO 3. Acceder a los valores desde el objeto PHP

//creamos json
$json = '{"Pedro":35,"Benito":37,"Joel":43}';
//decodificamos a objeto
$obj = json_decode($json);
// utilzamos la notación de objetos ya conocida,
// mostramos valores de propiedades,
// cada nombre del json se convierte en propiedad.
// Recuerda que tenemos la paridad 'nombre:valor' en json
echo $obj->Pedro;
echo '<br>';
echo $obj->Benito;
echo '<br>';
echo $obj->Joel;

?>