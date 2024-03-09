<?php
echo '
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Sign Up</title>
    <style>
    body{
           background-image: url("./antom-1.jpg");
           background-size: cover;
           min-height: 60vh;
           position: relative;
           font-weight: bold;

          
        }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-7 offset-md-5">
          <h1 class="text-center">Sign Up</h1>
          <p class="text-center">Create a new account by filling out the form below.</p>

          <form method="POST" action="insert.php">

            <p>NAME</p>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First NAME">
              </div>
              <div class="col">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last NAME">
              </div>
            </div>
             
            <div class="form-group">
              <label for="signup-email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>
            <div class="form-group">
              <label for="signup-city">city</label>
              <input type="text" class="form-control" id="city" name="city" placeholder="city">
            </div>
            <div class="form-group">
              <label for="signup-email">country</label>
              <input type="text" class="form-control" id="country" name="country" placeholder="country">
            </div>
            <p>GANDER</p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                MALE
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                FEMALE
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
              <label class="form-check-label" for="exampleRadios3">
                OTHER
              </label>
            </div>
            <div>
              <label for="formFileMultiple" class="form-label">select profile photo</label>
              <input class="form-control" type="file" id="formFileMultiple" multiple />
            </div>
            <div class="form-group">
              <label for="signup-password">Password</label>
              <input type="text" class="form-control" id="password" name="password" placeholder="password">
            </div>
            
            
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
    <br>
    <br>
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI2a54l9DJk0nNrS2M+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lLzn1E6enLg4JP+qdrJjK6yIQ0gNV/ZFsS+iDmYCGk/RZ+W2jT8w8T/FA0fzBJhH" crossorigin="anonymous"></script>

<script>
$(document).ready(function () {
  // Validation code goes here
  $("form").validate({
    rules: {
      first_name: {
        required: true,
        minlength: 2,
        maxlength: 50
      },
      last_name: {
        required: true,
        minlength: 2,
        maxlength: 50
      },
      email: {
        required: true,
        email: true
      },
      city: {
        required: true,
        minlength: 2,
        maxlength: 50
      },
      country: {
        required: true,
        minlength: 2,
        maxlength: 50
      },
      password: {
        required: true,
        minlength: 8,
        maxlength: 50
      }
    },
    messages: {
      first_name: {
        required: "Please enter your first name",
        minlength: "Your first name must be at least 2 characters long",
        maxlength: "Your first name cannot be more than 50 characters long"
      },
      last_name: {
        required: "Please enter your last name",
        minlength: "Your last name must be at least 2 characters long",
        maxlength: "Your last name cannot be more than 50 characters long"
      },
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email address"
      },
      city: {
        required: "Please enter your city",
        minlength: "Your city name must be at least 2 characters long",
        maxlength: "Your city name cannot be more than 50 characters long"
      },
      country: {
        required: "Please enter your country",
        minlength: "Your country name must be at least 2 characters long",
        maxlength: "Your country name cannot be more than 50 characters long"
      },
      password: {
        required: "Please enter your password",
        minlength: "Your password must be at least 8 characters long",
        maxlength: "Your password cannot be more than 50 characters long"
      }
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});

</script>

  </body>
</html>

     
';
?>