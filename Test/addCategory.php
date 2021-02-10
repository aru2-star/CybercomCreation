<?php session_start(); ?>
 
<?php
if(!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>
 
<?php
//including the database connection file
include_once("connection.php");
 
if(isset($_POST['Submit'])) { 
    $cid = $_POST['cid'];  
    $pcategory = $_POST['pcategory'];
    $parcategory = $_POST['parcategory']; 
    $url = $_POST['url'];
    $mtitle = $_POST['mtitle'];
    $title = $_POST['title'];
    $image = $_POST['img1'];
    $date1 = $_POST['date1'];
    $userId = $_SESSION['cid'];
        
    // checking empty fields
    if(empty($pid) || empty($pcategory) || empty($title) || empty($mtitle)) {                
        if(empty($pid)) {
            echo "<font color='red'>Post id is empty.</font><br/>";
        }
        
        if(empty($category)) {
            echo "<font color='red'>Category field is empty.</font><br/>";
        }
        
        if(empty($itle)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }

        if(empty($mtitle)) {
            echo "<font color='red'>Meta Title field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty) 
            
        //insert data to database    
        $result = mysqli_query($mysqli, "INSERT INTO category(parent category id, category, title, meta title, url, content, image, created at) VALUES('$pid', '$parcategory,'$title','$url', '$category', '$content', '$img1', '$date1')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='addCategory.php'>View</a>";
    }
}
?>