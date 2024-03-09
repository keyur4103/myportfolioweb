<section>
    <h3>QUE:1 Write PHP Script using two dimensional arrays such as addition of two 2x2 matrices.</h3>
    <?php

    // Define the two matrices
    $matrix1 = array(
        array(1, 2),
        array(3, 4)
    );

    $matrix2 = array(
        array(5, 6),
        array(7, 8)
    );

    // Define a function to add two matrices
    function addMatrices($matrix1, $matrix2)
    {
        // Get the dimensions of the matrices
        $rows = count($matrix1);
        $cols = count($matrix1[0]);

        // Initialize a result matrix with the same dimensions
        $result = array();
        for ($i = 0; $i < $rows; $i++) {
            $result[$i] = array();
            for ($j = 0; $j < $cols; $j++) {
                $result[$i][$j] = 0;
            }
        }

        // Add the corresponding elements of the two matrices
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
            }
        }

        return $result;
    }

    // Call the function to add the matrices
    $resultMatrix = addMatrices($matrix1, $matrix2);

    // Display the result matrix
    echo "Result Matrix:<br>";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            echo $resultMatrix[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>

</section>
<br>
<section>
    <h3>QUE:2 Write PHP Script to demonstrate use of associative arrays and for FOR EACH loop execution.</h3>
    <?php

    // Define an associative array
    $person = array(
        "name" => "John",
        "age" => 25,
        "gender" => "Male",
        "occupation" => "Programmer"
    );

    // Access individual elements of the array
    echo "Name: " . $person["name"] . "<br>";
    echo "Age: " . $person["age"] . "<br>";
    echo "Gender: " . $person["gender"] . "<br>";
    echo "Occupation: " . $person["occupation"] . "<br>";

    // Use a foreach loop to iterate through the array
    echo "<br>Using foreach loop:<br>";
    foreach ($person as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

    ?>

</section>
<br>
<section>
    <h3>QUE:3 Write a PHP script to print user input values.

        1.Create a form that accept name of user as well as Hobbies (using Checkbox)
        2.After submission, form data will be sent to another page
        3.Display the result i.e. name of the user and hobbies of user.
        4.Both inputs are mandatory validation.</h3>
    <!DOCTYPE html>
    <html>

    <head>
        <title>User Input Form</title>
    </head>

    <body>
        <form method="post" action="result.php">
            <label>Name:</label>
            <input type="text" name="name" required pattern="[a-zA-Z\s]+"
                title="Name must contain only letters and spaces"><br><br>

            <label>Hobbies:</label><br>
            <input type="checkbox" name="hobbies[]" value="reading">Reading<br>
            <input type="checkbox" name="hobbies[]" value="writing">Writing<br>
            <input type="checkbox" name="hobbies[]" value="playing">Playing<br>
            <input type="checkbox" name="hobbies[]" value="swimming">Swimming<br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>

    </html>


</section>