<?php

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mobile = $_POST['mobileno'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $r_pass = $_POST['cpass'];
    $email = $_POST['emailid'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    $conn = new mysqli('localhost','root','','medishop');

    if($conn->connect_error)
    {
        die("Fault");
    }
    else
    {
        /*
            $sql = "INSERT INTO userprofile (firstname , lastname , mobileno , email_id , address , state , country , username , password)
	        VALUES ('$fname' , '$lname' , '$mobile' ,  '$email' , '$address' , '$state' , '$country' , '$username'  , '$password')";
	        if (mysqli_query($conn, $sql)) {
		        //echo "New record created successfully !";
                echo " <script> location.href='sign in.html'; </script>";
            }

            else {
		        echo "Error: " . $sql . " " . mysqli_error($conn);
	        }
	        mysqli_close($conn);
        
        */
        
        if(empty($fname) || empty($lname) || empty($mobile) || empty($email) || empty($address) || empty($state) || empty($country) || 
        empty($username) || empty($password) || empty($r_pass) )
        {
            echo "Wrong Details" ;
        }
        else{
            if($password != $r_pass)
            {
                echo "Password Not Matched !";
            }
            else
            {
                $stmt = $conn->prepare("insert into userprofile(firstname,lastname,mobileno,email_id,address
                ,state,country,username,password) values(?,?,?,?,?,?,?,?,?)");
                $stmt->bind_param("sssssssss",$fname,$lname,$mobile,$email,$address,$state
                ,$country,$username,$password);
                $stmt->execute();
                echo " <script> location.href='HomePage.html'; </script>";
                $stmt->close();
                $conn->close();
            }
            
        }
        
    }
    
?>