<?php
    //headers
    header("Access-Control-Allow-Origin: *");
    header("content-type: Application/json");
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
    include_once '../../config/Database.php';
    include_once '../../models/client.php';


    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate client object
    $client = new Client($db);
    //get raw client data
    $data = json_decode(file_get_contents("php://input"));
    $client->first_name = $data->first_name;
    $client->last_name = $data->last_name;
    $client->phone = $data->phone;
    //randomly generate a token
    $client->ref = 'X-' . substr(bin2hex(random_bytes(64)), 0, 6) . substr($client->phone, -4);
    //create client
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($client->create()){
            echo json_encode(
                array('message' => $client->ref)
            );
        }else{
            echo json_encode(
                array('message' => 'Client Not Created')
            );
        }
    }

    

    