<html>
<link rel = "stylesheet" type = "text/css" href = "style.css" />
<style>
    html {
      background-color:gainsboro;
    }
</style>
    
  <div class="wrapper">
    <div id="formContent">
      <a href="ppdpd.php"><h2 class="active">Employee Sign In</h2></a>
        <form  method="POST">
        <div class="space">
          <input type="text" name="name" id="Name" placeholder="User Name">
          <input type="password" id="password" name="pswd" placeholder="Password">
          <input type="submit" name="submit" value="LogIn"><br/>
        </div>
        </form>
      </div>
    </div>
  <?php
   ob_start();
   session_start(); 
   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "candidate_recommender";
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    if( isset($_POST['name']) and isset($_POST['pswd']) ) {
		$user=$_POST['name'];
    $pass=$_POST['pswd'];
		$ret=mysqli_query( $conn, "SELECT * FROM employee WHERE Name='$user' AND Pass='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
    $row = mysqli_fetch_assoc($ret);
    $_SESSION["Id"] = $row["Id"];
    if ($row["Id"] > 1 && count($row) > 0){
      header("Location: EmployeeInterview.php");

    }
		if(count($row) > 0 && $row["Id"]==1){
      header("Location: JobView.php");
		}
		else
		{
			echo "Not found";
		}
}
?>
</html>
