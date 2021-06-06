<?php
session_start();
    class database {
        private $server_name = "localhost";
        private $db_username = "root";
        private $db_password = "";
        private $database = "company_x";
        public $conn;
        
        // constructor ~~ a method that is automatically created when an object is created.
        public function __construct(){
            $this->conn = new mysqli($this->server_name, $this->db_username, $this->db_password, $this->database);
            
            if($this->conn->connect_error) {
                die("Connection Failed: ".$this->conn->connect_error);
            }           
            return $this->conn;
        }      
    }
?>