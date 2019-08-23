<?php

$file = fopen( "file.txt", "r" );

while ( !feof( $file ) )
{
    echo fgetc( $file )."<br />";
}

fclose( $file );


?>




