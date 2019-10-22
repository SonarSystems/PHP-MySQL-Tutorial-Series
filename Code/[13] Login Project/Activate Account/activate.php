<?php

$byte = random_bytes( 128 );
$hex = bin2hex( $byte );

require_once( "userclass.php" );

if ( !isset( $_GET["username"] ) || !isset( $_GET["code"] ) )
{
  die('<script type="text/javascript">window.location=\'index.php\';</script>');
}
else
{
  $userObj = new User( );
  
  $username = $_GET["username"];
  $code = $_GET["code"];
  
  if ( $userObj->Activate( $username, $code ) )
  {
    $message = "Account activated, please sign in.";
    die( '<script type="text/javascript">window.location=\'login.php?message='.$message.'\';</script>' );
  }
  else
  {
    die( '<script type="text/javascript">window.location=\'index.php\';</script>' );
  }
}

?>