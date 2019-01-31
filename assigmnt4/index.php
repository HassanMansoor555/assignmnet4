<?php
$Connection = mysqli_connect("localhost", "root", "","information");
if(!$Connection)
{
	echo "Not connect";
}
if(isset($_POST['Continue']))
{
$Na = $_POST['Name'];
$Em = $_POST['Email'];
$Pass = $_POST['Password'];
$Conf = $_POST['Confirm'];
$Pattern = "/^\w{1,20}@[a-z]{5,7}\.com$/";
$Pattern2 = "/\w{6,20}/";
	if(!preg_match($Pattern, $Em))
	{
		echo "<b>Invalid Email<b><br>";
	}
	else if(!preg_match($Pattern2, $Pass))
	{
		echo "<b>Invalid Password<b><br>";
	}
	else if($Pass != $Conf)
	{
		echo "<b>Password does not matched<b><br>";
	}
	else
	{
		$save = "insert into PersonInfo(Name, Email, Password, CPassword) VALUES('$Na','$Em','$Pass','$Conf');";
		$result = mysqli_query($Connection,$save);	
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sound Cloud</title>
<meta charset = "UTF-8">
<link rel = "stylesheet" type = "text/css" href = "bootstrap.css">
<link rel = "stylesheet" type = "text/css" href = "style.css">
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
	<center>Sign up</center>
</h3>
<form class = "MyForm" method = "post" action = "index.php">
<input type = "text" name = "Name" placeholder = "Enter your name"><br>
<input type = "text" name = "Email" placeholder = "Your Email Address"><br>
<input type = "password" name = "Password" placeholder = "Your Password"><br>
<input type = "password" name = "Confirm" placeholder = "Confirm Your Password"><br>
<button type = "submit" name = "Continue" style="background-color: white">Continue</button>
<b><a href = "Login.php" >Login</a></b>

</form>
</div>

</body>
</html>