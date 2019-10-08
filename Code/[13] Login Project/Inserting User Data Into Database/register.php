<?php

require_once( "userclass.php" );

$userObj = new User( );

if ( isset( $_POST["formSubmitted"] ) )
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    
    $userObj->Register( $username, $password, $confirmpassword, $email );
}

?>

<!DOCTYPE html>
<html>
    <body>
        <form action="register.php" method="POST">
            <div>Username</div>
            <input type="text" name="username" />
            
            <div>Email Address</div>
            <input type="email" name="email" />
            
            <div>Password</div>
            <input type="password" name="password" />
            
            <div>Confirm Password</div>
            <input type="password" name="confirmpassword" />
            
            <input type="hidden" name="formSubmitted" value="1" />
            
            <br />
            
            <input type="submit" value="Register" />
        </form>
    </body>
</html>







