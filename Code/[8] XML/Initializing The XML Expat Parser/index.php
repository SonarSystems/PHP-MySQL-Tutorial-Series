<?php

$parser = xml_parser_create( );

function start( $parser, $elementName, $elementAttr )
{
    switch ( $elementName )
    {
        case "NOTE":
            echo "**Note**<br />";
            break;
        case "TO":
            echo "To<br />";
            break;
        case "FROM":
            echo "From<br />";
            break;
        case "HEADING":
            echo "Heading<br />";
            break;
        case "BODY":
            echo "Body<br />";
            break;
    }
}

function stop( $parser, $elementName )
{
    echo "<br />";
}

function char( $parser, $data )
{
    echo $data;
}

xml_set_element_handler( $parser, "start", "stop" );

xml_set_character_data_handler( $parser, "char" );

$file = fopen( "example.xml", "r" );

while ( $data = fread( $file, 4096 ) )
{
    xml_parse( $parser, $data, feof( $file ) ) or die( sprintf( "XML Error  occured %s at line number %d", xml_error_string( xml_get_error_code( $parser ) ), xml_get_current_line_number( $parser ) ) );
}

xml_parser_free( $parser );

?>








