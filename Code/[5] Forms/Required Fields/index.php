<?php

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
        echo "Username is empty<br />";
    }
    else
    {
        echo $usernameVar."<br />";
    }

    if ( empty( $_POST["password"] ) )
    {
        echo "Password is empty<br />";
    }
    else
    {
        echo $passwordVar."<br />";
    }
}

?>

<html>
    <body>
        
        <h1>Login Page</h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
            Username: <input type="text" name="username" /><br />
            Password: <input type="password" name="password" /><br />
            
            <input type="submit" />
        </form>
    </body>
</html>





