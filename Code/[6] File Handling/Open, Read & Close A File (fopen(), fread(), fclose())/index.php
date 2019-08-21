<?php

$file = fopen( "file.txt", "r" );

$processed = fread( $file, filesize( "file.txt" ) );

fclose( $file );

echo $processed;

?>




