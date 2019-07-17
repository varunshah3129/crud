<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 7/16/19
 * Time: 6:24 PM
 */
?>
<title>Add user record</title>
    <head>
        <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    </head>

<body>
<a class="btn btn-outline-info" href="index.php">Go to Home</a>
<br/><br/>

<form  action="addRecords.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" class="btn btn-dark" value="Add"></td>
        </tr>
    </table>
</form>

<?php
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    include_once ("config.php");



    $sql = "INSERT INTO users (name, email, mobile) VALUES ('$name','$email','$mobile')";

    if (mysqli_query($conn, $sql)) {
        echo "User added Successfully.<a class='btn btn-outline-secondary' href='index.php'>View Users</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}
