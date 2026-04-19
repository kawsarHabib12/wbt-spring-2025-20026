<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Test</h1>
    <?php
        echo "Hello, World!" . "<br>";
         echo " Task 1." ."<br>";
        $length = 10;
        $width = 5;
        $Rectangle = $length * $width;
        echo " Rectangle is: " . $Rectangle ."<br>";
        $perimeter = 2 * ($length + $width);
        echo "The perimeter is: " . $perimeter. "<br>";

        echo "Task 2.". "<br>";
        $amount = 1000;
        $vat= $amount * 0.15;
        $total = $amount + $vat;
        echo "The total amount is: " . $total;
        
        echo "Task 3." . "<br>";
        $number = 5;
        if ($number % 2 == 0) {
            echo "The number is even.";
        } else {
            echo "The number is odd.";
        }

        echo "Task 4." . "<br>";
        $a= 10;
        $b= 20;
        $c= 30;
        if ($a > $b && $a > $c) {
            echo "The largest number is: " . $a;
        } elseif ($b > $a && $b > $c) {
            echo "The largest number is: " . $b;
        } else {
            echo "The largest number is: " . $c;
        }

         echo "Task 5." . "<br>";

         for ($i = 10; $i <= 100; $i++) 
            {
                if ($i % 2 != 0) {
                  echo $i . " ";
                }
            }

            echo "<br>";
            echo "Task 7.a" . "<br>";

            for ($i = 1; $i <= 5; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
                echo "Task 7.b" . "<br>";

            for( $i = 3; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo $j . " ";
                }
                echo "<br>";
            }
                echo "Task 7.c" . "<br>";
            
           $ch = 'A';

            for ($i = 1; $i <= 3; $i++) {
               for ($j = 1; $j <= $i; $j++) {
                 echo $ch . " ";
                 $ch++;
                     }  
                echo "<br>";
              }
    ?>
    
</body>
</html>