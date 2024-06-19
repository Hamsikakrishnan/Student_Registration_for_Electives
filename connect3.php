<?php
  $roll= $_POST['roll'];
  $password = $_POST['password'];
  // $pword = $_POST['pword'];
  
  
  //Database connection
  $conn = new mysqli('localhost','root','','studentre');
  // $conn = new mysqli('localhost','root','','course');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  } 
  else{
    if($roll == 'root' && $password == 'root'){
        header("location: /Student/start1.html");
    }
    else{
        echo "Invalid details";
    }
  }
?>