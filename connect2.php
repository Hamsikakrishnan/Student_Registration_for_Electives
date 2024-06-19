<?php

  $id = $_POST['id'];
  $rollnum = $_POST['rollnum'];
  // $pword = $_POST['pword'];
  $Sname = $_POST['Sname'];
  $dept = $_POST['dept'];
  $sect = $_POST['sect'];
  $cgpa = $_POST['cgpa'];
  $cid = $_POST['cid'];
  $conn = new mysqli('localhost','root','','studentre');
  // $conn = new mysqli('localhost','root','','course');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  } 
  else{
    $query = "UPDATE re1 SET rollnum = '$rollnum',
     Sname = '$Sname', 
    dept = '$dept',
     sect = '$sect', cgpa = '$cgpa', 
    cid = '$cid' where id = '$id' ";
    $data = mysqli_query($conn,$query);
    if($data){
      echo "Updated successfully";
      header("location: /Student/update.html");
    }
    else{
      echo "failed";
    }
    
  }//Database connection
?>