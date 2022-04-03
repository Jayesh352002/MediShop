<?php

    session_start();

    $image1 = $_POST['image1'];
    $_SESSION['image'] = $image1;
    $conn = new mysqli('localhost','root','','medishop');

    
    if($conn->connect_error)
    {
        die("Fault");
    }
    else
    {
        if($image1 == "crocin")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Crocin','Headache','300Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "acc")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Acocontin','Headache','500Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "p75")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','P 75','Stomache Pain','150Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "sumol650")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Sumol650','Body Pain','200Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "calpol")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Calpol','Body Pain','100Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
        }
        if($image1 == "o2")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','O2','Stomach Pain','80Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "zincovit")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Zincovit','Fever','400Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "sinerest")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Sinerest','Cold and Cough','50Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "redtoil")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Redtoil','Body Pain','250Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "liv52")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Liv52','Jaundice','500Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "sinemet")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Sinemet','Headache','200Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        if($image1 == "pirfenex")
        {
            $sql = "INSERT INTO imagetable (image_id,name,description,price) 
            VALUES ('$image1','Pirefenex','Cold','140Rs')";
	        if (mysqli_query($conn, $sql)) {
		    //echo "New record created successfully !";
            echo " <script> location.href='Cart.php'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	    
        }
        
    }
?>