<?php

?>
<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "style3.css">
<link rel = "stylesheet" type = "text/css" href = "bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class = "Cloud">
	<a class="navbar-brand" href="#">_SOUNDCLOUD_</a>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	  <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">Stream</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#" style="color: black">Collection</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="song_name">Song Name</label>
    <input type="text" id="song_name" name="song_name" placeholder="Song name..">

    <label for="lname">Song Photo</label>
    <input type="file" id="song_photo" name="song_photo" placeholder="Song Photo">

	<label for="lname">Song Audio</label>
    <input type="file" id="song_audio" name="song_audio" placeholder="Song Audio">
	
    <label for="album">Albums</label>
    <select id="album" name="album">
      <option value="1">album 1</option>
      <option value="2">album 2</option>
      <option value="3">album 3</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>