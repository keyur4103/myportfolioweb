<!DOCTYPE html>
<html>
<head>
	<title>User Input Result</title>
</head>
<body>
	<?php
		if(isset($_POST["submit"])){
			// Get name from form data
			$name = $_POST["name"];

			// Get hobbies from form data
			if(isset($_POST["hobbies"])){
				$hobbies = $_POST["hobbies"];
				$hobbies_str = implode(", ", $hobbies);
			}
			else{
				$hobbies_str = "No hobbies selected";
			}

			// Display result
			echo "<h1>Result</h1>";
			echo "Name: " . $name . "<br>";
			echo "Hobbies: " . $hobbies_str . "<br>";
		}
	?>
</body>
</html>
