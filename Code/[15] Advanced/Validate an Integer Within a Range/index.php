<?php

$number = 5;
$min = 1;
$max = 10;

if ( filter_var( $number, FILTER_VALIDATE_INT, array( "options" => array( "min_range" => $min, "max_range" => $max ) ) ) )
{
    echo "Within range";
}
else
{
    echo "Not in range";
}

?>