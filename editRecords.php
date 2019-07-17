<?php
/**
 * Created by PhpStorm.
 * User: varun
 * Date: 7/16/19
 * Time: 9:25 PM
 */

include_once 'config.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    $sql = "UPDATE users SET name='$name', email='$email', mobile='$mobile' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";

        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}?>
<?php
$id = $_GET['id'];
$sql_all = "SELECT * FROM users WHERE id=$id";

$result = mysqli_query($conn, $sql_all);
    while($userdata = mysqli_fetch_array($result))
    {
        $name = $userdata['name'];
        $email = $userdata['email'];
        $mobile = $userdata['mobile'];
    }

?>

<title>Edit user record</title>
<head>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>

<a class ="btn btn-outline-info"href="index.php">Home</a>
<br/><br/>

<form name="update_user" method="post" action="editRecords.php">
    <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value='<?php echo $name;?>'></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value=<?php echo $email;?>></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" class="btn btn-success" value="Update"></td>
        </tr>
    </table>
</form>