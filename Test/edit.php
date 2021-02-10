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
    $pid = $_POST['pid'];    
    $category = $_POST['category'];
    $title = $_POST['title'];
    $date = $_POST['date'];    
    
    // checking empty fields
    if(empty($category) || empty($title) || empty($date)) {                
        if(empty($category)) {
            echo "<font color='red'>Category field is empty.</font><br/>";
        }
        
        if(empty($title)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }
        
        if(empty($date)) {
            echo "<font color='red'>Date field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE blog_post SET category='$category', title='$title', date='$date' WHERE id=$pid");
        
        //redirectig to the display page. In our case, it is view.php
        header("Location: blogPost.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM blog_post WHERE id=$pid");
 
while($res = mysqli_fetch_array($result))
{
    $category = $res['category'];
    $title = $res['title'];
    $date = $res['date'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a> | <a href="blogPost.php">Blog Posts</a> | <a href="logout.php">Logout</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Category</td>
                <td><input type="text" name="category" value="<?php echo $category;?>"></td>
            </tr>
            <tr> 
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $title;?>"></td>
            </tr>
            <tr> 
                <td>Date</td>
                <td><input type="text" name="date" value="<?php echo $date;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>