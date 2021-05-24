<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Mostrar vuelos.json</title>
</head>

<body>
    <?php

    $archivo = 'vuelos.json';

    if(file_exists("$archivo")) {

        $a = fopen($archivo, "r")
                or die("Error: no se puede abrir el archivo json");
        
        $size = filesize($archivo);

        $contenido = fread($a, $size);

        fclose($a);

        $listaVuelos = json_decode($contenido, true);

        $numVuelos = count($listaVuelos);
    ?>
        <div class="container">
            <h1 class="titulo">Lista de vuelos</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>id</th>
                            <th>Origen</th>
                            <th>Destino</th>
                            <th>Duración</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i=0; $i < $numVuelos; $i++){
                            echo '<tr>';
                            echo '<td>' . $listaVuelos[$i]['id'] . '</td>';
                            echo '<td>' . $listaVuelos[$i]['origen'] . '</td>';
                            echo '<td>' . $listaVuelos[$i]['destino'] . '</td>';
                            echo '<td>' . $listaVuelos[$i]['duracion'] . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    }
    ?>
</body>
</html>