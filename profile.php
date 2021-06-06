<!doctype html>
<html lang="en">

<head>
    <title>Paying Status</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'userAction.php';
    $user_data = $user->get_user_data($_SESSION['user_id']);
    // print_r($user_data);
    // // die();
    $user_fee = $user->get_user_fees($_SESSION['user_id']);
    $totalfee = $user->get_user_fees($_SESSION['user_id']);
    // var_dump($user_fee);   
    $paid_fee = 0;
    $unpaid_fee = 0;
    ?>
  

    <div class="container">
        <div class="card mx-auto w-50 my-5 border-0">
            <div class="text-center bg-white border-0 text-dark">
                <h1 class="text-center">
                    <?php echo "Hello," . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . "<br>"; ?>
                </h1>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Reservation Date</th>
                            <th>Fee to Pay</th>
                            <th>status</th>
                            <th>option</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user_fee as $row):
                        $feeid = $row['fee_id'] ?>
                        <tr>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['fee'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td>
                            <form action="userAction.php?fee_id=<?php echo $feeid ?>" method="post">                               
                                <?php if($row['status'] == "paid"){ ?>
                                <input type="submit" class="btn btn-info" value="paid" name="paid" disabled>    
                                <?php } else{ ?>
                                <input type="submit" class="btn btn-info" value="pay" name="pay"> 
                                <?php } ?>                      
                            </form>
                        </td>
                        </tr>
                    <?php endforeach?>
                    </tbody>
                </table>
                <?php
                foreach ($user_fee as $row):
                    if($row['status'] == "paid"){
                        $paid_fee = $paid_fee + $row['fee'];
                    }else{
                        $unpaid_fee = $unpaid_fee + $row['fee'];
                    }                    
                endforeach;
                ?>
                <!-- How can I fix the code to change pay button to paid one by one? Now, every button that is status of unpaid change to paid.-->
                <span class="float-right">
                    Total fees of you paid: <?php echo $paid_fee ?><br>
                    Total fees of you unpaid: <?php echo $unpaid_fee ?>
                </span><br>
                <div class="container">
                    If you finish, click <a value=logout href="login.php">here</a> to logout.<br>
                    If you change your order, click <a href="updateorder.php">here</a> to back to the order page.
                </div> 
                <?php
                    if(isset($_POST['logout'])) {
                    mysqli_close($conn);
                    }           
                ?>
            </div>
        </div>       
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>