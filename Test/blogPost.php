<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<?php
//including the database connection file
include_once("connection.php");
 
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE user_id=".$_SESSION['id']." ORDER BY id DESC");
?>
 
<html>
<head>
    <title>Homepage</title>
</head>
 
<body>
<br/><br/>
 <div align="right">
     <a href="index.php">Manage Category</a> | <a href="index.php">My Profile</a> | <a href="logout.php">Logout</a>
 </div> 
 <h2>Blog Posts</h2><br>
 <input type="submit" name="submit" value="Add Blog Post" onclick="addBlog.html">
<table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        <th>Post Id</th>
        <th>Category Name</th>
        <th>Title</th>
        <th>Published Date</th>
        <th>Actions</th>
    </tr>
    <?php
    while($res = mysqli_fetch_array($result)) {        
        echo "<tr>";
        echo "<td>".$res['pid']."</td>";
        echo "<td>".$res['category']."</td>";
        echo "<td>".$res['title']."</td>";
        echo "<td>".$res['date']."</td>";   
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
</table>    
</body>
</html>