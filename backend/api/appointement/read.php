<?php
    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Appointement.php';

    //Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    //Instantiate appointement object
    $appointement = new Appointement($db);
    //appointement query
    $result = $appointement->read();
    //get row count
    $num = $result->rowCount();
    //check if any appointements
    if($num > 0){
        //appointement array
        $appointements_arr = array();
        $appointements_arr['data'] = array();
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $appointement_item = array(
                'id' => $id,
                'date' => $date,
                'client_id' => $client_id
            );
            //push to "data"
            array_push($appointements_arr['data'], $appointement_item);
        }
        //turn to JSON & output
        echo json_encode($appointements_arr);
    }else{
        //no appointements
        echo json_encode(
            array('message' => 'No appointements found')
        );
    }


