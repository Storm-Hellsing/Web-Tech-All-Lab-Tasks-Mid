<?php

    $numbers = array(11, 22, 33, 44, 55, 66, 77, 88, 99);
    $search = 77;
    $found = false;

    echo("Number list: ");
    for ($i = 0; $i < count($numbers); $i++) 
    {
        echo($numbers[$i]." ");
    }

    echo("\r\n");
    echo("\r\n");

    for ($i = 0; $i < count($numbers); $i++) 
    {
        if ($numbers[$i] == $search) 
        {
            $found = true;
            break;
        }
    }

    if ($found) 
    {
        echo("The number {$search} was found in the array!");

        echo("\r\n");
        echo("\r\n");
    } 
    else 
    {
        echo "The number {$search} was not found in the array.";

        echo("\r\n");
        echo("\r\n");
    }