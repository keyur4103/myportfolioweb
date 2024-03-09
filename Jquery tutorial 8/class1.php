<h3>QUE:1Write PHP Script to print N number of Fibonacci series using do while loop (Value of N will be entered by user
    through input box.)</h3>
<section>
    <html>

    <body>
        <form>
            Enter the number of terms: <input type="text" name="number1">
            <input type="submit" value="Submit">
        </form>
    </body>

    </html>

    <?php
    if (isset($_GET['number1'])) {
        $n = $_GET['number1'];
        $first = 0;
        $second = 1;
        echo "The first $n terms of Fibonacci series are: ";
        $count = 0;
        do {
            echo "$first ";
            $next = $first + $second;
            $first = $second;
            $second = $next;
            $count++;
        } while ($count < $n);
    }
    ?>

</section>
<br>
<section>
    <h3>QUE:2 Write a PHP program to print the sum of digits using a while loop(356=3+5+6) and digits are user input.
    </h3>
    <html>

    <body>
        <form>
            Enter the number: <input type="text" name="number2">
            <input type="submit" value="Submit">
        </form>
    </body>

    </html>

    <?php
    if (isset($_GET['number2'])) {
        $num = $_GET['number2'];
        $sum = 0;
        while ($num != 0) {
            $sum += $num % 10;
            $num = (int) ($num / 10);
        }
        echo "The sum of digits is: $sum";
    }
    ?>


</section>
<br>
<section>
    <h3>QUE:3 Write a PHP program to print N prime numbers using a for loop (Value of N will be entered by the user
        through
        the input box.</h3>
    <html>

    <body>
        <form>
            Enter the number of prime numbers: <input type="text" name="number3">
            <input type="submit" value="Submit">
        </form>
    </body>

    </html>

    <?php
    if (isset($_GET['number3'])) {
        $n = $_GET['number3'];
        $count = 0;
        $num = 2;
        echo "The first $n prime numbers are: ";
        while ($count < $n) {
            $isPrime = true;
            for ($i = 2; $i <= (int) ($num / 2); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo "$num ";
                $count++;
            }
            $num++;
        }
    }
    ?>

</section>
<br>
<section>
    <h3>QUE:4 Write a Program for Bubble sorting in an array(11,22,44,19,4,5,33,16,8,55)</h3>
    <?php
    $array = array(11, 22, 44, 19, 4, 5, 33, 16, 8, 55);
    $size = count($array);

    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = 0; $j < $size - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    echo "Sorted array: ";
    foreach ($array as $value) {
        echo "$value ";
    }
    ?>
</section>
<br>
<section>
    <h3>QUE:5 Write a PHP script using a nested for loop that creates as shown below.</h3>
    <html>

    <body>
        <table width="270" cellspacing="0" cellpadding="0" border="1">
            <?php
            for ($row = 1; $row <= 8; $row++) {
                echo "<tr>";
                for ($col = 1; $col <= 8; $col++) {
                    $total = $row + $col;
                    if ($total % 2 == 0) {
                        echo "<td height=30 width=30 bgcolor=#FFFFFF></td>";
                    } else {
                        echo "<td height=30 width=30 bgcolor=#000000></td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>

    </html>

</section>