<?php

$to = "support@sonarsystems.co.uk";

$from = "contact@sonarink.co.uk";
$fromName = "Sonar Ink";

$subject = "Email attachment using mail function";

$file = "dummy.pdf";

$body = "<h1>File attached, the meaning of life</h1>";

$headers = "From: $fromName"." <".$from.">";

$semiRand = md5( time( ) );
$mimeBoundary = "==Multipart_Boundary_x{$semiRand}x";

$headers .= "\nMIME-Version: 1.0\n"."Content-Type: multipart/mixed;\n"." boundary=\"{$mimeBoundary}\"";

$message = "=={$mimeBoundary}\n"."Content-Type: text/html; charset=\UTF-8\"\n"."Content-Transfer-Encoding: 7bit\n\n".$body."\n\n";

if ( !empty( $file ) > 0)
{
  if ( is_file( $file ) )
  {
    $message .= "--{$mimeBoundary}\n";
    $fp = fopen( $file, "rb" );
    $data = fread( $fp, filesize( $file ) );
    
    fclose( $fp );
    $data = chunk_split( base64_encode( $data ) );
    $message .= "Content-Type: application/octet-stream; name=\"".basename( $file )."\"\n"."Content-Description: ".basename( $file )."\n"."Content-Disposition: attachment;\n"." filename=\"".basename( $file )."\"; size=".filesize( $file ).";\n"."Content-Transfer-Encoding: base64\n\n".$data."\n\n";
  }
}

$message .= "--{$mimeBoundary}--";
$returnPath = "-f". $from;

$mail = mail( $to, $subject, $message, $headers, $returnPath );

echo $mail?"Mail sent":"Mail failed";

?>












