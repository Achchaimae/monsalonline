<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../config/Database.php';
include_once '../../models/appointement.php';

//Instantiate DB & connect
$database = new Database();
$db = $database->connect();

//Instantiate appointement object
$appointement = new Appointement($db);

//get raw appointement data
$data = json_decode(file_get_contents("php://input"));

//set id to delete
$appointement->id = $data->id;

//delete appointement
if($appointement->delete()){
    echo json_encode(
        array('message' => 'appointement deleted')
    );
}else{
    echo json_encode(
        array('message' => 'appointement not deleted')
    );
}
?>

