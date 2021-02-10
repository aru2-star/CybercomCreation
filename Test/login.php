<?php session_start(); ?>
<html>
<head>
    <title>Login</title>
</head>
 
<body>
<a href="index.php">Home</a> <br />
<?php
include("connection.php");
 
if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);
 
    if($email == "" || $pass == "") {
        echo "Either email or password field is empty.";
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
    } else {
        $result = mysqli_query($mysqli, "SELECT * FROM user WHERE email='$email' AND password=md5('$pass')")
        or die("Could not execute the select query.");
        
        $row = mysqli_fetch_assoc($result);
        
        if(is_array($row) && !empty($row)) {
            $validuser = $row['email'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
        } else {
            echo "Invalid email or password.";
            echo "<br/>";
            echo "<a href='login.php'>Go back</a>";
        }
 
        if(isset($_SESSION['valid'])) {
            header('Location: index.php');            
        }
    }
} else {
?>
    <p><font size="+2">Login</font></p>
    <form name="form1" method="post" action="">
        <table width="75%" border="0">
            <tr> 
                <td width="10%">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Login"></td>
                 <td><input type="submit" name="register" value="Register" onclick="register.php"></td>
            </tr>               
        </table>
    </form>
<?php
}
?>
</body>
</html>