<?php

$file = fopen( "file.txt", "r" );

echo fgets( $file )."<br />";
echo fgets( $file )."<br />";
echo fgets( $file )."<br />";


fclose( $file );


?>




