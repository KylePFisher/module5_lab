<?php

function getAgeMsg($age)
{
    if ($age <= 10 && $age >= 1)
    {
        return "You're rather young";
    }
    else if ($age <= 20 && $age > 10)
    {
        return "Getting older";
    }
    else if ($age <= 90 && $age > 20)
    {
        return "Filler message";
    }
    else if ($age > 120 || $age < 1)
    {
        return "Please enter a number between 1 and 120.";
    }
    else
    {
        return "Please enter a number between 1 and 120.";
    }
}


?>