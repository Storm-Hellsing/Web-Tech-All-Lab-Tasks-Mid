<?php 

    $givenNumbers = [5, 8, 10];

    echo("Given Numbers: ");

    for($i = 0; $i < 3; $i++)
    {
        echo($givenNumbers[$i]."    ");
    }

    echo("\r\n");
    echo("\r\n");

    if($givenNumbers[0] > $givenNumbers[1] && $givenNumbers[0] > $givenNumbers[2])
    {
        echo("Largest Number: {$givenNumbers[0]}\r\n");
    }
    elseif($givenNumbers[1] > $givenNumbers[0] && $givenNumbers[1] > $givenNumbers[2])
    {
        echo("Largest Number: {$givenNumbers[1]}\r\n");
    }
    else
    {
        echo("Largest Number: {$givenNumbers[2]}\r\n");
    }
   
?>