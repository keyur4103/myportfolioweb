<h3>QUE:1</h3>
<section>
    <?php

    $subject1 = 85;
    $subject2 = 90;
    $subject3 = 75;
    $subject4 = 95;
    $subject5 = 80;

    $total_marks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $percentage = ($total_marks / 500) * 100;

    switch (true) {
        case ($percentage >= 90):
            $grade = 'A+';
            break;
        case ($percentage >= 80):
            $grade = 'A';
            break;
        case ($percentage >= 70):
            $grade = 'B';
            break;
        case ($percentage >= 60):
            $grade = 'C';
            break;
        default:
            $grade = 'F';
            break;
    }

    echo "Total Marks: $total_marks<br>";
    echo "Percentage: $percentage<br>";
    echo "Grade: $grade";

    ?>
</section>
<br>
<h3>QUE:2</h3>
<section>


    <?php
    $num1 = 25;
    $num2 = 30;
    $num3 = 20;

    if ($num1 >= $num2 && $num1 >= $num3) {
        $max = $num1;
    } else if ($num2 >= $num1 && $num2 >= $num3) {
        $max = $num2;
    } else {
        $max = $num3;
    }

    echo "The maximum number is: $max";

    ?>
</section>
<br>
<h3>QUE:3</h3>
<section>
    <?php
    $company = 'Maruti';
    $model = 'Ertiga';

    switch ($company) {
        case 'Maruti':
            switch ($model) {
                case 'Ertiga':
                    $price = 745000;
                    break;
                case 'Swift':
                    $price = 585000;
                    break;
                default:
                    $price = 0;
                    break;
            }
            break;
        case 'Hyundai':
            switch ($model) {
                case 'i20':
                    $price = 750000;
                    break;
                case 'Creta':
                    $price = 950000;
                    break;
                default:
                    $price = 0;
                    break;
            }
            break;
        case 'Kia':
            switch ($model) {
                case 'Seltos':
                    $price = 850000;
                    break;
                case 'Carens':
                    $price = 750000;
                    break;
                default:
                    $price = 0;
                    break;
            }
            break;
        default:
            $price = 0;
            break;
    }

    if ($price == 0) {
        echo "Invalid Company or Model";
    } else {
        echo "The price of $company $model is $price";
    }

    ?>

</section>
<br>
<h3>QUE:4</h3>
<section>
    <?php
    $units = 300;

    if ($units <= 50) {
        $bill = $units * 3.50;
    } else if ($units <= 150) {
        $bill = 50 * 3.50 + ($units - 50) * 4.00;
    } else if ($units <= 250) {
        $bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
    } else {
        $bill = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
    }

    echo "The electricity bill for $units units is $bill";

    ?>


</section>
<br>
<h3>QUE:5</h3>
<section>
    <?php
    $num1 = 10;
    $num2 = 5;
    $operator = '+';

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Error: Division by zero";
                break;
            }
        default:
            echo "Error: Invalid operator";
            break;
    }

    if (isset($result)) {
        echo "The result of $num1 $operator $num2 is $result";
    }

    ?>

</section>