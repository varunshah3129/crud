<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 7/16/19
 * Time: 6:13 PM
 */
include_once 'config.php';

//$result =  mysqli_query($mySqli,'SELECT * FROM users ORDER BY id DESC');
$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);
?>

<title>User Record</title>
<head>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>
<a class ="btn btn-outline-info"
   href="addRecords.php">Add New User</a><br/><br/>

<table class="table table-bordered table-hover" width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php
while($userdata  = mysqli_fetch_array($result)){
   // $output = json_decode($userdata);
    echo "<tr>";
    echo "<td>".$userdata['name']."</td>";
    echo "<td>".$userdata['mobile']."</td>";
    echo "<td>".$userdata['email']."</td>";
    echo "<td><a class='btn btn-primary' href='editRecords.php?id=$userdata[id]'>Edit</a> <a class='btn btn-danger' href='deleteRecord.php?id=$userdata[id]'>Delete</a></td></tr>";
}
    ?>
</table>


