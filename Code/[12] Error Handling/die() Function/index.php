<?php

if ( file_exists( 'simple.xml' ) )
{
    echo "File exists<br />";
}
else
{
    die( "File not found, need file to continue!<br />" );
}

echo "The rest of the code<br />";

?>