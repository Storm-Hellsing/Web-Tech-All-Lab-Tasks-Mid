<?php

    echo("The odd numbers between 1 ---> 100: ");

    for ($i = 10; $i <= 100; $i++) 
    {
        if ($i % 2 != 0)
        {
            echo($i."   ");
        }
    }

?>