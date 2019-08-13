<?php

$outsideVar = "Hi";

function Hello( )
{
    global $outsideVar;
    $insideVar = "I'm inside";
    
    echo $outsideVar." : ".$insideVar."<br />";
}

Hello( );

echo $outsideVar."<br />".$insideVar;

?>









