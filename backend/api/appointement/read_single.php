<?php
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/appointement.php';

    
    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();
    //Instantiate appointement object
    $appointement = new Appointement($db);
    //get id
    $appointement->id = isset($_GET['id']) ? $_GET['id'] : die();
    //get appointement
    $appointement->read_single();
    //create array
    $appointement_arr = array(
        'id' => $appointement->id,
        'date' => $appointement->date,
        'client_id' => $appointement->client_id
    );
    //make JSON
    print_r(json_encode($appointement_arr));
    
