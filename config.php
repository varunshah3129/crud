<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 7/16/19
 * Time: 6:02 PM
 */

$servername = "localhost:8889";
$username = "root";
$password = "root";
$database ="crud_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
