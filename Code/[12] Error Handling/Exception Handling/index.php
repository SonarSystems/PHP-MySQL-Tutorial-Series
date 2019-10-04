<?php

$i = 10;

function CheckNumber( $number )
{
    if ( $number > 10 )
    {
        throw new Exception( "Number too large!!!" );
    }
    
    return true;
}

try
{
    CheckNumber( $i );
    
    echo "Everything is a OK :D<br />";
}
catch ( Exception $e )
{
    echo "Message of exception is: ".$e->getMessage( );
}



?>