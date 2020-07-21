<?php
$conn = mysqli_connect("localhost", "root", "", "hotel");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
$name=$_POST['username'];
$password=$_POST['password'];  
    $sql = "SELECT * FROM `register` WHERE username='$name' AND password='$password'";
    
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) == 1) {
      header('location:index.php'); 
    }else {
     echo'not';
    }
    
}


?>


<!DOCTYPE html>


<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="style.css">

<style>
body {
     background-image: url("photos/Quad-Safari-Sharm-el-Sheikh.jpg");
    background-repeat: no-repeat;
    background-size:cover ;
    background-attachment: fixed;
}
</style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="submit">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>