<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">

<body>

<div class="container">
  <!-- <div class="row">
    <div class="col-3">
      <img src="img/logo.jpg" class="img-fluid">
    </div>
    <div class="col-5">
      
    </div>
    <div class="col-4">
      MY BOOKShop
    </div>
  </div> -->

 <!-- As a link -->
<!-- Just an image -->
 <div class="row">
    <div class="col-6">
    <a href="index.php"> <img src="img/logo.jpg" class="img-fluid" style=" max-width: 100px;"></a>
    </div>
    <div class="col-6 text-center">
      <p class="btn btn-info" style="margin-top:45px">My Bookshop</p>
    </div>
  </div>
<nav class="navbar navbar-expand navbar-light ">

 
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="contact.php" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>
    </ul>
    
  </div>
</nav>