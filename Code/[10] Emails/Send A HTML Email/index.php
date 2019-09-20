<?php

$to = "support@sonarsystems.co.uk";
$subject = "Test Email";
$message = "Hello, how is me?";
$headers = "From: admin@sonarsystems.co.uk";

$result = mail( $to, $subject, $message, $headers );
var_dump( $result );

?>