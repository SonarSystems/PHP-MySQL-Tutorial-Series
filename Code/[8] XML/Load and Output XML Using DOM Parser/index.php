<?php

$xmlDocument = new DOMDocument( );
$xmlDocument->load( "example.xml" );

print( $xmlDocument->saveXML( ) );

?>








