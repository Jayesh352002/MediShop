<?php
    session_start();

    $userid = $_POST['userid'];
    $pass = $_POST['pass'];

    $conn = new mysqli('localhost','root','','medishop');

    
    if($conn->connect_error)
    {
        die("Fault");
    }
    else
    {

         $x = 0 ;

        $sql = "select username , password from newuser";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                if($row["username"]==$userid && $row["password"]==$pass)
                {
                    $_SESSION['username'] = $userid ; 
                    echo " <script> location.href='index.php'; </script>";

                    $x = 1 ;
                    break;
                }
            }
            if($x==0)
            {
                echo "<script>location.href='sign in.html'; </script>";
                //echo '<script>alert("Wrong Login Crediantials")</script>';
                
            }
            
        }
        else
        {
            echo "No records ";
        }
        
        $conn->close();
    }
?>