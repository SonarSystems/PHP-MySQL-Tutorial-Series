<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require( "Exception.php" );
require( "PHPMailer.php" );
require( "SMTP.php" );

$mail = new PHPMailer( TRUE );

try
{
  $mail->setFrom( "contact@sonarink.co.uk", "Darth Vader" );
  
  $mail->addAddress( "support@sonarsystems.co.uk", "Jed Master Frahaan" );
  
  $mail->Subject = "Force Subject";
  
  $mail->IsHTML( true );
  $mail->Body = "<div style='color:red;'>This is the <b>force</b></div>";
  $mail->AltBody = "This is the force";
  
  $mail->Send( );
}
catch ( Exception $e )
{
  echo $e->errorMessage( );
}
catch ( \Exception $e )
{
  echo $e->getMessage( );
}

?>






