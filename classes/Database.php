<?php 

class Database{
    private $servername = 'localhost'; //default
    private $username = 'root'; // default
    private $password = ''; //for mac: default password is "root"
    private $db_name = 'library_db'; // database name from PHPMYADMIN
    public $conn;

    // __construct automatically runs without you calling it.
    function __construct()
    {
        //creating connection to your database: PHP---->MYSQL
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);

        if($this->conn == true){  //if there is no error: return the connection: $this->conn
            return $this->conn;
        }else{
            echo "error in database connection"; // if there is an error, display a message
        }
      
    }

}



?>