<?php

$emailError = "";
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
    $emailVar = Validate( $_POST["email"] );
    $passwordVar = Validate( $_POST["password"] );
    
    if ( empty( $_POST["email"] ) )
    {
        $emailError = "Email is empty";
    }
    else
    {
        if ( !filter_var( $emailVar, FILTER_VALIDATE_EMAIL ) )
        {
            $emailError = "This is an invalid email format";
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
            Email: <input type="text" name="email" /><br />
            <div class="error"><?php echo $emailError; ?></div>
            Password: <input type="password" name="password" /><br />
            <div class="error"><?php echo $passwordError; ?></div>
            
            <input type="submit" />
        </form>
    </body>
</html>





