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
    //client query
    $result = $client->read();
    //get row count
    $num = $result->rowCount();
    //check if any clients
    if($num > 0){
        //client array
        $clients_arr = array();
        $clients_arr['data'] = array();
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $client_item = array(
                'id' => $id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'phone' => $phone,
                'ref' => $ref
            );
            //push to "data"
            array_push($clients_arr['data'], $client_item);
        }
        //turn to JSON & output
        echo json_encode($clients_arr);
    }else{
        //no clients
        echo json_encode(
            array('message' => 'No clients found')
        );
    }
    
