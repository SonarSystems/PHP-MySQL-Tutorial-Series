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
    //print_r( $parsed );
    echo "<br />";
    echo $parsed->note[0]->to."<br />";
    echo $parsed->note[0]->from."<br />";
    echo $parsed->note[0]->heading."<br />";
    echo $parsed->note[0]->body."<br />";
    
    echo "<br />";
    echo $parsed->note[1]->to."<br />";
    echo $parsed->note[1]->from."<br />";
    echo $parsed->note[1]->heading."<br />";
    echo $parsed->note[1]->body."<br />";
}

?>








