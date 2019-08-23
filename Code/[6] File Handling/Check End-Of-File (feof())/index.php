<?php

$file = fopen( "file.txt", "r" );

while ( !feof( $file ) )
{
    echo fgets( $file )."<br />";
}

fclose( $file );


?>




