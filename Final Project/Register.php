<?php

    $name = $_POST['regName'];
    $email = $_POST['regEmail'];
    $mobile = $_POST['regMobile'];
    $username = $_POST['regUsername'];
    $password = $_POST['regPass'];
    $r_pass = $_POST['regCPass'];

    $conn = new mysqli('localhost','root','','medishop');

    if($conn->connect_error)
    {
        die("Fault");
    }
    else
    {
        if($password == $r_pass)
        {
            $sql = "INSERT INTO newuser (name ,email,mobileno,username,password)
	        VALUES ('$name','$email','$mobile','$username','$password')";
	        if (mysqli_query($conn, $sql)) {
		        //echo "New record created successfully !";
                echo " <script> location.href='sign in.html'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	        mysqli_close($conn);
        
        }
        else{
            echo "<script>alert('Password not Matched')</script>";
        }
        
        /*
        $stmt = $conn->prepare("insert into newuser(name,email,mobileno,username,password) values(?,?,?,?,?)");
        $stmt->bind_param("ssiss",$name,$email,$mobile,$username,$password);
        $stmt->execute();
        echo " <script> location.href='HomePage.html'; </script>";
        $stmt->close();
        $conn->close();*/ 
    }
    
?>