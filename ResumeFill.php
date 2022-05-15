<?php
ob_start();
session_start();
$id = $_SESSION["Id"];
echo $id;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "candidate_recommender";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  
$ret=mysqli_query($conn, "SELECT * FROM identity  WHERE Id='$id'") or die("Could not execute query: " .mysqli_error($conn));
$row = mysqli_fetch_assoc($ret);
$name = $row["Name"];
$phone = $row["PhoneNumber"];
$email = $row["Email"];
?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="resumestyle.css">
<link rel = "stylesheet" type = "text/css" href = "style.css"/>
<style>
body {
  color: black;
}

.left {
  height: 100%;
  width: 75%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  left: 0;
  background-color:white;
}
h2{
  font-size: 20px;
}
select{
  background-color: #f6f6f6;
    border: none;
    margin-left:500px;
    margin-top:300px;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 86%;
    height: 6%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
     border-radius: 5px 5px 5px 5px;
}
textarea{
         background-color: #f6f6f6;
         border: none;
         color: #0d0d0d;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 16px;
         margin: 5px;
         width: 85%;
         border: 2px solid #f6f6f6;
         -webkit-transition: all 0.5s ease-in-out;
         -moz-transition: all 0.5s ease-in-out;
         -ms-transition: all 0.5s ease-in-out;
         -o-transition: all 0.5s ease-in-out;
         transition: all 0.5s ease-in-out;
         -webkit-border-radius: 5px 5px 5px 5px;
         border-radius: 5px 5px 5px 5px;
      }

.right {
  height: 100%;
  width: 25%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  right: 0;
  background-color: #c7d9ed;
}

.mbtn{
  margin-top:50px;
  margin-left:578px;
}

.centered {
  position: absolute;
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
.sbtn{
  margin-left:600px;
}
</style>
<script>
$(document).ready(function(){
  
  $("#myBtn2").click(function(){
    $("#myModal2").modal({backdrop: false});
  });
  
});
$(document).ready(function(){
  
  $("#myBtn1").click(function(){
    $("#myModal1").modal({backdrop: false});
  });
  
});
$(document).ready(function(){
  
  $("#myBtn2").click(function(){
    $("#myModal2").modal({backdrop: false});
  });
  
});
$(document).ready(function(){
  
  $("#myBtn3").click(function(){
    $("#myModal3").modal({backdrop: false});
  });
  
});
$(document).ready(function(){
  
  $("#myBtn4").click(function(){
    $("#myModal4").modal({backdrop: false});
  });
  
});
$(document).ready(function(){
  
  $("#myBtn5").click(function(){
    $("#myModal5").modal({backdrop: false});
  });
  
});
$(document).ready(function(){
  
  $("#main").click(function(){
    $("#mainmodal").modal({backdrop: false});
  });
  
});
</script>
<script>
function move(){
  window.location.href = "Resume.php";
}
</script>
</head>
<body>

<div class="left">
  <div class="centered">
  <div class="container">
  <section>
      <div>
      
      </div>
      <div>
        <div class="my-name"><?php echo $name ?></div>
        <div class="links">
          <div class="link-item">
            <svg class="icon" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1664 1504v-768q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5-102.5 24.5h-2q-48 0-102.5-24.5t-86.5-48.5-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5h-1472q-13 0-22.5 9.5t-9.5 22.5q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5 50.5 27.5 43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5t46.5-131.5zm128-37v1088q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1472q66 0 113 47t47 113z"/></svg>
            <a href="mailto:email@email.com"><?php echo $email?></a>
          </div>
          <div class="link-item">
            <svg  class="icon" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1600 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-53-3.5t-57.5-12.5-47-14.5-55.5-20.5-49-18q-98-35-175-83-127-79-264-216t-216-264q-48-77-83-175-3-9-18-49t-20.5-55.5-14.5-47-12.5-57.5-3.5-53q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"/></svg>
            <a href="tel:123-456-7890"><?php echo $phone ?></a>
          </div>
        </div> <!-- end links -->
          <div class='sbtn'><button type="button" class="btn btn-info btn-xs" id="main">Add Personal details</button></div>  
          <!-- Modal -->
          <div class="modal fade" id="mainmodal" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Intro</h4>
              </div>
              <div class="modal-body">
              <form method="POST">
              <input type="text" name="age" placeholder="Age">
              <input type="text" name='city' placeholder="City">
              <input type="text" name="obj" placeholder="Objective">
              </div>
              <div class="modal-footer">
                <input type="submit" name='sbmtp'>
              </div>
              </form>
            </div>
          </div>
          <?php 
            if (isset($_POST['sbmtp'])){
              $age = $_POST['age'];
              $city = $_POST['city'];
              $obj = $_POST['obj'];
              
              if(isset($age)){
                $sql = "INSERT INTO candidate(Name,PhoneNumber,Email,Age,Address,Objective,Id)
                VALUES ('$name','$phone','$email','$age','$city','$obj','$id')";
                if ($conn->query($sql) === TRUE) {
                    echo "uruur";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
            }
          ?>
        </div>
    </section>
    <section>
      <div class="section-title">Experience</div>
      <div>
        <!-- end job-title container -->
          <div class='sbtn'><button type="button" class="btn btn-info btn-xs" id="myBtn1">Add</button></div>  
          <!-- Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Experience</h4>
              </div>
              <div class="modal-body">
              <form method="POST">
              <select name="title">
                <?php
                $numarray = array();
                if($numarray=mysqli_query($conn, "SELECT Name FROM positions") or die("Could not execute query: " .mysqli_error($conn)))
                while ($row1=mysqli_fetch_row($numarray)){
                  echo "<option>";
                  for($b=0;$b <= sizeof($row1);$b++){
                    if(!isset($row1[$b]))
                        continue;
                    echo $row1[$b];   
                  } 
                echo "</option>";
                }
            ?>
             </select>
                <input type="text" name="org" id="Name" placeholder="Name of Organisation">
                <input type="text" name="year" id="Name" placeholder="Years of Experience">
              </div>
              <div class="modal-footer">
                <input type="submit" name='submit'>
              </div>
              </form>
            </div>
          </div>
          <?php 
            if (isset($_POST['submit'])){
              $year  = $_POST['year'];
              $title = $_POST['title'];
              $org = $_POST['org'];
              if(isset($year) && isset($title) && isset($org)){
                $sql = "INSERT INTO experience (Name, Years, NameOfOrganisation, CandidateId)
                VALUES ('$title', '$year','$org', '$id')";
                if ($conn->query($sql) === TRUE) {
                    //header("Location:LandingPage.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
            }
          ?>
        </div> <!-- end job -->
      </div>
    </section>
    <section>
    <div class="section-title">Education</div>
      <div>
        <!-- end job-title container -->
          <div class='sbtn'><button type="button" class="btn btn-info btn-xs" id="myBtn2">Add</button></div>  
          <!-- Modal -->
          <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Education</h4>
              </div>
              <div class="modal-body">
              <form method="POST">
              <select name="qualification">
                  <option>10th grade</option>
                  <option>12th grade</option>
                  <option>Bachelors</option>
                  <option>Masters</option>
             </select>
              <input type="text" name="uni" placeholder="Name of University">
              <input type="text" name="yr" placeholder="Year of Graduation">
              <input type="text" name="grade" placeholder="GPA(or percentage)">
              </div>
              <div class="modal-footer">
                <input type="submit" name='sbmt'>
              </div>
              </form>
            </div>
          </div>
          <?php 
            if (isset($_POST['sbmt'])){
              $yr  = $_POST['yr'];
              $uni = $_POST['uni'];
              $grade = $_POST['grade'];
              $quali = $_POST['qualification'];
              if(isset($yr) && isset($uni) && isset($grade) && isset($quali)){
                $sql = "INSERT INTO education (CandidateId, Year, Qualification, University, Grade)                
                VALUES ('$id', '$yr','$quali', '$uni', '$grade')";
                if ($conn->query($sql) === TRUE) {
                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
            }
          ?>
        </div> <!-- end job -->
      </div>
    </section>
    <section>
    <div class="section-title">Skills</div>
      <div>
        <!-- end job-title container -->
          <div class='sbtn'><button type="button" class="btn btn-info btn-xs" id="myBtn3">Add</button></div>  
          <!-- Modal -->
          <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Skills</h4>
              </div>
              <div class="modal-body">
              <form method="POST">
              <select name="skill">
                  <option>Java</option>
                  <option>C</option>
                  <option>C++</option>
                  <option>Python</option>
                  <option>Oracle database</option>
                  <option>Mongodb</option>
                  <option>Angular</option>
                  <option>NodeJS</option>
                  <option>HTML</option>
                  <option>CSS</option>
                  <option>BootStrap</option>
                  <option>AngularJS</option>
                  <option>Keras</option>
                  <option>Microservice</option>
                  <option>PHP</option>
                  <option>Kubernetes</option>
                  <option>Docker</option>
                  <option>Ansible</option>
                  <option>ASP.net</option>
                  <option>RedHat</option>
                  <option>Django</option>
                  <option>Tensorflow</option>
                  <option>Flask</option>
                  <option>Perl</option>
                  <option>DataAnalytics</option>
                  <option>MAchineLearning</option>
                  <option>AI</option>
                  <option>Ruby</option>
                  <option>IOT</option>
                  <option>Cybersecurity</option>
             </select>
             <select name='exp'>
                <option value='1'>Basic</option>
                <option value='3'>Intermediate</option>
                <option value='5'>Expert</option>
             </select>
              </div>
              <div class="modal-footer">
                <input type="submit" name='sbmt1'>
              </div>
              </form>
            </div>
          </div>
          <?php 
            if (isset($_POST['sbmt1'])){
              $skill  = $_POST['skill'];
              $exp = $_POST['exp'];
              
              if(isset($skill) && isset($exp) ){
                $sql = "INSERT INTO skills (Name	,CandidateId	,Experience)                
                VALUES ('$skill','$id','$exp')";
                if ($conn->query($sql) === TRUE) {
                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
            }
          ?>
        </div> <!-- end job -->
      </div>
    </section>
    <section>
    <div class="section-title">Certifications</div>
      <div>
        <!-- end job-title container -->
          <div class='sbtn'><button type="button" class="btn btn-info btn-xs" id="myBtn4">Add</button></div>  
          <!-- Modal -->
          <div class="modal fade" id="myModal4" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Certifications</h4>
              </div>
              <div class="modal-body">
              <form method="POST">
              <input type="text" name="cert" placeholder="Certification Name">
              <select name="skill1">
                  <option>Java</option>
                  <option>C</option>
                  <option>C++</option>
                  <option>Python</option>
                  <option>Oracle database</option>
                  <option>Mongodb</option>
                  <option>Angular</option>
                  <option>NodeJS</option>
                  <option>HTML</option>
                  <option>CSS</option>
                  <option>BootStrap</option>
                  <option>AngularJS</option>
                  <option>Keras</option>
                  <option>Microservice</option>
                  <option>PHP</option>
                  <option>Kubernetes</option>
                  <option>Docker</option>
                  <option>Ansible</option>
                  <option>ASP.net</option>
                  <option>RedHat</option>
                  <option>Django</option>
                  <option>Tensorflow</option>
                  <option>Flask</option>
                  <option>Perl</option>
                  <option>DataAnalytics</option>
                  <option>MachineLearning</option>
                  <option>AI</option>
                  <option>Ruby</option>
                  <option>IOT</option>
                  <option>Cybersecurity</option>
             </select>
              </div>
              <div class="modal-footer">
                <input type="submit" name='sbmt2'>
              </div>
              </form>
            </div>
          </div>
          <?php 
            if (isset($_POST['sbmt2'])){
              $skill1  = $_POST['skill1'];
              $cert = $_POST['cert'];
              
              if(isset($skill1) && isset($cert) ){
                $sql = "INSERT INTO certifications (CandidateId, Name, Skill)                
                VALUES ('$id','$cert','$skill1')";
                if ($conn->query($sql) === TRUE) {
                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
            }
          ?>
        </div> <!-- end job -->
      </div>
    </section>
    <section>
    <div class="section-title">Projects</div>
      <div>
        <!-- end job-title container -->
          <div class='sbtn'><button type="button" class="btn btn-info btn-xs" id="myBtn5">Add</button></div>  
          <!-- Modal -->
          <div class="modal fade" id="myModal5" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Projects</h4>
              </div>
              <div class="modal-body">
              <form method="POST">
              <input type="text" name="Pname" placeholder="Project Name">
              </div>
              <div class="modal-footer">
                <input type="submit" name='sbmt3'>
              </div>
              </form>
            </div>
          </div>
          <?php 
            if (isset($_POST['sbmt3'])){
              $pname = $_POST['Pname'];
              
              if(isset($pname)){
                $sql = "INSERT INTO project (Name, CandId)                
                VALUES ('$pname','$id')";
                if ($conn->query($sql) === TRUE) {
                    
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }
            }
          ?>
        </div> <!-- end job -->
      </div>
    </section>
    <div class='mbtn'><input type="submit" value="Go to Resume"name='sub' onclick="move()"></div>
</div>
  </div>
</div>

<div class="right">
  <div class="centered">
  <textarea id ="textarea" rows="7" cols="50" name="description">Fill your resume by pressing the add buttons. Once filled completely press on 'Go to Resume' to view resume.</textarea>
  </div>
</div>
</body>
</html> 

