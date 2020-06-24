<?php

class dbController{
    private $conn;

    public function __construct($host,$user,$pass,$db){
        $this->conn = new mysqli(
            $this->host=$host,
            $this->user=$user,
            $this->pass=$pass,
            $this->db=$db
        );
        return $this->conn;
    }

    public function logError($error,$sql) {
        $message = '<p> Error: '.$error.'</p>';
        $message = '<p> Query: '.$sql.'</p>';

        echo $message;
    }

    public function cleanUp($value){
        $value = trim(htmlentities($value));
        $value = $this->conn->real_escape_string($value);
        return $value;
    }

    public function executedQuery($sql){
        $result = $this->conn->query($sql);
        if($this->conn->error){
            echo "<p> Error in SQl query:$sql </p>";
            echo $this->conn->error;
            return false;
        }
        else {
            return true;
        }
    }

    public function uploadImage($temp,$dest){
        if (move_uploaded_file($temp,$dest)){
            echo "Image moved to the folder";
        }
        else{
            echo "Image not moved to the folder";
        }
    }

    public function getOneRecord($sql){
        $result = $this->conn->query($sql);
        if ($this->conn->error){
            $this->logError($this->conn->error, $sql);
            return false;
        }
        else{
        $row = $result->fetch_assoc();
        return $row;    
        }
    }

    public function getAllRecord($sql){
        $result = $this->conn->query($sql);
        if ($this->conn->error){
            $this->logError($this->conn->error, $sql);
            return false;
        }
        else{
            while($row = $result->fetch_assoc()){
                $resultset[]=$row;
            }
            if(!empty($resultset)){
                return $resultset;
            }
        }
    }

    public function checkLogin($username, $password) {

        $username = $this->cleanUp($username);
        $password = $this->cleanUp($password);
        $sql = "SELECT * FROM login WHERE user='$username' and password='$password'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        $count = $result->num_rows;

        if ($count > 0) {

            $user = array (
                'firstname' => $row['firstname'],
                'lastname' => $row['lastname'],
            );

            session_start();
            $_SESSION['login'] = $user;
            return true;
        } else {
            return false;
        }


    }

    public function logOut() {
        if (isset($_SESSION['login'])){
            $_SESSION = array();
            session_unset();
            session_destroy();
        }
    }

}

?>