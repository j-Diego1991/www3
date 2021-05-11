<?php

//crea una instancia de la clase DOMDocument
$dom = new DOMDocument();

    //establecer codificación utf-8
    $dom->encoding='utf-8';

    //especificar versión 1.0
    $dom->xmlVersion='1.0';

    //confirmar formato y la version de XML
    $dom->formatOutput=true;

    //crear el archvilo lista_peliculas.xml
    $xml_file_name = 'lista_peliculas.xml';

    //crear el nodo raíz: 'Películas'
    $raiz = $dom->createElement('Peliculas');

    //crear el nodo 'Pelicula' para cada película
    $nodo_peli = $dom->createElement('pelicula');

    //definir el atributo 'ID' para el nodo película (aunque no se asigne)
    $arrt_peli_id = new DOMAttr('peli_id', '5467');

    //asignar el atributo al nodo 'Pelicula'
    $nodo_peli->setAttributeNode($arrt_peli_id);

    //Crear el nodo hijo 'Titulo' del que deriva el nodo 'Película'.
    //El primer parámetro especifica el nombre del elemento: 'Título'.
    //El segundo parámetro establece el valor del nodo: 'La campaña'.
    $child_node_title = $dom->createElement('Titulo', 'La Campaña');
    $nodo_peli->appendChild($child_node_title);

    //Crear el nodo hijo 'Año' para el nodo 'Pelicula'
    $nodo_hijo_año = $dom->createElement('Año',2012);
    //Agregar el nodo hijo 'Año' al nodo 'Pelicula'
    $nodo_peli->appendChild($nodo_hijo_año);

    //Crear el nodo hijo 'Genero' para el nodo 'Pelicula'
    $nodo_hijo_genero = $dom->createElement('Genero', 'Drama');
    //Agregar el nodo hijo 'Año' al nodo 'Pelicula'
    $nodo_peli->appendChild($nodo_hijo_genero);

    //Crear el nodo hijo 'Clasificacion' para el nodo Pelicula
    $child_node_ratings = $dom->createElement('Clasificacion', 'B');
    //Agregar el nodo hijo 'Clasificacion' al nodo pelicula
    $nodo_peli->appendChild($child_node_ratings);

    //Agregar los elementos 'nodo_peli' al nodo raíz 'Peliculas'
    $raiz->appendChild($nodo_peli);

    //Agregar el nodo raíz a la estructura XML
    $dom->appendChild($raiz);

    //Guardar la estructura XML en el archivo lista_peliculas.xml
    $dom->save($xml_file_name);

    //creamos el enlace al archivo XML y un mensaje
    echo "El archivo: <a href= '$xml_file_name'> $xml_file_name </a> se ha creado con éxito";

?>