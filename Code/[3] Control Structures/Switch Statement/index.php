<?php

$guess = "Red";


/*if ( $guess == "Red" )
{
    echo "Favourite colour is red.";
}
else if ( $guess == "Green" )
{
    echo "Favourite colour is green.";
}
else if ( $guess == "Blue" )
{
    echo "Favourite colour is blue.";
}
else if ( $guess == "Yellow" )
{
    echo "Favourite colour is yellow";
}
else
{
    echo "Incorrect";
}*/

switch ( $guess )
{
    case "Red":
        echo "Favourite colour is red.";
        break;
        
    case "Green":
        echo "Favourite colour is green.";
        break;
        
    case "Blue":
        echo "Favourite colour is blue.";
        break;
        
    case "Yellow":
        echo "Favourite colour is yellow.";
        break;
        
    default:
        echo "Not a favourite colour";
}

?>









