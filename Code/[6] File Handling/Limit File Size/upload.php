<?php

$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["FileUploading"]["name"]);

$uploadStatus = 1;

$imageFileType = strtolower( pathinfo( $targetFile, PATHINFO_EXTENSION ) );

if ( isset( $_POST["submit"] ) )
{
    $check = getimagesize( $_FILES["FileUploading"]["tmp_name"] );
    
    if ( $check === false )
    {
        echo "Not an image.<br />";
        $uploadStatus = 0;
    }
    else
    {
        echo "File is an image - ".$check["mime"]."<br />";
        $uploadStatus = 1;
    }
}

if ( file_exists( $targetFile ) )
{
    echo "Sorry, the file already exists.<br />";
    $uploadStatus = 0;
}

if ( $_FILES["FileUploading"]["size"] > 200000 )
{
    echo "File is too large, please choose a smaller image.<br />";
    $uploadStatus = 0;
}

if ( $uploadStatus === 0 )
{
    echo "File was not uploaded, please try again.<br />";
}
else
{
    if ( move_uploaded_file( $_FILES["FileUploading"]["tmp_name"], $targetFile ) )
    {
        echo "The file ".basename( $_FILES["FileUploading"]["name"] ). " has been successfully uploaded.<br />";
    }
    else
    {
        echo "There was an error uploading your file.<br />";
    }
}

?>





