<?php
    
    $hostname     = "127.0.0.1";
    $username     = "sbfasto_srbcomp";
    $password     = "srbcomp@123";
    $databasename = "sbfasto_srbcomp";
    // Create connection
    $connection = mysqli_connect($hostname, $username, $password,$databasename);
    // Check connection
    if (!$connection)
    {
        die("Unable to Connect database: " . mysqli_connect_error());
    }
    
?>

