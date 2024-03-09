<section>
    <h3>QUE:1 Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the
        number as an argument.</h3>
    <?php

    function factorial($n)
    {
        if ($n < 0) {
            return null; // Factorial of negative numbers is undefined
        }
        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }

    // Example usage
    $num = 5;
    $fact = factorial($num);
    echo "Factorial of $num is: $fact";

    ?>


</section>
<BR>
<section>
    <h3>QUE:2 Write a PHP function to test which number is greater than other using ternary operator</h3>
    <?php

    function compareNumbers($num1, $num2)
    {
        $result = $num1 > $num2 ? "$num1 is greater than $num2" : "$num1 is less than or equal to $num2";
        return $result;
    }

    // Example usage
    $num1 = 5;
    $num2 = 10;
    echo compareNumbers($num1, $num2);

    ?>

</section>
<br>
<section>
    <h3>QUE:3 Write a program to swap two given numbers using call by value.</h3>
    <?php
    function swap($a, $b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
        echo "After swapping:\n";
        echo "a = $a\n";
        echo "b = $b\n";
    }

    // Example usage
    $num1 = 5;
    $num2 = 10;

    echo "Before swapping:\n";
    echo "a = $num1\n";
    echo "b = $num2\n";

    swap($num1, $num2);

    echo "After function call:\n";
    echo "a = $num1\n";
    echo "b = $num2\n";
    ?>
</section>
<br>
<section>
    <h3>QUE:4 Write a program to swap two given numbers using call by reference.</h3>
    <?php
    function swape(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;
        echo "After swapping:\n";
        echo "a = $a\n";
        echo "b = $b\n";
    }

    // Example usage
    $num1 = 5;
    $num2 = 10;

    echo "Before swapping:\n";
    echo "a = $num1\n";
    echo "b = $num2\n";

    swape($num1, $num2);

    echo "After function call:\n";
    echo "a = $num1\n";
    echo "b = $num2\n";

    ?>
</section>
<br>
<section>
    <h3>QUE:5 Write a function called vowelCount which accepts a string as a parameter(user input), and returns the
        number of vowels in the in string. Vowels include a, e, i, o, and u. You may assume the string will be all
        lowercase.</h3>
    <?PHP
    function vowelCount($str) {
        $vowels = array('a', 'e', 'i', 'o', 'u');
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
          if (in_array($str[$i], $vowels)) {
            $count++;
          }
        }
        return $count;
      }
    $input_string = "hello world";
    echo vowelCount($input_string); // Output: 3
      
      
    ?>
</section>