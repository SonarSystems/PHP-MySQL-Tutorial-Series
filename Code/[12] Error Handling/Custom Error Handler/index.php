<?php

function ErrorHandler( $level, $message, $file, $line, $context )
{
    echo $level."<br />";
    echo $message."<br />";
    echo $file."<br />";
    echo $line."<br />";
    echo $context."<br />";
    
    die( );
}

set_error_handler( "ErrorHandler" );

echo $i;

?>