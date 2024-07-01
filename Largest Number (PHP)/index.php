<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the largest number using PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card">
        <h1>Find the largest number using PHP </h1>
        <?php
        $num1 = 4;
        $num2 = 5;
        $num3 = 6; ?>

    <p><?php echo "First number is : " .$num1 ?> </p>
    <p> <?php echo "Second number is : " .$num2 ?>  </p>
    <p> <?php echo "Third number is : " .$num3 ?> </p>
    <?php
        if ($num1 >= $num2 && $num1 >= $num3) {
            echo "<p>Largest Number is: " . $num1 . "</p>";
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            echo "<p>Largest Number is: " . $num2 . "</p>";
        } else {
            echo "<h2>Largest Number is: " . $num3 . "</h2>";
        }
        ?>



    </div>
</body>

</html>