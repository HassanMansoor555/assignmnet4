<?php
$Connection = mysqli_connect("localhost", "root", "","information");
if(!$Connection)
{
	echo "Not connect";
}
if(isset($_POST['Continue']))
{
$Em = $_POST['Email'];
$Pass = $_POST['Password'];
$Search = "select * from PersonInfo where Email = '$Em' AND Password = '$Pass' ;";
$result = mysqli_query($Connection,$Search);
$Check = mysqli_num_rows($result);
if ($Check == 0){
	echo "Wrong Email or Password"; 
}
else{
	echo "Already used:";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sound Cloud</title>
<meta charset = "UTF-8">
<link rel = "stylesheet" type = "text/css" href = "bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "style2.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class = "Cloud">
	<a class="navbar-brand" href="#">_SOUNDCLOUD_</a>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	  <li class="nav-item">
        <a class="nav-link" href="#" style="color: white">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white">Stream</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" style="color: white">Collection</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class = "FormContainer">
<h3>
	<center>Login</center>
</h3>
<form class = "MyForm" method = "post" action = "imp.php">
<input type = "text" name = "Email" placeholder = "Your Email Address"><br>
<input type = "password" name = "Password" placeholder = "Your Password"><br>
<button type = "submit" name = "Continue" style="background-color: white">Continue</button>
</form>
</div>

</body>
</html>"