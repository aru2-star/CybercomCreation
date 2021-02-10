<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<?php
//including the database connection file
include("connection.php");
 
//getting id of the data from url
$id = $_GET['cid'];
 
//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM category WHERE id=$cid");
 
//redirecting to the display page (view.php in our case)
header("Location:blogCategory.php");
?>