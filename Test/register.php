<?php 
	include("connection.php");
	
	if(isset($_POST['submit'])) {
		$prefix = $_POST['prefix'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $pass = $_POST['password'];
        $info = $_POST['info'];
 
        if(empty($fname) || empty($lname) || empty($email) || empty($pass)) {
            echo "These fiels need to be filled. Either one or many fields are empty.";
            echo "<br/>";
            echo "<a href='register.php'>Go back</a>";
        } else {
            mysqli_query($mysqli, "INSERT INTO user(prefix, first name, last name, email, mobile, password, information) VALUES('$prefix', $fname', '$lname' '$email', '$mobile', md5('$pass'), '$info')")
            or die("Could not execute the insert query.");
            
            echo "Registration successfully";
            echo "<br/>";
            echo "<a href='login.php'>Login</a>";
        }
    }
?>
<form>
	<h3 align="center">Register</h3>
	Prefix <select name="prefix" id="prefix">
		<option> </option>
  		<option value="Mr.">Mr.</option>
  		<option value="Mrs.">Mrs.</option>
  	</select> <br>
  	First Name <input type="text" name="fname"><br>
  	Last Name <input type="text" name="lname"><br>
  	Email <input type="text" name="email"><br>
  	Mobile Number <input type="text" name="mobile"><br>
  	Password <input type="password" name="pass"><br>
  	Confirm Password <input type="password" name="pass"><br>
  	Information <textarea name="info" rows="6" cols="50"></textarea><br>
  	<input type = "checkbox" name = "checked" value = "1"> Hereby, I accept the terms and conditions <br><br>
    <input type="submit" name="submit" value="Submit">
</form>