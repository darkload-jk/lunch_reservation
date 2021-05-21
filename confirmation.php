<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<body>
    <h1>Reservation Completed!!</h1>
    <h2>If you finish, click <a value=logout href="login.php">here</a> to logout.</h2>
    <h2>IF you change your order, click <a href="dashboard.php">here</a> to back to the order page.</h2>
    <?php
        if(isset($_POST['logout'])) {
            mysqli_close($conn);
        }
    ?>
</body>
</html>
