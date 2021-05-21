<?php
require_once "database.php";

class user extends database
{
    // private $total_fee;
    // private $menu;

    // extends ~~ inheritancer ~~ iut will inherit all the properties and methods from the Database class.
    public function createAccount($username, $password){
        $sql = "INSERT INTO accounts(username, password) VALUES('$username', '$password')";
        $result = $this->conn->query($sql);

        if ($result == false) {
            die("CANNOT ADD ACCONTS: " . $this->conn->error);
        } else {
            return true;
        }
    }

    public function createUser($first_name, $last_name, $email, $total_fee){
        $user_account_id = $this->conn->insert_id;
        // $this->conn->insert_id ~~ get the last used id:r Reffer the last lessons of the standerd cource.
        $sql1 = "INSERT INTO users(first_name, last_name, email, account_id) VALUES ('$first_name', '$last_name', '$email','$user_account_id')";

        if ($this->conn->query($sql1)) {
            header("Location: login.php");
        } else {
            die("CANNOT ADD USER:" . $this->conn->error);
        }

        $sql2 = "INSERT INTO user_fees(fee, user_id) VALUES ('$total_fee', '$user_account_id')";
        if ($this->conn->query($sql2) == false) {
            die($this->conn->error);
        } else {
            return true;
        }
    }

    public function login($username, $password){
        $sql = "SELECT * FROM accounts INNER JOIN users ON accounts.account_id = users.account_id WHERE accounts.username ='$username' AND accounts.password = '$password'";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['status'] = $row['status'];
            header("Location: dashboard.php");
        }else{
            echo "Credentials don't match";
        }
    }

    public function get_user_fees($id){
        $sql = "SELECT * FROM user_fees WHERE user_id ='$id'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $array = array();
            while($row = $result->fetch_assoc()){
                $array [] = $row;
            }
            return $array;
        }
    }

    public function add_users_fee($menu){
        if($menu == 'dayluncha') {
            $price = 600;
            return $price;           
        }elseif($menu == 'noodle'){
            $price = 500;  
            return $price;          
        }elseif($menu == 'bowl'){
            $price = 500; 
            return $price;          
        }else{
            $price = 800; 
            return $price;           
        }
    }

    public function saving_fee($id, $total_fee){
        $sql = "UPDATE user_fees SET fee ='$total_fee' WHERE user_fees.user_id = '$id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('location: confirmation.php');
        }else{
            die('ERROR'.$this->conn->error);
        }
    }

        // How Can my code reflect the results of the calculation to the MySQL??
        // How Can my code represent the results of the calculation to the dashboard page?
    // public function update_user($first_name, $last_name, $address, $email, $id){
    //     $sql = "UPDATE users SET first_name = '$first_name',last_name = '$last_name',address = '$address',email = '$email' WHERE user_id ='$id'";          

    //     $result = $this->conn->query($sql);
    //     if($result == TRUE){
    //         header('location: dashboard.php');
    //     }else{
    //         die('ERROR'. $this->conn->error);
    //     }
    // }

    // public function update_account($username, $password, $id){
    //     $sql = "UPDATE accounts SET username = '$username', password ='$password' WHERE account_id = '$id'";

    //     $result = $this->conn->query($sql);
    //     if($result == TRUE){
    //         header('location: dashboard.php');
    //     }else{
    //         die('ERROR'. $this->conn->error);
    //     }
    // }

    // public function update_account_user($first_name, $last_name, $email, $username, $password, $id){
    //     $sql = "UPDATE users, accounts INNER JOIN accounts ON users.account_id = accounts.account_id SET users.first_name = '$first_name', users.last_name= '$last_name', users.email='$email', accounts.username = '$username', accounts.password = '$password' WHERE users.user_id = '$id'";

    //     $result = $this->conn->query($sql);
    //     if($result == TRUE){
    //         header('location: dashboard.php');
    //     }else{
    //         die('ERROR'.$this->conn->error);
    //     }
    // }
}


