<?php
    include("inc/connection.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){

    
     $username = $_POST["username"];
     $password=$_POST["password"];
    
    $sql="SELECT * FROM user where username='$username' AND password='$password'";
    
    $result=mysqli_query($connection,$sql);
    
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);
        $json=$row['username']."0";
      
    }else{
       $json = "Username or Password Incorrect";
    }
    
    }else{
        $json = array("status" => 0, "msg" => "Request method not accepted");
    }
    
    
    @mysqli_close($connection);
    header('Content-type: application/json');
    echo json_encode($json);
   

?>