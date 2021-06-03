
<!DOCTYPE html>
<html>
<head>
  <title>services</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
    background-image: url("image/Quad-Safari-Sharm-el-Sheikh.jpg");
    background-repeat: no-repeat;
    background-size:cover ;
    background-attachment: fixed;
}
</style>
</head>
<body>
  <div class="header">
  	<h2>services</h2>
  </div>
	
  <form method="post" action="insert.php">
  	<div class="input-group">
  	  <label>service name</label>
  	  <input type="text" name="srname" >
  	</div>
  	<div class="input-group">
  	  <label>comment</label>
  	  <textarea name ="comment" cols="53" rows="10" ></textarea>
  	</div>
  
  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="submit">Register</button>
  	</div>
  	
  </form>
</body>
</html>