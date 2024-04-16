<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>

    <style>
        .greeting{
            color:magenta;
            font-size:20px;
            text-transform: none;
        }
    </style>
</head>
<body>
    <h1>Data Types</h1>

    <?php
    $birthYear=2004; //My Birth Year(Integer)
    $currentYear=date("Y"); // Current Year
    $name = null;
    $height=5.11; // My Height(Float)
    $age=$currentYear - $birthYear; // Calculation of My Current Age(Integer)
    $hobbies=["Singing", "Playing the piano","Playing football", "Drawing","Gaming","Playing golf"]; // Array
    $age_above_30=$age>30; // Setting the Age above 30 to True(Boolean)
    $greeting = "Hello, My name is $name and I am $age years old. My height is $height meters"; // Statement (String) 

    echo "<p class= 'greetings'>$greeting</p>";
    echo "<p>My Hoobies are: ";
    echo implode(",", $hobbies); // We use implode function to Display individual item from the Array
    echo"</p>";

    echo "<p class= 'greeting'>$greeting</p>"; // Output
    
    if($age_above_30) {
        echo"<p>This person is over 30 years old, thus exempt them</p>"; // If the condition is True
    } else {
        echo "<p>This person is qualified</p>"; // If the condition is false
    }
     ?>
</body>
</html>