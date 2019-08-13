<?php

function Squared( $num1 )
{
    $num1 = $num1 * $num1;
    
    return $num1;
}

function Sum( $num1, $num2 )
{
    $sum = $num1 + $num2;
    
    return $sum;
}

$input1 = 12;
$input2 = 8;

$result1 = Squared( $input1 ); // 144
$result2 = Squared( $input2 ); //  64

$total = Sum( $result1, $result2 );

echo $total;

?>









