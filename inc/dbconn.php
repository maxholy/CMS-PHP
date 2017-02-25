<?php
class dbconn {
    private $conn;

    // Connecting to database
    public function connect() {
        require_once 'inc/config.php';

        // Connecting to mysql database
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        // return database handler
        return $this->conn;
    }
}