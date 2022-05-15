<?php
require_once 'vendor/autoload.php';
use Twilio\Rest\Client;
ob_start();
$name = htmlspecialchars($_GET["name"]);
$namearray = explode(' ', $name);
$job = htmlspecialchars($_GET["job"]);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "candidate_recommender";
global $id;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Webflow" name="generator"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/css/suraksha1.webflow.555aa7d09.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
    WebFont.load({
        google: {
            families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Fjalla One:regular"]
        }
    });
    function jobadd(){
        window.location.href = "JobAdd.php";
    }
    </script>
    <script type="text/javascript">
    !function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
    </script>
    <link href="https://uploads-ssl.webflow.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon"/>
    <style>
   
    input[type=submit],input[type=button], input[type=reset]  {
    background-color: #56baed;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  
   input[type=submit]:hover, input[type=button]:hover,input[type=reset]:hover  {
    background-color: #39ace7;
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
  
  input[type=submit]:active, input[type=button]:active, input[type=reset]:active  {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
  }
  input[type=text], input[type=password], input[type=textarea] {
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
    width: 85%;
    height: 7%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
     border-radius: 5px 5px 5px 5px;
}
  
  input[type=text]:focus,  input[type=textarea]:focus {
    background-color: #fff;
    border-bottom: 2px solid #5fbae9;
  }
  
  input[type=text]:placeholder, input[type=textarea]:placeholder {
    color: #cccccc;
  }
  .distance{
      margin-top:100px;
  }
  </style>
</head>
<body>
    <div class="sidebar-column">
        <div data-collapse="medium" data-animation="default" data-duration="400" role="banner" class="navigation-bar w-nav">
            <div class="w-container">
                <nav role="navigation" class="navigation-menu w-nav-menu">
                    <div class="divider w-hidden-medium w-hidden-small w-hidden-tiny"></div>
                    <a href="JobView.php" aria-current="page" class="nav-link w-nav-link w--current">Job Posts</a>
                    <a href="Candidates.php" class="nav-link w-nav-link">Candidates</a>
                    
                    <div class="divider"></div>
                    <div class="social-link-group">
                        <a href="#" class="social-icon-link w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/5eb2377b952aa3a8d2c1b48f_social-03-white.svg" width="25" alt=""/>
                        </a>
                        <a href="#" class="social-icon-link w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/5eb2377b952aa3048cc1b4a2_social-18-white.svg" width="25" alt=""/>
                        </a>
                        <a href="#" class="social-icon-link w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/5eb2377b952aa3be5ac1b497_social-15-white.svg" width="25" alt=""/>
                        </a>
                        <a href="#" class="social-icon-link w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/5eb2377b952aa33a22c1b46d_social-33-white.svg" width="25" alt=""/>
                        </a>
                        <a href="#" class="social-icon-link w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/5eb2377b952aa381ffc1b482_social-07-white.svg" width="25" alt=""/>
                        </a>
                        <a href="#" class="social-icon-link w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/5eb2377b952aa38a1cc1b493_social-09-white.svg" width="25" alt=""/>
                        </a>
                    </div>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="w-row">
            <div class="w-col w-col-3"></div>
            <div class="w-col w-col-5">
                <div class="text-block">T A A P</div>
            </div>
            <div class="w-col w-col-4"></div>
        </div>
    </div>
    <div class="content">
        <div class="blog-list w-dyn-list">
          <h3>Name of Candidate: <?php
          if(sizeof($namearray) > 1){ 
             echo ucfirst($namearray[0]). " " .ucfirst($namearray[1]);
             $namefinal =  ucfirst($namearray[0]). " " .ucfirst($namearray[1]);
          }
          else{
            echo ucfirst($namearray[0]);
            $namefinal = ucfirst($namearray[0]);
          }
          $ret=mysqli_query( $conn, "SELECT * FROM identity WHERE Name='$namefinal' ") or die("Could not execute query: " .mysqli_error($conn));
          $row = mysqli_fetch_assoc($ret);
          $id = $row["Id"];
          echo $id;
          ?></h3><br/>
          <h4>Role for which Candidate being interviewed: <?php echo $job ?></h1><br/>
        <div class='candidate'>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Interview Setup</button>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1">Interview Notes</button>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Performance</button>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo3">Decision</button>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4">Send Message</button>
            <div id="demo" class="collapse">
            <div class='distance'>
            <form method="POST">
               <select name='interviewer'>
               <?php
                $namerray = array();
                $idarray = array();
                if($namerray=mysqli_query($conn, "SELECT Name FROM employee") or die("Could not execute query: " .mysqli_error($conn)))
                if($idarray=mysqli_query($conn, "SELECT Id FROM employee") or die("Could not execute query: " .mysqli_error($conn)))
                while ($row1=mysqli_fetch_row($namerray) and $row2 =mysqli_fetch_row($idarray)){  
                  for($b=0;$b <= sizeof($row1);$b++){
                    if(!isset($row1[$b]))
                        continue;
                    echo '<option value="'.$row2[$b].'">';
                    echo $row1[$b];  
                    echo "</option>";
 
                  } 
                }
                ?>
               </select>
               <input type="text" name='date' placeholder="Date of interview as dd/mm/yy">
               <input type="text" placeholder="Time in h:m">
               <input type='submit' name="submit">
            </form>
            </div>
            <?php
            if(isset($_POST["submit"])){
                $candId = $id;
                $empid = $_POST['interviewer'];
                $date = $_POST['date'];
                if($candId && $empid && $date && $job){
                    $sql = "INSERT INTO interview (EmployeeId,CandidateId,JobDesc,DateInt)
                    VALUES ('$empid', '$candId','$job', ' $date ')";
                    if ($conn->query($sql) === TRUE) {
                 
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
               }
                $sid    = "AC0e27fd20901771c19d6b2f1e6c474a91";
                $token  = "838fca4cf2a670bbe7f419b478fda218";
                $twilio = new Client($sid, $token);

                $message = $twilio->messages
                    ->create("whatsapp:+919632574574", // to
                            [
                                "from" => "whatsapp:+14155238886",
                                "body" => "Hello you have an interview!"
                            ]
                    );


            }
            ?>
            </div>
            
            <div id="demo1" class="collapse">
            <div class='distance'>
             <form method="POST">
                <?php
                     $notearray = array();
                     if($notearray=mysqli_query($conn, "SELECT Note FROM notes where CandId='$id'") or die("Could not execute query: " .mysqli_error($conn)))
                     while ($row1=mysqli_fetch_row($notearray)){
                        for($b=0;$b <= sizeof($row1);$b++){
                            if(!isset($row1[$b]))
                                continue;
                            echo $row1[$b];
                            echo '<br/>';
                        }
                     }
                ?>
                <textarea name='notes' placeholder="Note down your thoughts on the candidate"></textarea>
                <input type='submit' name="submit1">
             </form>
             </div>
             <?php
                if(isset($_POST["submit1"])){
                    $notes = $_POST['notes'];
                    if($notes && $id){
                        $sql = "INSERT INTO notes (Note, CandId)
                        VALUES ('$notes', '$id')";
                        if ($conn->query($sql) === TRUE) {
                     
                        } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                   }
                }
             ?>
            </div>
            <div id="demo2" class="collapse">
            <form method="POST">
                <div class ='skill'>
                <h4>Skill Name</h4>
                <select name="skill">
                        <option>Programming</option>
                        <option>Problem Solving</option>
                        <option>Speaking</option>  
                </select><br/><br/>
                </div>
                <div class ='rating'>
                <h4>Rating</h4>
                <select name="rating">
                        <option>Bad</option>
                        <option>Average</option>
                        <option>Good</option>
                        <option>Very Good</option>
                        <option>Excellent</option>
                </select><br/><br/>
                <input type="submit" name="sbmt" value="tweet">
                </div>
                </form>
                <?php
                if(isset($_POST["sbmt"])){
                    if(isset($_POST["skill"]) and isset($_POST["rating"])){
                    $skill =$_POST["skill"];
                    $rating = $_POST["rating"];
                    $sql = "INSERT INTO review (CandId,Rating,Skill)
                            VALUES ('$id','$rating','$skill')";
                    if ($conn->query($sql) === TRUE) {
                        
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    }
                }

                $dataPointPrgm = array();
                $m = array();
                $n = array();
                $k = 0;
                for($i= 0; $i < 6;$i++){
                $results = mysqli_query($conn,"SELECT Rating FROM rating WHERE Id='$i+1'");
                $row2 = mysqli_fetch_assoc($results);
                $rating = $row2["Rating"];
                if($rating == null){
                    continue;
                }
                $sql1 = "SELECT COUNT(Rating) as ttl FROM review WHERE Rating='$rating' and CandId='$id' and Skill='Programming'";
                $resultset = mysqli_query($conn, $sql1);
                $rw1 = mysqli_fetch_assoc($resultset);
                $number = $rw1["ttl"];
                if($i==0){
                    continue;
                }
                $m[$k] = $number;
                $n[$k] = $rating;
                $k = $k + 1;  

                }
                for($i = 0; $i < sizeof($n); $i = $i + 1){
                $dataPointPrgm[$i] = array("label"=>$n[$i], "y"=>$m[$i]);
                }

                $dataPointPrblm = array();
                $m1 = array();
                $n1 = array();
                $k1 = 0;
                for($i= 0; $i < 6;$i++){
                $results = mysqli_query($conn,"SELECT Rating FROM rating WHERE Id='$i+1'");
                $row2 = mysqli_fetch_assoc($results);
                $rating = $row2["Rating"];
                if($rating == null){
                    continue;
                }
                $sql1 = "SELECT COUNT(Rating) as ttl FROM review WHERE Rating='$rating' and CandId='$id' and Skill='Problem Solving'";
                $resultset = mysqli_query($conn, $sql1);
                $rw1 = mysqli_fetch_assoc($resultset);
                $number = $rw1["ttl"];
                if($i==0){
                    continue;
                }
                $m1[$k1] = $number;
                $n1[$k1] = $rating;
                $k1 = $k1 + 1;  

                }
                for($i = 0; $i < sizeof($n1); $i = $i + 1){
                $dataPointPrblm[$i] = array("label"=>$n1[$i], "y"=>$m1[$i]);
                }

                $dataPointSpeak = array();
                $m2 = array();
                $n2 = array();
                $k2 = 0;
                for($i= 0; $i < 6;$i++){
                $results = mysqli_query($conn,"SELECT Rating FROM rating WHERE Id='$i+1'");
                $row2 = mysqli_fetch_assoc($results);
                $rating = $row2["Rating"];
                if($rating == null){
                    continue;
                }
                $sql1 = "SELECT COUNT(Rating) as ttl FROM review WHERE Rating='$rating' and CandId='$id' and Skill='Speaking'";
                $resultset = mysqli_query($conn, $sql1);
                $rw1 = mysqli_fetch_assoc($resultset);
                $number = $rw1["ttl"];
                if($i==0){
                    continue;
                }
                $m2[$k2] = $number;
                $n2[$k2] = $rating;
                $k2 = $k2 + 1;  

                }
                for($i = 0; $i < sizeof($n2); $i = $i + 1){
                $dataPointSpeak[$i] = array("label"=>$n2[$i], "y"=>$m2[$i]);
                }


                ?>
                <script>

                window.onload = function ()  {
                
                
                var chart = new CanvasJS.Chart("chartContainer1", {
                    animationEnabled: true,
                    exportEnabled: true,
                    title:{
                    text: "Programming"
                    },
                    subtitles: [{
                    text: ""
                    }],
                    data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "##0",
                    dataPoints: <?php echo json_encode($dataPointPrgm, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
                var chart = new CanvasJS.Chart("chartContainer2", {
                    animationEnabled: true,
                    exportEnabled: true,
                    title:{
                    text: "Problem Solving"
                    },
                    subtitles: [{
                    text: ""
                    }],
                    data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "##0",
                    dataPoints: <?php echo json_encode($dataPointPrblm, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
                var chart = new CanvasJS.Chart("chartContainer3", {
                    animationEnabled: true,
                    exportEnabled: true,
                    title:{
                    text: "Speaking"
                    },
                    subtitles: [{
                    text: ""
                    }],
                    data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "##0",
                    dataPoints: <?php echo json_encode($dataPointSpeak, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
                
                
                }
                </script>
                <div id="chartContainer1" style="height: 400px; width: 60%;"></div><br/>
                <script src="canvasjs/canvasjs.min.js"></script><br/>
                <div id="chartContainer2" style="height: 400px; width: 60%;"></div><br/>
                <script src="canvasjs/canvasjs.min.js"></script><br/>
                <div id="chartContainer3" style="height: 400px; width: 60%;"></div><br/>
                <script src="canvasjs/canvasjs.min.js"></script><br/>
            </div>
            <div id="demo3" class="collapse">
            <div class='distance'>
            <form method='POST'>
              <input type='submit'  class="btn btn-info" value='selected' name="select">
              <input type='submit' class="btn btn-info"  value='Rejected' name="reject">
              <input type="button" class="btn btn-info"  value='Further Interview'data-toggle="collapse" data-target="#demo">
            </form>
            <?php
                if(isset($_POST["select"])){
                    if($job && $id){
                        $sql = "INSERT INTO selectedcandidates (CandId,Job)
                        VALUES ('$id', '$job')";
                        if ($conn->query($sql) === TRUE) {
                     
                        } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                   }
                }
             ?>
            </div>
            </div>
            <div id="demo4" class="collapse">
            <div class='distance'>
                <form method="POST">
                <textarea name='msg' placeholder="Send message to candidate"></textarea>
                <input type='submit' name="submit3">
                </form>
                </div>
                <?php
                    if(isset($_POST["submit3"])){
                        $msg = $_POST['msg'];
                        if($msg && $id){
                            $sql = "INSERT INTO message (CandId, Message)
                            VALUES ('$id', '$msg')";
                            if ($conn->query($sql) === TRUE) {
                        
                            } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                    }
                    }
                ?>
            </div>
            </div>
        </div>


       </div>
       
       <div class="button-wrapper">
            
       </div>
        
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5eb2377a1d06067b2ab354f7" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/js/webflow.bcab84fed.js" type="text/javascript"></script>
</body>
</html>


