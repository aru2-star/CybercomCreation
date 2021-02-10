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
    $pid = $_POST['pid'];  
    $category = $_POST['category']; 
    $url = $_POST['url'];
    $content = $_POST['content'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $userId = $_SESSION['id'];
        
    // checking empty fields
    if(empty($pid) || empty($category) || empty($title) || empty($date)) {                
        if(empty($pid)) {
            echo "<font color='red'>Post id is empty.</font><br/>";
        }
        
        if(empty($category)) {
            echo "<font color='red'>Category field is empty.</font><br/>";
        }
        
        if(empty($itle)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }

        if(empty($date)) {
            echo "<font color='red'>Date is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty) 
            
        //insert data to database    
        $result = mysqli_query($mysqli, "INSERT INTO blog_post(id, title, url, category, content, published at) VALUES('$pid','$title','$url', '$category', '$content', '$date')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='view.php'>View Result</a>";
    }
}
?>