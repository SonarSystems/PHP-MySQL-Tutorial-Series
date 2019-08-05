<?php

$guess = "blue";
$number = 10;


// == - equal
// === - type check equal
// > - greater than
// < - less than
// >= - greater than or equal to
// <= - less than or equal to
// != or <> - not equal
// !== - type check not equal
if ( $guess == "Red" )
{
    echo "Well done, you are so smart, that is my favourite colour.";
}
else if ( $guess == "Green" )
{
    echo "This is my second favourite colour.";
}
else if ( $number > 5 )
{
    echo "Greater than 5";
}
else
{
    echo "Incorrect";
}

?>