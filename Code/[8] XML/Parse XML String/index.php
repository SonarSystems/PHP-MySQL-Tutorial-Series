<?php

$xmlData = 
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>
";

$parsed = simplexml_load_string( $xmlData );

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
    print_r( $parsed );
    echo "<br />";
    echo $parsed->body;
    //echo $parsed;
}

?>








