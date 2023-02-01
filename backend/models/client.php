<?php
    class Client{
    //db stuff
    private $conn;
    private $table = 'client';
    //client properties
    public $id;
    public $first_name;
    public $last_name;
    public $phone;
    public $ref;
    //constructor with db
    public function __construct($db){
        $this->conn = $db;
    }
    //get clients
    public function read(){
        //create query
        $query = 'SELECT * FROM ' . $this->table . ' ORDER BY name DESC';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //execute query
        $stmt->execute();
        return $stmt;
    }
    //get single client
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
        $this->first_name = $row['name'];
        $this->last_name = $row['email'];
        $this->phone = $row['phone'];
        $this->ref = $row['ref'];
    }
    //create client
    public function create(){
        //create query
        $query = 'INSERT INTO ' . $this->table . ' SET name = :name, email = :email, phone = :phone, ref = :ref';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //clean data
        $this->first_name = htmlspecialchars(strip_tags($this->first_name));
        $this->last_name = htmlspecialchars(strip_tags($this->last_name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->ref = htmlspecialchars(strip_tags($this->ref));
        //bind data
        $stmt->bindParam(':name', $this->first_name);
        $stmt->bindParam(':email', $this->last_name);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':ref', $this->ref);
        //execute query
        if($stmt->execute()){
            return true;
        }
        //print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);
        return false;
    }
    public function update(){
        //create query
        $query = 'UPDATE ' . $this->table . ' SET name = :name, email = :email, phone = :phone, ref = :ref WHERE id = :id';
        //prepare statement
        $stmt = $this->conn->prepare($query);
        //clean data
        $this->first_name = htmlspecialchars(strip_tags($this->first_name));
        $this->last_name = htmlspecialchars(strip_tags($this->last_name));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->ref = htmlspecialchars(strip_tags($this->ref));
        $this->id = htmlspecialchars(strip_tags($this->id));
        //bind data
        $stmt->bindParam(':name', $this->first_name);
        $stmt->bindParam(':email', $this->last_name);
        $stmt->bindParam(':phone', $this->phone);
        $stmt->bindParam(':ref', $this->ref);
        $stmt->bindParam(':id', $this->id);
        //execute query
        if($stmt->execute()){
            return true;
        }
        //print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);
        return false;
    }
    //delete client
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

?>