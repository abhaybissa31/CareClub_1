<?php 
include("fun.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="signup.css">
  <title>Signup</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background:white;">
  <a class="navbar-brand" href="#"><b>Care Club</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline mx-auto p-2">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item itemactive">
        <a class="nav-link" href="#"><b>Home</b> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><b>Trending</b></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b>Account</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Signup</a>
          <a class="dropdown-item" href="#">LogIn</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
     
  </div>
</nav>

  <div class="container-fluid p-0">

    <div class="row no-gutters">
      
      <div class="col-md-6 left-half" id="hrefvol">
        <a class="ahre" >
          <img src="webimg/volunteer2.png" alt="Green Image" class="img-fluid"   onclick="signupvol()">
        </a>
        <div class="text"><h2><b>Volunteer</b> </h2></div>
      </div>

      <div class="col-md-6 right-half bg-dark" id="righthref">
        <a href="www.google.com" class="ahre">
          <img src="webimg/ngo.png" alt="Black Image" class="img-fluid">
        </a>
        <div class="text"><h2 style="color: #FFFDD0"><b>NGO</b> </h2></div>
      </div>
      
    </div>
  </div>
</a>
<script>
  
  function signupvol() {
    document.getElementById('righthref').style.display = "none"
    
    document.getElementById('hrefvol').style.width = "100%"
  }

</script>
</body>
</html>