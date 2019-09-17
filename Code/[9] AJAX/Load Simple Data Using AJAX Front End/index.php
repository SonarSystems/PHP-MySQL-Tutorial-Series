<!DOCTYPE HTML>
<html>
    <head>
        <script>
            function Square( num )
            {
                var xmlhttp = new XMLHttpRequest( );
                
                xmlhttp.onreadystatechange = function( )
                {
                    if ( this.readyState == 4 && this.status == 200 )
                    {
                        document.getElementById( "Result" ).innerHTML = this.responseText;
                    }
                };
                
                xmlhttp.open( "GET", "ajax.php?num=" + num, true );
                xmlhttp.send( );
            }
        </script>
    </head>
    
    <body>
        <form>
            Number: <input type="text" onkeyup="Square( this.value )" />
        </form>
        
        <div id="Result"></div>
    </body>
</html>