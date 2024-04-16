<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <pre>
        <?php
        //while
        $i = 1;
        while ($i < 6){
            if ($i== 3) break;
            echo $i;
            $i++;
        }
        //Do while
        do {
            echo $i;
            $i++;
        }while($i <6);
        //for
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }
        //foreach
        $fruits = array("orange", "mango", "apple", "banana");
        foreach ($fruits as $y) {
            echo "$y <br>";
        }
        ?>
    </pre>
</body>
</html>