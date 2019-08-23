<?php

$file = fopen( "file.txt", "w" );

fwrite( $file, "Hello World\n" );
fwrite( $file, "New line\n" );

fclose( $file );


?>




