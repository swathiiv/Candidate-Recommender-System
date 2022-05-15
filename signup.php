<html>
<style>
html{
    background-color:gainsboro;
}
</style>
<link rel = "stylesheet" type = "text/css" href = "style.css" />
<script>
      function myFunction(form) {
    var pswd1 = form.pswd1.value;
    var pswd2 = form.pswd2.value;
    var email = form.email.value;
    var usname = form.name.value;
    var phone = form.phone.value;
    if(pswd1 == '' || email == ''|| usname == '' ){
      alert("Please check. You must have missed a few fields");
    }
    else if(!(email.search("[.][a-z][a-z]+") > 0 && email.search("@") > 0)){
      alert("Email address is wrong");
    }
    else if(pswd2 == ''){
      alert("Please confirm password");
    }
    else if(pswd1 != pswd2){
      alert("\nPassword did not match. Please try again");
      return false;
    }
    else{
      alert("You've successfully registered!!!");
    }
  }
</script>
<?php
ob_start()
?>
<body>
<div class="wrapper">
<div id="formContent">
<a href="Signup.html"><h2 class="active">Sign Up</h2></a>
<form method="POST" id="validate" >
<input type="text" id="name" name="fname" placeholder="Name" /><br><br>
<input type="text" id="email" name="email" placeholder="Email" /><br><br>
<input type="text" id="phone" name="phone" placeholder="Phone Number"/><br><br>
<input type="password" id="pswd1" name="pswd1" placeholder="Password" /><br><br>
<input type="password" id="pswd2" name="pswd2" placeholder=" Reconfirm Password" /><br><br>
<input type="submit" name="submit" value="Register" onclick="myFunction(validate)">
</form>
</div>
</div>
</body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "candidate_recommender";
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    $fname='';
    $email='';
    $pswd='';
    $pswd1='';
    $phone = '';
    if(isset($_POST["fname"]) && isset($_POST["email"]) && isset($_POST["pswd1"]) && isset($_POST["pswd2"]) && isset($_POST["phone"])){
      $fname=$_POST["fname"];
      $email=$_POST["email"];
      $pswd=$_POST["pswd1"];
      $pswd1=$_POST["pswd2"];
      $phone = $_POST["phone"];
      if($_POST["submit"]){
        if($fname && $email && $pswd && $pswd1 && $phone && filter_var($email,FILTER_VALIDATE_EMAIL) && $pswd1==$pswd){
           $sql = "INSERT INTO identity (Name, PhoneNumber, Email, Password)
                  VALUES ('$fname', '$phone','$email', '$pswd')";
            if ($conn->query($sql) === TRUE) {
                 header("Location:LandingPage.php");
            } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
    }
  }
    $conn->close();
?>
</html>