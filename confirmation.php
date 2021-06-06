<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>
<div class="container-fluid mt-3">
        <div class="jumbtron bg-info text-right">
            <h1 class="display-4 text-center">Reservation Completed!!</h1>
        </div>
        <div class="card mx-auto w-50 my-5 border-0">
            <h2>If you finish, click <a value=logout href="login.php">here</a> to logout.</h2>
            <h2>If you change your order, click <a href="dashboard.php">here</a> to back to the order page.</h2>
            <h2>If you check your order, click <a href="profile.php">here</a> and check whether you pay.</h2>
            <?php
                if(isset($_POST['logout'])) {
                    mysqli_close($conn);
                }
            ?>
        </div>
</div>
</body>
</html>
