<?php

// 2001:cdba:0000:0000:0000:0000:3257:9652

$ipAddress = "2001:cdba:0000:0000:0000:0000:3257:9652";

if ( filter_var( $ipAddress, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 ) )
{
    echo "Valid IPv6 address";
}
else
{
    echo "Invalid IPv6 address";
}

?>