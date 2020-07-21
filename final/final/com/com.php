<!DOCTYPE html>
<html>
<head>
  <title>complain</title>
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
  	<h2>complain</h2>
  </div>
	
  <form method="post" action="add.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" >
  	</div>
  	<div class="input-group">
  	  <label>comment</label>
  	  <textarea name ="comment" cols="53" rows="10" ></textarea>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="submit">complain</button>
  	</div>
 
  </form>
</body>
</html>