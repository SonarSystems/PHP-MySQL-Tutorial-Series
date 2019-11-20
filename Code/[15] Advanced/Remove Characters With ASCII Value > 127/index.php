<?php

$string = "<h1>Hello World</h1>";

$sanitisedString = filter_var( $string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH );

echo $string."<br />";
echo $sanitisedString;

?>