<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Credentials", "true");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, credential, X-Requested-With");
 
// get database connection
include_once '../config/database.php';

// instantiate historico object
include_once '../objects/historico.php';
 
$database = new Database();
$db = $database->getConnection();
 
$historico = new Historico($db);
 
// get posted data
$data = json_decode(file_get_contents("php://input"));
 
    // set historico property values
    $historico->P1 = $data->P1;
    $historico->P1_audio = $data->P1_audio;
    $historico->P1_intentos = $data->P1_intentos;
    $historico->P2 = $data->P2;
    $historico->P2_audio = $data->P2_audio;
    $historico->P2_intentos = $data->P2_intentos;
    $historico->P3 = $data->P3;
    $historico->P3_audio = $data->P3_audio;
    $historico->P3_intentos = $data->P3_intentos;
    $historico->P4 = $data->P4;
    $historico->P4_audio = $data->P4_audio;
    $historico->P4_intentos = $data->P4_intentos;
    $historico->P5 = $data->P5;
    $historico->P5_audio = $data->P5_audio;
    $historico->P5_intentos = $data->P5_intentos;
    $historico->P6 = $data->P6;
    $historico->P6_audio = $data->P6_audio;
    $historico->P6_intentos = $data->P6_intentos;
    $historico->P7 = $data->P7;
    $historico->P7_audio = $data->P7_audio;
    $historico->P7_intentos = $data->P7_intentos;
    $historico->P8 = $data->P8;
    $historico->P8_audio = $data->P8_audio;
    $historico->P8_intentos = $data->P8_intentos;
    $historico->P9 = $data->P9;
    $historico->P9_audio = $data->P9_audio;
    $historico->P9_intentos = $data->P9_intentos;
    $historico->fecha_partida = date('Y-m-d H:i:s');
 
    // create the historico
    if($historico->create()){
        // set response code - 201 created
        http_response_code(201);
 
        // tell the user
        echo json_encode(array("message" => "historico was created."));
    }
    // if unable to create the historico, tell the user
    else{
        // set response code - 503 service unavailable
        http_response_code(503);
 
        // tell the user
        echo json_encode(array("message" => "Unable to create historico."));
    }