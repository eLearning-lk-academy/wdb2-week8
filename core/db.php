<?php
include 'config.php';

class DB {
    private $conn;

    public function __construct(){
        $mysql = $GLOBALS['mysql'];
        $conn = new mysqli(
            $mysql['host'], 
            $mysql['username'], 
            $mysql['password'], 
            $mysql['database'],
            $mysql['port']
        );
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->conn = $conn;
    }

    public function query($sql){
        $result = $this->conn->query($sql);
        if ($result === TRUE) {
            return true;
        } else {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function queryOne($sql){
        $result = $this->conn->query($sql);
        if ($result === TRUE) {
            return true;
        } else {
            return $result->fetch_assoc();
        }
    }

    private function escape($value){
        return $this->conn->real_escape_string($value);
    }

    public function prepare($params){
        foreach ($params as $key => $value) {
            $params[$key] = $this->escape($value);
        }
        return $params;
    }

    public function insert($sql){
        $result = $this->conn->query($sql);
        if ($result === TRUE) {
            return $this->conn->insert_id;
        } else {
            return false;
        }
    }

    public function update($sql){
        $result = $this->conn->query($sql);
        if ($result === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function __destruct(){
        $this->conn->close();
    }
}