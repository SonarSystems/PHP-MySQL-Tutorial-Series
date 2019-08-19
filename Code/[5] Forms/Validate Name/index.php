<?php

$usernameError = "";
$passwordError = "";

function Validate( $data )
{
    $data = trim( $data );
    $data = stripslashes( $data );
    $data = htmlspecialchars( $data );
    
    return $data;
}

if ( $_SERVER["REQUEST_METHOD"] == "POST" )
{
    $usernameVar = Validate( $_POST["username"] );
    $passwordVar = Validate( $_POST["password"] );
    
    if ( empty( $_POST["username"] ) )
    {
        $usernameError = "Username is empty";
    }
    else
    {
        if ( !preg_match( "/^[a-zA-Z ]*$/", $usernameVar ) )
        {
            $usernameError = "Only letters and whitespace are allowed.";
        }
    }
    
    if ( empty( $_POST["password"] ) )
    {
        $passwordError = "Password is empty";
    }
}

?>

<html>
    <head>
        <style>
            .error
            {
                color: red;
                font-size: 10px;
            }
        </style>
    </head>
    
    <body>    
        <h1>Login Page</h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            Username: <input type="text" name="username" /><br />
            <div class="error"><?php echo $usernameError; ?></div>
            Password: <input type="password" name="password" /><br />
            <div class="error"><?php echo $passwordError; ?></div>
            
            <input type="submit" />
        </form>
    </body>
</html>





