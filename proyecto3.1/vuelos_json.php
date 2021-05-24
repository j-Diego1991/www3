<?

require_once('./classVuelo.php');

$archivo_json = "vuelos.json";

$vuelo1 = new Vuelo(
    "1",
    "Nueva York",
    "Londres",
    "415"
);

$vuelo2 = new Vuelo(
    "2",
    "Shanghai",
    "París",
    "760",
);

$vuelo3 = new Vuelo(
    "3",
    "Estambul",
    "Tokyo",
    "700",
);

$vuelo4 = new Vuelo(
    "4",
    "Nueva York",
    "París",
    "435",
);

$vuelo5 = new Vuelo(
    "5",
    "Moscú",
    "París",
    "245",
);

$vuelo6 = new Vuelo(
    "6",
    "Lima",
    "Nueva York",
    "455",
);

$vuelos = array();

$vuelos[] = $vuelo1;
$vuelos[] = $vuelo2;
$vuelos[] = $vuelo3;
$vuelos[] = $vuelo4;
$vuelos[] = $vuelo5;
$vuelos[] = $vuelo6;

$json_string = json_encode($vuelos);

$archv = fopen($archivo_json, 'w');
if ($archv == false){
    echo ('Error al abrir el archivo JSON');
    exit();
}

fwrite($archv, $json_string);
fclose($archv);

echo '<h3>Datos escritos en el archivo vuelos.json</h3>';

header("refresh:2;url=mostrar_json.php");