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
.mbtn{
  margin-top:50px;
  margin-left:578px;
}
</style>
<script>

</script>
</head>
<body>
<div class="left">
  <div class="centered">
  <div class="container">
    <section>
      <div>
        <div><img src="avatar.png" alt="avatar" class="avatar"></div>
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
      </div>
    </section>
    <section>
      <div class="section-title">Experience</div>
      <div>
      <?php
        $orgarray = array();
        $namearray = array();
        $yeararray = array();
        if($orgarray=mysqli_query( $conn, "SELECT NameOfOrganisation FROM experience WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        if($namearray=mysqli_query($conn, "SELECT Name FROM experience WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        if($yeararray=mysqli_query($conn, "SELECT Years FROM experience WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        while ($row=mysqli_fetch_row($orgarray) and $row1=mysqli_fetch_row($namearray) and $row2=mysqli_fetch_row($yeararray)){
         for($b = 0; $b <sizeof($row); $b = $b + 1){
             echo 
             '<div class="job">
             <div class="job-title-container">
               <div>
                 <div class="job-company">'.$row[$b].'</div>
                 <div class="job-title">'.$row1[$b].'</div>
                 </div>
                 <div>No. of Years:'.$row2[$b].'</div></div> <!-- end job-title container -->';
         }
         }    
        ?>
         </div> <!-- end job --> 
      </div>
    </section>
    <section>
      <div class="section-title">Education</div>
      <div>
      <?php
        $uninamearr = array();
        $year= array();
        $eduarray = array();
        if($uninamearr=mysqli_query( $conn, "SELECT University FROM education WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        if($year=mysqli_query($conn, "SELECT Year FROM education WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        if($eduarray=mysqli_query($conn, "SELECT Qualification FROM education WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        while ($row=mysqli_fetch_row($uninamearr) and $row1=mysqli_fetch_row($eduarray) and $row2=mysqli_fetch_row($year)){
         for($b = 0; $b <sizeof($row); $b = $b + 1){
             
             echo 
             '<div class="job">
             <div class="job-title-container">
               <div>
                 <div class="job-company">'.$row[$b].'</div>
                 <div class="job-title">'.$row1[$b].'</div>
                 </div>
                 <div>Graduation Year: '.$row2[$b].'</div></div> <!-- end job-title container -->';
         }
         }    
        ?>
        </div> <!-- end job -->
      </div>        
    </section>
    <section>
      <div class="section-title">Skills</div>
      <div>
      <div class="skills-container">
      <?php
        $skillarray = array();
        if($skillarray=mysqli_query( $conn, "SELECT Name FROM skills WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        while ($row=mysqli_fetch_row($skillarray)){
         for($b = 0; $b <sizeof($row); $b = $b + 1){
          echo'<ul><li>'.$row[$b].'</li></ul>';
         }
         }    
        ?>
        </div> <!-- end skills-container -->
      </div>
    </section>
    <section>
      <div class="section-title">Certififcations</div>
      <div>
        <div class="skills-container">
        <?php
        $certarray = array();
        if($certarray=mysqli_query( $conn, "SELECT Name FROM certifications  WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        while ($row=mysqli_fetch_row($certarray)){
         for($b = 0; $b <sizeof($row); $b = $b + 1){
          echo'<ul><li>'.$row[$b].'</li></ul>';
         }
         }    
        ?>
        </div> <!-- end skills-container -->
      </div>
    </section>
    <section>
      <div class="section-title">Projects</div>
      <div>
        <div class="skills-container">
        <?php
        $projarray = array();
        if($projarray=mysqli_query( $conn, "SELECT Name FROM project  WHERE CandId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
        while ($row=mysqli_fetch_row($projarray)){
         for($b = 0; $b <sizeof($row); $b = $b + 1){
          echo'<ul><li>'.$row[$b].'</li></ul>';
         }
         }    
        ?>
        </div> <!-- end skills-container -->
      </div>
    </section>   
    <form method="POST">
    <div class='mbtn'><input type="submit" name='sub' value="Update Resume"></div>
    <div class='mbtn'><input type="submit" name='subbb' value="Submit"></div>
    </form>
</div>
<?php
  if(isset($_POST['sub'])){
    header("Location: ResumeFill.php");

  }
  if (isset($_POST['subbb'])){
    $mainarray = array();
    $mainarray[0] = $name;
    $mainarray[1] = '21';
    $a = 2;
    if($edarray=mysqli_query( $conn, "SELECT Qualification FROM education WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
    while ($rowx=mysqli_fetch_row($edarray)){
      for($d = 0; $d <sizeof($rowx); $d = $d + 1){
          $mainarray[$a++] = $rowx[$d];
      }
    }
    $skillarray = array();
    $exparray = array();
    if($skillarray=mysqli_query( $conn, "SELECT Name FROM skills WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
    if($exparray = mysqli_query( $conn, "SELECT Experience FROM skills WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
    while ($row=mysqli_fetch_row($skillarray) and $row1=mysqli_fetch_row($exparray)){
      for($b = 0; $b <sizeof($row); $b = $b + 1){
        $n = $row1[$b];
        $j = $b;
        for($i =0; $i < $n; $i++ ){
          $mainarray[$a++] = $row[$j];
          //$a = $a + 1;
        }
      }
    }
    $certificate = array();
    if($certificate=mysqli_query( $conn, "SELECT Skill FROM certifications WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
    while ($row2=mysqli_fetch_row($certificate) ){
      for($c = 0; $c <sizeof($row2); $c = $c + 1){
        $mainarray[$a++] = $row2[$c];
        //$a = $a + 1;
      }
    }
    $prevexparray = array();
    if($prevexparray=mysqli_query( $conn, "SELECT Name FROM experience WHERE CandidateId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
    while ($rows=mysqli_fetch_row($prevexparray)){
      for($s = 0; $s < sizeof($prevexparray); $s = $s + 1){
        $mainarray[$a++] = $rows[$s];
      }
    }
    $line = implode(',', $mainarray); 
    

    $fp = fopen('GeneralInfo.csv', 'a');
    fwrite($fp,$line);
  }
?> 
</div>
</div>
<div class="right">
  <div class="centered">
  <textarea id ="textarea" rows="4" cols="50" name="description">Thank You. If update is needed you can use the Update button. Else submit your resume. You will get your messages here. Keep tuned in</textarea>
  <?php 
  $msgarray = array();
  if($msgarray=mysqli_query( $conn, "SELECT Message FROM message where CandId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
  while ($rew=mysqli_fetch_row($msgarray)){  
    for($b=0;$b <= sizeof($rew);$b++){
      if(!isset($rew[$b]))
          continue;
      echo '<textarea id ="textarea" rows="2" cols="50" name="description">'.$rew[$b].'</textarea>';
    }
  }
  ?>
  </div>
</div>    
<body>
</html> 



