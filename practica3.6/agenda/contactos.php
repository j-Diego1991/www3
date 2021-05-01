<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Contactos</title>
</head>
<body>
    <?php
    $nombreArchivo = "agenda.csv";
    $archivo = fopen($nombreArchivo, "r") or die ("No se puede abrir el archivo: $nombreArchivo");
    $datos = array();
    ?>

    <div class="container">
        <h1 class="titulo">Contactos</h1>

        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th># de contacto</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de nacimiento</th>
                        <th>Estado civil</th>
                        <th>Origen</th>
                        <th>Email</th>
                        <th>Redes sociales</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while (($datos = fgetcsv($archivo, 0, ',','"','"'))!=false){
                        print("<tr>");

                        foreach ($datos as $campo){
                            print("<td>");
                            print("$campo");
                            print("</td>");
                        }
                        print("</tr>");
                    }
                    fclose($archivo);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>