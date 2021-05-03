<?php
$myXMLData = 
"<?xml version='1.0' encoding='UTF-8' ?>
<document>
    <title>¿Cuarentena qué?</title>
    <from>Joe</from>
    <to>Jane</to>
    <body>
        Sé que esa es la respuesta, pero,
        ¿cúal es la pregunta?
    </body>
</document>";

$xml = simplexml_load_string($myXMLData) or die ("Error: Cannot create object");

print_r($xml);
?>