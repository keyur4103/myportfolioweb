<?php
// Change these values to match your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data and sanitize it
  $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
  $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $city = mysqli_real_escape_string($conn, $_POST["city"]);
  $country = mysqli_real_escape_string($conn, $_POST["country"]);
  
  $password = mysqli_real_escape_string($conn, $_POST["password"]);

  // Insert data into database
  $sql = "INSERT INTO users (first_name, last_name, email, city, country, password)
          VALUES ('$first_name', '$last_name', '$email', '$city', '$country','$password')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: login.php");
    
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close connection
mysqli_close($conn);
?>
