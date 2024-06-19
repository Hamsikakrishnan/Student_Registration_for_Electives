
<?php
  $id = $_POST['id'];
  $rollnum = $_POST['rollnum'];
  // $pword = $_POST['pword'];
  $Sname = $_POST['Sname'];
  $dept = $_POST['dept'];
  $sect = $_POST['sect'];
  $cgpa = $_POST['cgpa'];
  $cid = $_POST['cid'];
  
  //Database connection
  $conn = new mysqli('localhost','root','','studentre');
  // $conn = new mysqli('localhost','root','','course');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  } 
  else{
    $stmt = $conn->prepare('insert into re1(id,rollnum,Sname,dept,sect,cgpa,cid) values(?,?,?,?,?,?,?)');
    $stmt->bind_param("issssdi",$id,$rollnum,$Sname,$dept,$sect,$cgpa,$cid);
   
    // $stmt->execute();
    $stmt->execute();
    echo "registration successfull...";
    header("location: /Student/success.html");
   exit;
    $stmt->close();
    $conn->close();
  }
?>