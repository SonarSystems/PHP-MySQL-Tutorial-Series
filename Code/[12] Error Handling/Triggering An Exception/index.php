<?php

function ExceptionHandler( $exception )
{
    echo "Exception occured: ".$exception->getMessage( )."<br />";
    
    die( );
}

set_exception_handler( "ExceptionHandler" );

$i = 11;

if ( $i > 10 )
{
    throw new Exception( "Number too large!!!" );
}

?>