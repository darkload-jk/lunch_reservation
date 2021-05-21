<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mx-auto w-50 my-5 border-0">
            <div class="text-center bg-white border-0 text-dark">
                <h1 class="text-center">REGISTRATION</h1>
            </div>

            <div class="card-body">
                <form action="userAction.php" method="post">
                    <div class="form-row mt-4">
                        <div class="form-group col-md-6">
                            <input type="text" name="first_name" placeholder="First name" class="form-control p-4" required>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" name="last_name" placeholder="Last name" class="form-control p-4" required>
                        </div>      
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" name="email" placeholder="Email" class="form-control p-4" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="username" placeholder="Username" class="form-control p-4" required>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="password" name="password" placeholder="Password" class="form-control p-4" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="submit" value="Register" name="register" class="btn btn-primary form-control　btn-lg">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>   
</body>
</html>