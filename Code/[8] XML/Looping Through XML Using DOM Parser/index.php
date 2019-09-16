<?php

$xmlDocument = new DOMDocument( );
$xmlDocument->load( "example.xml" );

$rootNode = $xmlDocument->documentElement;

foreach( $rootNode->childNodes as $node )
{
    echo $node->nodeName." - ".$node->nodeValue."<br />";
}

?>








