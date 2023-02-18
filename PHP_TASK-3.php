<?php 

    $odd = 5;
    $even = 8;

    if($odd%2 != 0)
    {
        echo("Number: {$odd}\r\n");
        echo("The number is odd.\r\n");
        echo("\r\n");
    }
    else
    {
        echo("The number is not odd.\r\n");
    }

    if($even%2 == 0)
    {
        echo("Number: {$even}\r\n");
        echo("The number is even.\r\n");
        echo("\r\n");
    }
    else
    {
        echo("The number is not even.\r\n");
    }
   
?>