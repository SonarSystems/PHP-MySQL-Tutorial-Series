<?php

$to = "support@sonarsystems.co.uk";
$subject = "Epic Subject";

$body =
"
<html>
  <head>
    <title>Epic Title</title>
  </head>
  
  <body>
    <h1 style='color: red'>This is a header in an email</h1>
    
    <div>
      <i>Epic body</i>
    </div>
  </body>
</html>
";

$headers = "MIME-Version: 1.0". "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
$headers .= "From: contact@sonarink.co.uk";

mail( $to, $subject, $body, $headers );

?>