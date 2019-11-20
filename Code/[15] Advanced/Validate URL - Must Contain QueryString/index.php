<?php

$url = "https://www.google.com?profile=frahaan";

if ( filter_var( $url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED ) )
{
    echo "Valid URL with a query string";
}
else
{
    echo "Invalid URL or does not contain a query string";
}

?>