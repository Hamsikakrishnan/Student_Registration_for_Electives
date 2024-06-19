<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of Registration</title>
    
    <link rel = "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of people Registered for courses</h2>
        <br>
        <a class="btn btn-danger" class="hbtn" href="/Student/start1.html" role="button">Home</a>
        <a class="btn btn-primary" class="hbtn" href="/Student/register.html" role="button">New Registration</a>
        <a class="btn btn-secondary" class="hbtn" href="/Student/details.php" role="button">All courses</a>
        <a class="btn btn-secondary" class="hbtn" href="/Student/c1.php" role="button">Web Development</a>
        <a class="btn btn-secondary" class="hbtn" href="/Student/c2.php" role="button">Data Analytics</a>
        <a class="btn btn-secondary" class="hbtn" href="/Student/c3.php" role="button">Google Workspace</a>
        <a class="btn btn-secondary" class="hbtn" href="/Student/c4.php" role="button">No-code devlopment</a>
        <a class="btn btn-secondary" class="hbtn" href="/Student/marks.php" role="button">Rankings</a>
        <br>
        <br>
        

        <h6>Students Registered for No-code Development</h6>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Roll number</th>
                    <th>Department</th>
                    <th>Section</th>
                    <th>CGPA</th>
                    <th>Course ID</th>
                    <th>Delete</th>
                <tr>
            </thead>
            <tbody>
                <?php
                //    $servername = "localhost";
                //    $username = "root";
                //    $password = "";
                //    $database = "studentre";
                //    // Create connection
                //    $connection = new mysqli($servername,$username,$password,$database);
                //    $conn = new mysqli('localhost','root','','studentre');
                   // check connection
                   $connection = new mysqli('localhost','root','','studentre');
                   if($connection->connect_error){
                    die("Conenction failed: ".$connection->connect_error);
                   }
                   $sql = "SELECT * FROM re1 where cid= '4' ";
                   $result = $connection->query($sql);
                //    $sq2 = "SELECT courseName from cr1 where cid.re1 = cid.ce1";
                //    $re = $connection->query($sq2);
                   if(!$result){
                    die("Invalid Query: ".$conn->error);
                   }
                   while($row = $result->fetch_assoc()){
                    echo"
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[Sname]</td>
                            <td>$row[rollnum]</td>
                            <td>$row[dept]</td>
                            <td>$row[sect]</td>
                            <td>$row[cgpa]</td>
                            <td>$row[cid]</td>
                           
                            <td>
                            <a class='btn btn-primary btn-sm' href='/Student/edit1.php?id=$row[id]&Sname=$row[Sname]&rollnum=$row[rollnum]&dept=$row[dept]&sect=$row[sect]&cgpa=$row[cgpa]&cid=$row[cid]'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/Student/delete.php?id=$row[id]'>Delete</a>
                            
                            </td>
                        </tr>
                    ";
                   }
                ?>
                <!-- <a class='btn btn-primary btn-sm' href='/Student/edit.php?id=$row[id]'>Edit</a> -->
            </tbody>
        </table>
    </div>
</body>
</html>