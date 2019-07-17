<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 7/17/19
 * Time: 12:29 AM
 */

include_once 'config.php';
$id = $_GET['id'];


$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";

    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}