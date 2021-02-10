<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<?php
// including the database connection file
include_once("connection.php");
 
if(isset($_POST['update']))
{    
    $pid = $_POST['cid'];    
    $img1 = $_POST['img1'];
    $title = $_POST['parcategory'];
    $date = $_POST['date1'];    
    
    // checking empty fields
    if(empty($img1) || empty($parcategory) || empty($date1)) {                
        if(empty($img1)) {
            echo "<font color='red'>Image field is empty.</font><br/>";
        }
        
        if(empty($parcategory)) {
            echo "<font color='red'>Category Name field is empty.</font><br/>";
        }
        
        if(empty($date1)) {
            echo "<font color='red'>Date field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE blog_post SET image='$img1', category='$parcategory', created at='$date1' WHERE id=$pid");
        
        //redirectig to the display page. In our case, it is view.php
        header("Location: blogCategory.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM category WHERE id=$cid");
 
while($res = mysqli_fetch_array($result))
{
    $img1 = $res['img1'];
    $parcategory = $res['parcategory'];
    $date1 = $res['date1'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a> | <a href="blogCategory.php">Blog Category</a> | <a href="logout.php">Logout</a>
    <br/><br/>
    
    <form name="form2" method="post" action="editcategory.php">
        <table border="0">
            <tr> 
                <td>Category Image</td>
                <td><input type="text" name="img1" value="<?php echo $img1;?>"></td>
            </tr>
            <tr> 
                <td>Category Name</td>
                <td><input type="text" name="parcategory" value="<?php echo $parcategory;?>"></td>
            </tr>
            <tr> 
                <td> Created Date</td>
                <td><input type="text" name="date1" value="<?php echo $date1;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['cid'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>