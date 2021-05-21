<?php
include 'userAction.php'; 
include 'profile.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Lunch Reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid mt-3">
        <div class="jumbtron bg-info text-right">
            <h4 class="display-4 text-center">Select Menu</h4><br>

        </div>
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
        <?php echo "hello ".$_SESSION['first_name']." ".$_SESSION['last_name'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong></strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
      </div>
      <div class="container">
        <div class="card mx-auto w-50 my-5 border-0">
            <div class="card-header bg-white text-dark border-0">
                <h1 class="text-center">Menu Lists</h1><br>
                <h2 class="text-center">Reservation Deadline: 9:00 AM</h2>
            </div>

            <div class="card-body">
              <form action="userAction.php" method="POST">
                  <input type="radio" name="menu" value="dayluncha" class="mt-2" required>
                  <label>Today's Lunch(A-Class 600 yen)</label><br>
                  <input type="radio" name="menu" value="noodle" class="mt-2" required>
                  <label>Noodle(500 yen)</label><br>
                  <input type="radio" name="menu" value="bowl" class="mt-2" required>
                  <label>Bowl(500 yen)</label><br>
                  <input type="radio" name="menu" value="daylunchs" class="mt-2" required>
                  <label>Today's Lunch(S-Class 800 yen)</label><br>
                  <button type="submit" name="reservate" class="mt-5 btn btn-success">Reservate</button>
              </form>
            </div>
            <div class="card-footer">
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