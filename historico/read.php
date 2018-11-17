<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/historico.php';
 
// instantiate database and historico object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$historico = new Historico($db);

// set ID property of record to read
$historico->id = isset($_GET['id']) ? $_GET['id'] : die();
 
// read the details of historico to be edited
$historico->read();
 
if($historico->P9!=null){
    // create array
    $historico_arr = array(
        "id" =>  $historico->id,
        "P1" => $historico->P1,
        "P1_intentos" => $historico->P1_intentos,
        "P2" => $historico->P2,
        "P2_intentos" => $historico->P2_intentos,
        "P3" => $historico->P3,
        "P3_intentos" => $historico->P3_intentos,
        "P4" => $historico->P4,
        "P4_intentos" => $historico->P4_intentos,
        "P5" => $historico->P5,
        "P5_intentos" => $historico->P5_intentos,
        "P6" => $historico->P6,
        "P6_intentos" => $historico->P6_intentos,
        "P7" => $historico->P7,
        "P7_intentos" => $historico->P7_intentos,
        "P8" => $historico->P8,
        "P8_intentos" => $historico->P8_intentos,
        "P9" => $historico->P9,
        "P9_intentos" => $historico->P9_intentos,
        "fecha_partida" => $historico->fecha_partida
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($historico_arr);
} else {
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user historico does not exist
    echo json_encode(array("message" => "historico does not exist."));
}
?>