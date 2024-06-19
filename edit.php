<?php

  $servername = "localhost";
  $username = "root";
  $passoword = "";
  $database = "studentre";
  // Create connection
  $connection = new mysqli($servername,$username,$passoword,$database);

   $id =  "";
   $Sname =  "";
   $rollnum =  "";
   $dept =  "";
   $sect = "";
   $cgpa = "";
   $cid =  "";  
   $errormessage;
   $successMessage;

   if($_SERVER['REQUEST_METHOD'] == 'GET'){
       if(!isset($_GET["id"])){
        header("loaction: /Student/details.php");
        exit;
       }
       $id = $_GET["id"];
       $sql = "SELECT * FROM re1 where id = $id";
       $result = $connection->query($sql);
       $row = $result->fetch_assoc();
       if(!$row){
        header("location: /Student/details.php");
        exit;
       }
    //    $id = $row["id"];
       $Sname = $row["Sname"];
       $rollnum = $row["rollnum"];
       $dept = $row["dept"];
       $sect = $row["sect"];
       $cgpa= $row["cgpa"];
       $cid = $row["cid"];
   }
   else{
    //Update the data of the client
       $id = $row["id"];
       $Sname = $row["Sname"];
       $rollnum = $row["rollnum"];
       $dept = $row["dept"];
       $sect = $row["sect"];
       $cgpa= $row["cgpa"];
       $cid = $row["cid"];

       do{
        if(empty($id) || empty($Sname) || empty($rollnum) || empty($dept) || empty($sect) || empty($cgpa) || empty(cid)){
            $errorMessage = "All the fields are required";
            break;
        }
        
        $sql = "UPDATE re1" . "SET Sname = '$Sname', rollnum = '$rollnum', dept = '$dept', sect='$sect', cgpa='$cgpa' cid = '$cid' " .
        "WHERE id = $id"; 
        
        $result = $connection->query($sql);

        if(!$result){
          $errorMessage = "Invaid query: " . $connection->error;
          break;
        }
        else{
          $successMessage = "User updated correctly";

          header("location: /Student/details.php");
          exit;
        }
       }while(false);

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body id="bodybg">
    <div class="form-container">
        <div class="overall-form ">  
            <div class="container form">
                <div class="heading container text-center">
                    <h1>REGISTER </h1>
                </div>
                <form action="connect.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-row">
                        <div class="form-group ">
                            <label for="id">ID</label>
                            <input type="number" class="form-control" name="id" id="id" aria-describedby="emailHelp" placeholder="Enter id" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                          </div>
                        <div class="form-group mrg1">
                            <label for="studentName">Student Name</label>
                            <input type="text" class="form-control" id="studentName" name="Sname" placeholder="Enter your name" value="" required>
                          </div>
                    </div>
                      <div class="form-group">
                        <label for="rollNumber">Roll Number</label>
                        <input type="text" class="form-control" id="rollNumber" name="rollnum" placeholder="Enter your roll Number" required>
                      </div>
                      
                      <div class="form-row">
                        <div class="form-group">
                            <label for="department">Enter your department</label>
                            <select class="form-control" id="department" name="dept" required>
                              <option value="CSE">CSE</option>
                              <option value="IT">IT</option>
                              <option value="CSM">CSM</option>
                              <option value="AIML">AIML</option>
                              <option value="AIDS">AIDS</option>
                              <option value="ECE">ECE</option>
                              <option value="CIVIL">CIVIL</option>
                              <option value="MECH">MECH</option>
                              <option value="EEE">EEE</option>
                            </select>
                          </div>
                          
                          <div class="form-group mrg2">
                            <label for="section">Enter your section</label>
                            <select class="form-control" name="sect" id="section" required>
                                <option value=" "></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                          </div>
        
                          <div class="form-group mrg2">
                            <label for="cgpa">CGPA</label>
                            <input type="number" class="form-control" name="cgpa" id="cgpa" maxlength="10" minlength="1" step="0.1" placeholder="Enter your CGPA" required>
                          </div>
                      </div>
    
    
                      
    
                      <!-- Courses -->
                      <!-- <div class="form-check">
                        <input class="form-check-input" type="radio" name="courseid" id="Web Development" required value="10">
                        <label class="form-check-label" for="Web Development">
                          Web Development
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="courseid" id="Data Analytics" required value="11">
                        <label class="form-check-label" for="Data Analytics">
                          Data Analytics
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="courseid" id="Google Workspace" required value="12">
                        <label class="form-check-label" for="Google Workspace">
                          Google Workspace
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="courseid" id="No-Code Development" required value="13">
                        <label class="form-check-label" for="No-Code Development">
                          No-Code Development
                        </label>
                      </div> -->
                      <div class="form-group ">
                        
                        <label for="cid">Course Id</label>
                        <!-- <h5>Courses id</h5> -->
                        <p>Web Developement - 1</p>
                        <p>Data Analytics - 2</p>
                        <p>Google Workspace - 3</p>
                        <p>No-code Dvelopment - 4</p>
                        <input type="number" class="form-control" name="cid" id="cid" aria-describedby="emailHelp" placeholder="Enter courseid" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                      </div>
                    
                    <div class="container text-align submit-btn">
                        <button type="submit" value="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                    
                  </form>
                  
            </div>
            <div class="h-btn" style="margin-left: 450px;">
              <button class="btn btn-danger hbtn"><a class="homepage" href="index.html">Home page</a></button>
          </div>
            
        </div>
    </div>
</body>
</html>
<?php
  $servername = "localhost";
  $username = "root";
  $passoword = "";
  $database = "studentre";
  // Create connection
  $connection = new mysqli($servername,$username,$passoword,$database);
  $id = $_GET['id'];
  $Sname = $_GET['Sname'];
  $rollnum = $_GET['rollnum'];
  $dept = $_GET['dept'];
  $sect = $_GET['sect'];
  $cgpa = $_GET['cgpa'];
  $cid = $_GET['cid'];