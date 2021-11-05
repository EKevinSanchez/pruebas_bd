<?php
$servername = "s29oj5odr85rij2o.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306";
$database = "u1qeeclmgxhs2b0k";
$username = "vfb4lh86i94164mw";
$password = "onjg4aswdmoazbdc";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
//mysqli_close($conn);
?>