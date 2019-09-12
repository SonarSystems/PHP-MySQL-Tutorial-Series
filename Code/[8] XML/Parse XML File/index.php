<?php

$parsed = simplexml_load_file( "example.xml" );

if ( $parsed === false )
{
    echo "Failed to parse XML";
    
    foreach ( libxml_get_errors( ) as $error )
    {
        echo "<br /> $error->message<br />";
    }
}
else
{
    print_r( $parsed );
    echo "<br />";
    echo $parsed->body;
    //echo $parsed;
}

?>








