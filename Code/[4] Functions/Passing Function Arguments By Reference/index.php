<?php

function Multiplier( &$num1 )
{
    $num1 = $num1 * $num1;
}

$number = 10;

Multiplier( $number );

echo $number;

?>









