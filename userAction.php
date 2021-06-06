<?php
    require_once "classes/users.php";
    $user = new user();

    if(isset($_POST['register'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $create_account= $user->createAccount($username, $password);
        $user_account_id = $user->createUser->insert_id;
        if($create_account == true){
            $user->createUser($first_name, $last_name, $email, $user_account_id);
        }
    
    }elseif(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $user->login($username, $password);

    }elseif(isset($_POST['reservate'])){ 
        $menu =$_POST['menu'];
        $id = $_SESSION['user_id'];
        $user_data = $user->get_user_fees($id);
        $price = $user->add_users_fee($id, $menu);     
        $savingfee = $user->saving_fee($id, $price); 

    }elseif(isset($_POST['pay'])){
        $id = $_SESSION['user_id'];
        $feeid = $_GET['fee_id'];
        $status ="paid";
       
        
        $user_fee_data = $user->update_status_paying($status, $feeid,$id);
    }

    if(isset($_POST['update'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $id = $_POST['user_id'];
        $validate = $user->update_account($username, $password, $id);
            
        if($validate == TRUE){
            $user->update_user($first_name, $last_name, $email, $username, $id);
        }else{
            echo "UPDATE ACCOUNT TABLE IS NOT WORKING";
        }
    }

?>