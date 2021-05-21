<?php

include 'userAction.php';
$user_data = $user->get_user_fees($_SESSION['user_id']);

$totalfee=0;
foreach($user_data as $row):
    $firstname = $row['first_name'];
    $lastname = $row['last_name'];
    $email = $row['email'];    
    $totalfee = $total_fee + $row['fee'];    
endforeach;
    echo "Hello,".$firstname." ".$lastname. "<br>";
    echo "You should pay ".$totalfee. "<br>";
// How can I return to the userAction.php??
?>
