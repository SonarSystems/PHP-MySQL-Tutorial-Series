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
    foreach ( $parsed->children( ) as $note )
    {
        echo "<br />";
        echo $note->to."<br />";
        echo $note->from."<br />";
        echo $note->heading."<br />";
        echo $note->body."<br />";
    }
}

?>








