<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="Home.css">
  <title>MediShop</title>
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
          <a class="nav-link" href="HomePage.html">Home</a>
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

<div class="container-fluid p-5 my-5 bg-primary text-white">
  <h1>Welcome To MediShop</h1>
  <p>Buy Any Medicine from Sitting at Your Home.</p>
  <div>
  <?php
    session_start();
    if(isset($_SESSION['username']))
    {
      echo "Welcome ".$_SESSION['username'];
    }
    else{
      echo "Log Out!";
    }
    
  ?>

  </div>

  <p >So Just Create Your Account Now.</p>
  <button type="button" class="btn btn-danger" onclick="signup()">Sign Up</button>
  <img src="back2.jpg" style="margin-left: 40%; margin-top: -160px; width: 700px; padding: none;">
</div>
<h4 style="margin-left: 20px; text-decoration: underline;">Medicines </h4>
<div style="display: inline-flex; margin-top: 12px;">
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="crocin.jpg" alt="Card image" id="cro" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Crocin</h4>
    <p class="card-text">80Rs</p>
    <a href="Cart.html" class="btn btn-primary" id="crocin">Add to Cart</a>
  </div>
</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="acotab.jpg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Acocontin</h4>
    <p class="card-text">145Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>

</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="ptab.jpg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">P 75</h4>
    <p class="card-text">25Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="sumotab.jpg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Sumol 650</h4>
    <p class="card-text">55Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="calpol.jpg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Calpol</h4>
    <p class="card-text">92Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="o2.png" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">O2</h4>
    <p class="card-text">70Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
</div>

<div style="display: inline-flex; margin-top: 30px;">
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="zincovit.jpg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Zincovit</h4>
    <p class="card-text">105Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="sinerest.jpg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Sinerest</h4>
    <p class="card-text">60Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>

</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="redtoil.png" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Redtoil</h4>
    <p class="card-text">80Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="liv.jpg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Liv52</h4>
    <p class="card-text">240Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="sinemet.jpeg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Sinemet</h4>
    <p class="card-text">145Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
<div class="card" style="width:200px; margin-left: 20px;">
  <img class="card-img-top" src="pire.jpg" alt="Card image" style="padding: 8px; height: 150px; cursor: pointer;">
  <div class="card-body">
    <h4 class="card-title">Pirfenex </h4>
    <p class="card-text">80Rs</p>
    <a href="Cart.html" class="btn btn-primary">Add to Cart</a>
  </div>
</div>
</div>
<h4 style="text-decoration: underline; margin-left: 20px; margin-top: 30px;">Our Services</h4>
<div style="margin-top: 20px ; display: inline-flex;">
<div class="card" style="width:300px; margin-left: 20px;">
  <img class="card-img-top" src="med1.jpg" alt="Card image" 
  style="padding: 15px; border-radius: 50%; width: 300px; ">
  <div class="card-body">
    <h4 class="card-title" style="background-color: red; color: white; padding: 6px;">All Medicines are Available Here</h4>
  </div>
</div>
<div class="card" style="width:300px; margin-left: 20px;">
  <img class="card-img-top" src="ho1.jpg" alt="Card image" 
  style="padding: 15px; border-radius: 50%; width: 300px; height: 220px;">
  <div class="card-body">
    <h4 class="card-title" style="background-color: red; color: white;padding: 6px;">Free and Fast Delivery of Medicines</h4>
  </div>
</div>
<div class="card" style="width:300px; margin-left: 20px;">
  <img class="card-img-top" src="cod.jpg" alt="Card image" 
  style="padding: 15px; border-radius: 50%; width: 300px; height: 220px; ">
  <div class="card-body">
    <h4 class="card-title" style="background-color: red; color: white; padding: 6px;">Cash on Delivery Accepted</h4>
  </div>
</div>
<div class="card" style="width:300px; margin-left: 20px;">
  <img class="card-img-top" src="pre.jpg" alt="Card image" 
  style="padding: 15px; border-radius: 50%; width: 300px; ">
  <div class="card-body">
    <h4 class="card-title" style="background-color: red; color: white; padding: 6px;">All Covid Precautions are Taken </h4>
  </div>
</div>
</div>

<div class="container-fluid p-5 my-5 bg-dark text-white" style="margin-top: 30px;">
  <h1>Contact Us</h1>
  <p>Email - medishop90@gmail.com.</p>
  <p>Mobile No - +91 7777569300.</p>
</div>
<h1></h1>  
<script src="Home.js"></script>

</body>
</html>


