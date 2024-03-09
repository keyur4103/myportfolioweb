<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user's input from the login form
    $email = $_POST['email'];
    $userPassword = $_POST['password'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "register";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the user's login credentials are valid
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$userPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User has entered valid login credentials
        echo "Login successful!";
    } else {
        // User has entered invalid login credentials
        echo "Invalid email or password.";
    }

    $conn->close();
}
?>
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Login and Sign Up</title>
    <style>
      body{
        background-image: url("./anton-2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h1 class="text-center">Welcome</h1>
          <p class="text-center">To access your account, please log in below.</p>

          <!-- Login Form -->
          <form method="POST" action="">
            <div class="form-group">
              <label for="login-email">Email address</label>
              <input type="email" class="form-control" id="login-email" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
              <label for="login-password">Password</label>
              <input type="password" class="form-control" id="login-password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </form>
          <p class="text-center">Don't have an account? <a href="signup.php" id="show-signup-form" target="_blank">Sign up here</a>.</p>
        </div>
      </div>
    </div>
  </body>
</html>


    
     