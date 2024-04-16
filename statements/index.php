<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
</head>
<body>
    <pre>
    <?php
    // if statement
    if (11 > 9) {
        echo "It's break time!";
    }

    $time = 1;
    if ($time == 1) {
        echo "Home time, have a good day!";
    }
    // if...else statement
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    }else {
        echo "Have a good night!";
    }
    // if...elseif...else
     if ($t <"10") {
        echo "Have a good morning!";
    }elseif ($t < "20") {
        echo "Have a good day!";
    }else {
        echo "Have a good night!";
    }
    // switch
    $favcolor = "blue";

    switch ($favcolor) {
    case "blue":
          echo "Your favorite color is blue!";
          break;
    case "red":
          echo "Your favorite color is red!";
         break;
    case "Pink":
          echo "Your favorite color is pink!";
          break;
    default:
           echo "Your favorite color is neither blue, red nor  green!";
    }
    ?>
    </pre>
</body>
</html>