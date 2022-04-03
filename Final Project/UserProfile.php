<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" href="Profile.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">MediShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign in.html">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Medicines.html">Medicines</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="BodyPain.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Cart.html">Cart</a>
        </li>
      </ul>
      <form class="d-flex">
        <img src="user.jpg" class="user" onclick="dash()">
      </form>
    </div>
  </div>
</nav>
<?php
  session_start();
  if(isset($_SESSION['username']))
  {
    
  }
    
?>
<form name="profileForm" id="profile" action="profile.php" method="post">
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
              <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
              <span class="font-weight-bold" id="s1">Edogaru</span>
              <span class="text-black-50" id="s2">edogaru@mail.com.my</span>
              <span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="first name" value="" id="fname" name="firstname"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="" placeholder="last name" id="lname" name="lastname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="" id="mobile" name="mobileno"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter Email ID" value="" id="email" name="emailid"></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value="" id="a1" name="address"></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter state" value="" id="state" name="state"></div>
                    <div class="col-md-12"><label class="labels">Country</label><input type="text" class="form-control" placeholder="enter country" value="" id="country" name="country"></div>
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" placeholder="enter username" value="" id="uname" name="username"></div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-6"><label class="labels">Password</label><input type="password" class="form-control" placeholder="enter password" value="" id="pass" name="password"></div>
                  <div class="col-md-6"><label class="labels">Conform Password</label><input type="password" class="form-control" value="" placeholder="enter password again" id="cpass" name="cpass"></div>
              </div>
                <div class="mt-5 text-center"><button class="submit-btn" onclick="save()">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</form>

<script src="Profile.js"></script>
</body>
</html>