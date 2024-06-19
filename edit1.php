<?php
  $id = $_GET['id'];
  $Sname = $_GET['Sname'];
  $rollnum = $_GET['rollnum'];
  $dept = $_GET['dept'];
  $sect = $_GET['sect'];
  $cgpa = $_GET['cgpa'];
  $cid = $_GET['cid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating the page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body id="bodybg">
    <div class="form-container">
      <div id="h-btn" >
        <button class="btn btn-danger hbtn"><a class="homepage" href="index.html">Home page</a></button>
    </div>
        <div class="overall-form ">  
            <div class="container form">
                <div class="heading container text-center">
                    <h1>UPDATE DETAILS</h1>
                </div>
                <form action="connect2.php" method="post">
                    <div class="form-row">
                        <div class="form-group ">
                            <label for="id">ID</label>
                            <input type="number" class="form-control" name="id" id="id" value="<?php echo "$id"?>" aria-describedby="emailHelp"  placeholder="Enter id" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                          </div>
                        <div class="form-group mrg1">
                            <label for="studentName">Student Name</label>
                            <input type="text" class="form-control" id="studentName" name="Sname" value="<?php echo "$Sname"?>" placeholder="Enter your name" required>
                          </div>
                    </div>
                      <div class="form-group">
                        <label for="rollNumber">Roll Number</label>
                        <input type="text" class="form-control" id="rollNumber" name="rollnum" value="<?php echo "$rollnum"?>" placeholder="Enter your roll Number" required>
                      </div>
                      
                      <div class="form-row">
                        <div class="form-group">
                            <label for="department">Enter your department</label>
                            <select class="form-control" id="department" name="dept" required>
                              <option value="CSE"
                              <?php
                                  if($dept == 'CSE'){
                                    echo "selected";
                                  }
                              ?>
                              >CSE</option>
                              <option value="IT"
                              <?php
                                  if($dept == 'IT'){
                                    echo "selected";
                                  }
                              ?>
                              >IT</option>
                              <option value="CSM"
                              <?php
                                  if($dept == 'CSM'){
                                    echo "selected";
                                  }
                              ?>
                              >CSM</option>
                              <option value="AIML"
                              <?php
                                  if($dept == 'AIML'){
                                    echo "selected";
                                  }
                              ?>
                              >AIML</option>
                              <option value="AIDS"
                              <?php
                                  if($dept == 'AIDS'){
                                    echo "selected";
                                  }
                              ?>
                              >AIDS</option>
                              <option value="ECE"
                              <?php
                                  if($dept == 'ECE'){
                                    echo "selected";
                                  }
                              ?>
                              >ECE</option>
                              <option value="CIVIL"
                              <?php
                                  if($dept == 'CIVIL'){
                                    echo "selected";
                                  }
                              ?>
                              >CIVIL</option>
                              <option value="MECH"
                              <?php
                                  if($dept == 'MECH'){
                                    echo "selected";
                                  }
                              ?>
                              >MECH</option>
                              <option value="EEE"
                              <?php
                                  if($dept == 'EEE'){
                                    echo "selected";
                                  }
                              ?>
                              >EEE</option>
                            </select>
                          </div>
                          
                          <div class="form-group mrg2">
                            <label for="section">Enter your section</label>
                            <select class="form-control" name="sect" id="section" required>
                                <option value=" "
                                <?php 
                                      if($sect == ' '){
                                        echo "selected";
                                      }
                                  ?>
                                ></option>
                                <option value="A"
                                  <?php 
                                      if($sect == 'A'){
                                        echo "selected";
                                      }
                                  ?>
                                >A</option>
                                <option value="B"
                                <?php 
                                      if($sect == 'B'){
                                        echo "selected";
                                      }
                                  ?>
                                >B</option>
                                <option value="C"
                                <?php 
                                      if($sect == 'C'){
                                        echo "selected";
                                      }
                                  ?>
                                >C</option>
                                <option value="D"
                                <?php 
                                      if($sect == 'D'){
                                        echo "selected";
                                      }
                                  ?>
                                >D</option>
                            </select>
                          </div>
        
                          <div class="form-group mrg2">
                            <label for="cgpa">CGPA</label>
                            <input type="number" class="form-control" value="<?php echo "$cgpa"?>" name="cgpa" id="cgpa" maxlength="10" minlength="1" step="0.1" placeholder="Enter your CGPA" required>
                          </div>
                          <div class="form-group ">
                        
                        <label for="cid">Course Id</label>
                        <input type="number" class="form-control" value="<?php echo "$cid"?>" name="cid" id="cid" aria-describedby="emailHelp" placeholder="Enter courseid" required>
                        
                        <!-- <h5>Courses id</h5> -->
                        <p style="margin-top: 5px;">Web Developement - 1</p>
                        <p>Data Analytics - 2</p>
                        <p>Google Workspace - 3</p>
                        <p>No-code Dvelopment - 4</p>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                      </div>
                    
                    <div class="container text-align submit-btn">
                        <button type="submit" value="submit" name="update" class="btn btn-success">Submit</button>
                    </div>
                    
                  </form>
                  
            </div>
           
            
        </div>
    </div>
</body>
</html>
