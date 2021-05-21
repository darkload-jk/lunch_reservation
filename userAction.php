<?php
    require_once "classes/users.php";
    $user = new user();

    if(isset($_POST['register'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password = md5($_POST['password']);
        $create_account= $user->createAccount($username, $password);

        if($create_account == true){
            $user->createUser($first_name, $last_name, $email, $total_fee);
        }
    
    }elseif(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $user->login($username, $password);

    }elseif(isset($_POST['reservate'])){ //Not elseif because reservate function is worked when users log in and because the warning which undefined value total_fee. 
        $menu =$_POST['menu'];
        $id = $_SESSION['user_id'];
        $user_data = $user->get_user_fees($id);
        $price = $user->add_users_fee($menu);
        // $total = $user->add_users_fee($menu, $total_fee);      
        $savingfee = $user->saving_fee($id, $price);    //How can I link to $total_fee in the profile.php as $saving_fee?            
    }

    // if(isset($_POST['update'])){
        //     $first_name = $_POST['first_name'];
        //     $last_name = $_POST['last_name'];
        //     $email = $_POST['email'];
        //     $username = $_POST['username'];
        //     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //     $id = $_POST['user_id'];
    
            // $validate = $user->update_account($username, $password, $id);
            // if($validate == TRUE){
            //     $user->update_user($first_name, $last_name, $email, $username, $id);
            // }else{
            //     echo "UPDATE ACCOUNT TABLE IS NOT WORKING";
            // }
    // }

?>