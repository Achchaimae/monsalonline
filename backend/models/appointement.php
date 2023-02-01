<?php 
    class Appointement{
    //db stuff
    private $conn;
    private $table = 'appointement';
    //appointement properties
    public $id;
    public $date;
    public $client_id;
    //constructor with db
    public function __construct($db){
        $this->conn = $db;

    }
    //get appointements
    public function read(){
        //create query
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY date DESC';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //execute query
        $stmt->execute();
        return $stmt;
    }
    //get single appointement
    public function read_single(){
        //create query
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id = ? LIMIT 0,1';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //bind id
        $stmt->bindParam(1, $this->id);
        //execute query
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        //set properties
        $this->date = $row['date'];
        $this->client_id = $row['client_id'];
    }
    //create appointement
    public function create(){
        //create query
        $query = 'INSERT INTO ' . $this->table . ' SET date = :date, client_id = :client_id';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //clean data
        $this->date = htmlspecialchars(strip_tags($this->date));
        $this->client_id = htmlspecialchars(strip_tags($this->client_id));
        //bind data
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':client_id', $this->client_id);
        //execute query
        if($stmt->execute()){
            return true;
        }
        //print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);
        return false;
    }
    //update appointement
    public function update(){
        //create query
        $query = 'UPDATE ' . $this->table . '
         SET 
         date = :date, 
         client_id = :client_id 
         WHERE id = :id';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //clean data
        $this->date = htmlspecialchars(strip_tags($this->date));
        $this->client_id = htmlspecialchars(strip_tags($this->client_id));
        $this->id = htmlspecialchars(strip_tags($this->id));
        //bind data
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':client_id', $this->client_id);
        $stmt->bindParam(':id', $this->id);
        //execute query
        if($stmt->execute()){
            return true;
        }
        //print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);
        return false;

    }
    //delete appointement
    public function delete(){
        //create query
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //clean data
        $this->id = htmlspecialchars(strip_tags($this->id));
        //bind data
        $stmt->bindParam(':id', $this->id);
        //execute query
        if($stmt->execute()){
            return true;
        }
        //print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);
        return false;
    }
}

