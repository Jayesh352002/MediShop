<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="Cart.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
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
<form name="cart" action="cart.php" method="post">
<div class="cart">
<div class="main-cart">
	<div class="top-div">
		<h3 class="my-cart">My Cart </h3>
		<p class="deliver-text">Deliver To </p>
		<input type="text" name="address" class="inp">
	</div>
	<hr>
	<div class="mid-div">
		<img class="mid-img" id="med-img" src="o2.png">
		<div class="inner-div">
			<h4 class="tab-name" id="h4" value="O2 Tablet">O2 Tablet</h4>
			<p class="tab-dis" id="ptab">Stomach Pain</p>
			<h5 class="rs" id="rsp">Rs 70 (1 Strip : 10 Medicine)</h5>
			<p class="p-d">Deliver By 8 Feb || 7 Days Raplacement Policy</p>
		</div>
		
	</div>
	<div class="bottom-div">
		<button type="button" class="btn btn-outline-light text-dark" style="border-radius: 50%; border-color: black; font-size: 18px; margin-left: 20px; margin-top: -5px;" id="minus" onclick="sub()">-</button>
		<input type="text" name="" value="1" disabled style="width: 70px; margin-left: 2px; text-align: center;" id="no">
		<button type="button" class="btn btn-outline-light text-dark" style="border-radius: 50%; border-color: black; font-size: 18px; margin-left: 6px; margin-top: -5px;" id="add" onclick="add()">+</button>
		<a class="save" id="save" href="" onclick="save()">Save For Letter</a>
		<a class="remove" href="" onclick="remove()">Remove</a>
	</div>
	<div class="div-place" style="background-color: #FFFFFF">
		<button class="submit-btn" onclick="buy()">PLACE ORDER</button>
	</div>
</div>
<div class="price-info">
	<p class="price">Price Details</p>
	<hr>
	<div class="item-info">
		<p class="first-p" id="it-price">Price (  </p>
		<p class="first-it" id="it-det">  1 </p>
		<p class="first-item" id="it"> Item )</p>
		<p class="second-p"> </p>
		<p class="third-p" id="r">  70 </p>
	</div>
	<div class="d-charge">
		<p class="first-p1">Delivery Charges</p>
		<p class="second-p1">Rs. 0</p>
	</div>
	<hr>
	<div class="total">
		<p class="first-p2">Total Amount</p>
		<p class="second-p2" id="x"></p>
		<p class="third-p2" id="total-price"> 70</p>
	</div>
	
</div>
</div>
<script type="text/javascript" src="Cart.js"></script>
<script type="text/javascript" src="Order.js"></script>

</form>

</body>
</html>

<?php


//$userid = $_POST['userid'];
//$pass = $_POST['pass'];
    
$conn = new mysqli('localhost','root','','medishop');
$x = 0 ;


if($conn->connect_error)
{
    die("Fault");
}
else
{

    $sql = "select image_id , status , name , description , price from imagetable";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($row["image_id"]=="crocin" && $row["status"]!="done" )
            {               
                //$sql = "INSERT INTO imagetable (status) VALUES ('done')";
	            $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];
                    

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }
                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'crocin.jpg'</script>";
                $x=1;
                break;
            }    
            else if($row["image_id"]=="acc" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'acotab.jpg'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="p75" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'ptab.jpg'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="sumol650" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'sumotab.jpg'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="calpol" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'calpol.jpg'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="o2" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'o2.png'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="zincovit" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'zincovit.jpg'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="sinerest" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'sinerest.jpg'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="redtoil" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'redtoil.png'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="liv52" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'liv.jpg'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="sinemet" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'sinemet.jpeg'</script>";
                $x = 1;
                break;
            }
            else if($row["image_id"]=="pirfenex" && $row["status"]!="done")
            {
                $sql = "UPDATE imagetable set status = 'done' ";
                if (mysqli_query($conn, $sql)) {
		            //echo "New Item Added to Cart !";
                    //echo " <script> location.href='Cart.php'; </script>";
                    $name = $row["name"];
                    $desc = $row['description'];
                    $price = $row['price'];

                    echo "<script>document.getElementById('h4').innerHTML = '$name'</script>";
                    echo "<script>document.getElementById('ptab').innerHTML = '$desc'</script>";
                    echo "<script>document.getElementById('rsp').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('r').innerHTML = '$price'</script>";
                    echo "<script>document.getElementById('total-price').innerHTML = '$price'</script>";
                }

                else {
		            echo "Error: " . $sql . " " . mysqli_error($conn);
	            }
	     
                echo " <script>document.getElementById('med-img').src = 'pire.jpg'</script>";
                $x = 1;
                break;
            }
        }
        if($x==0)
        {
            //echo "<script>location.href='sign in.html'; </script>";
            //echo '<script>alert("Wrong Login Crediantials")</script>';
        }
        
    }
    else
    {
        echo "No records ";
    }
    echo "<script>alert('document.getElementById('h4').value')</script>";
            
    $conn->close();
}
?>
