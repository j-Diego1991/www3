<?php
$nombreArchivo = "biblioteca.xml";

if (file_exists($nombreArchivo)) {
    $miXML = simplexml_load_file($nombreArchivo)
        or die("Error no se puede crear el objeto SimpleXMLElement");

    //Mostrar los elementos del archivo XML como un arreglo
    //var_dump($miXML);

    //Acceder al primer elemento del XML
    //var_dump($miXML->libro[0]);

    //Acceder al primer elemento 
    //empleando la función arttributes()
    //var_dump($miXML->libro[0]->attributes());

    //Imprimir de forma mas organizada la
    //información del XML, mostrando unicamente el ISBN
    //echo ($miXML->libro[0]->attributes()->isbn);
    //echo ('<br>');
    //echo ($miXML->libro[1]->attributes()[0]);
    //echo ('<br>');
    //echo ($miXML->libro[2]->attributes()['isbn']);
    //echo ('<br>');

    //Mostrar el autor del segundo libro
    //echo ($miXML->libro[1]->autor);
    //echo ('<br>');

    //Mostrar información del tercer libro
    //$nombreLibro3 = $miXML->libro[2]->titulo;
    //$precioLibro3 = $miXML->libro[2]->precio;
    //$monedaLibro3 = $miXML->libro[2]->precio->attributes()['moneda'];

    //echo ("El tercer Libro \"" . $nombreLibro3 . "\"cuesta " . $precioLibro3 . " en " . $monedaLibro3);

    //Mostrar información de todos los libros
    $isbnLibro1 = $miXML -> libro[0]->attributes()->isbn;
    $autorLibro1 = $miXML -> libro[0]->autor;
    $tituloLibro1 = $miXML -> libro[0]->titulo;
    $anioLibro1 = $miXML -> libro[0]->anio;
    $editorialLibro1 = $miXML ->libro[0]->editorial;
    $clasificacionLibro1 = $miXML ->libro[0]->clasificacion;
    $idiomaLibro1 = $miXML ->libro[0]->idioma;
    $precioLibro1 = $miXML ->libro[0]->precio;
    $monedaLibro1 =  $miXML ->libro[0]->precio->attributes()['moneda'];

    echo ("<h3>$tituloLibro1 - $autorLibro1 </h3>");
    echo ("<b>Año de publicación:</b> $anioLibro1");
    echo ("<br>");
    echo ("<b>Editorial:</b> $editorialLibro1");
    echo ("<br>");
    echo ("<b>Idioma:</b> $idiomaLibro1");
    echo ("<br>");
    echo ("<b>Clasificación:</b> $clasificacionLibro1");
    echo ("<br>");
    echo ("<b>Precio:</b> $precioLibro1 $monedaLibro1");
    echo ("<br>");
    echo ("<b>ISBN:</b> $isbnLibro1");
    echo ("<br>");

    $isbnLibro2 = $miXML -> libro[1]->attributes()->isbn;
    $autorLibro2 = $miXML -> libro[1]->autor;
    $tituloLibro2 = $miXML -> libro[1]->titulo;
    $anioLibro2 = $miXML -> libro[1]->anio;
    $editorialLibro2 = $miXML ->libro[1]->editorial;
    $clasificacionLibro2 = $miXML ->libro[1]->clasificacion;
    $idiomaLibro2 = $miXML ->libro[1]->idioma;
    $precioLibro2 = $miXML ->libro[1]->precio;
    $monedaLibro2 =  $miXML ->libro[1]->precio->attributes()['moneda'];

    echo ("<h3>$tituloLibro2 - $autorLibro2 </h3>");
    echo ("<b>Año de publicación:</b> $anioLibro2");
    echo ("<br>");
    echo ("<b>Editorial:</b> $editorialLibro2");
    echo ("<br>");
    echo ("<b>Idioma:</b> $idiomaLibro2");
    echo ("<br>");
    echo ("<b>Clasificación:</b> $clasificacionLibro2");
    echo ("<br>");
    echo ("<b>Precio:</b> $precioLibro2 $monedaLibro2");
    echo ("<br>");
    echo ("<b>ISBN:</b> $isbnLibro2");
    echo ("<br>");

    $isbnLibro3 = $miXML -> libro[2]->attributes()->isbn;
    $autorLibro3 = $miXML -> libro[2]->autor;
    $tituloLibro3 = $miXML -> libro[2]->titulo;
    $anioLibro3 = $miXML -> libro[2]->anio;
    $editorialLibro3 = $miXML ->libro[2]->editorial;
    $clasificacionLibro3 = $miXML ->libro[2]->clasificacion;
    $idiomaLibro3 = $miXML ->libro[2]->idioma;
    $precioLibro3 = $miXML ->libro[2]->precio;
    $monedaLibro3 =  $miXML ->libro[2]->precio->attributes()['moneda'];

    echo ("<h3>$tituloLibro3 - $autorLibro3 </h3>");
    echo ("<b>Año de publicación:</b> $anioLibro3");
    echo ("<br>");
    echo ("<b>Editorial:</b> $editorialLibro3");
    echo ("<br>");
    echo ("<b>Idioma:</b> $idiomaLibro3");
    echo ("<br>");
    echo ("<b>Clasificación:</b> $clasificacionLibro3");
    echo ("<br>");
    echo ("<b>Precio:</b> $precioLibro3 $monedaLibro3");
    echo ("<br>");
    echo ("<b>ISBN:</b> $isbnLibro3");
    echo ("<br>");

}
