<?php
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/client.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate client object
    $client = new Client($db);

    //get id
    $client->id = isset($_GET['id']) ? $_GET['id'] : die();
    //get client
    $client->read_single();
    //create array
    $client_arr = array(
        'id' => $client->id,
        'first_name' => $client->first_name,
        'last_name' => $client->last_name,
        'phone' => $client->phone,
        'ref' => $client->ref
    );
    //make JSON
    print_r(json_encode($client_arr));

