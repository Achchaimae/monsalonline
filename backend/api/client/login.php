<?php
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../models/client.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate client object
    $client = new Client($db);
    //get raw client data
    $data = json_decode(file_get_contents("php://input"));
    $client->ref = $data->reference;
    //create client
    if($client->login()){
        echo json_encode(
            array('message' => true)
        );
    }else{
        echo json_encode(
            array('message' => false)
        );
    }
    
