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
$result = mysqli_query($mysqli, "SELECT * FROM category WHERE user_id=".$_SESSION['cid']." ORDER BY cid DESC");
?>
 
<html>
<head>
    <title>Homepage</title>
</head>
 
<body>
<br/><br/>
 <div align="right">
     <a href="addCategory.html">Manage Category</a> | <a href="index.php">My Profile</a> | <a href="logout.php">Logout</a>
 </div> 
 <h2>Blog Posts</h2><br>
 <input type="submit" name="submit" value="Add Category" onclick="addCategory.html">
<table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        <th>Category Id</th>
        <th>Category Image</th>
        <th>Category Name</th>
        <th>Created Date</th>
        <th>Actions</th>
    </tr>
    <?php
    while($res = mysqli_fetch_array($result)) {        
        echo "<tr>";
        echo "<td>".$res['cid']."</td>";
        echo "<td>".$res['img1']."</td>";
        echo "<td>".$res['parcategory']."</td>";
        echo "<td>".$res['date1']."</td>";   
        echo "<td><a href=\"editcategory.php?id=$res[id]\">Edit</a> | <a href=\"deletecategory.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
</table>    
</body>
</html>