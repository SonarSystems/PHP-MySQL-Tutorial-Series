<?php

require_once( "userclass.php" );

$userObj = new User( );

$accountCreated = array( );
$errors;

$username = "";
$email = "";

if ( isset( $_POST["formSubmitted"] ) )
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    
    $accountCreated = $userObj->Register( $username, $password, $confirmpassword, $email );
}

if ( $accountCreated === true )
{
    $errors = array( );
}
else
{
    $errors = $accountCreated;
}

?>

<!DOCTYPE html>
<html>
    <body>
        <div>
            <?php
            
            foreach ( $errors as $error )
            {
                echo "<div style='color:red;'>$error</div>";
            }
            
            ?>
        </div>
        
        <form action="register.php" method="POST">
            <div>Username</div>
            <input type="text" name="username" value="<?php echo $username; ?>" />
            
            <div>Email Address</div>
            <input type="email" name="email" value="<?php echo $email; ?>" />
            
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







