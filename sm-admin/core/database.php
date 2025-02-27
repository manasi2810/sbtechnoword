 
<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$host = '127.0.0.1';  
$username = 'sbfasto_sbexpress';  
$password = 'Y;J@ejJ5S+@.';  
$database = 'sbfasto_sbtechnoworld';  

// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
?>