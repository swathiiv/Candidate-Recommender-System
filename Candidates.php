<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "candidate_recommender";
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
    a{
        color:black;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 40%;
        height:40%;
    }
    
    .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .cardcontainer {
    padding: 2px 16px;
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
        <?php
            $href="CandidateResumeView.php?name=";
            $and ="&job="; 
            $namearray = array();
            $jobarray = array();
            $idarray = array();
            $emailarray = array();
            $phonearray = array();
            if($idarray=mysqli_query( $conn, "SELECT CandId FROM selectedcandidates") or die("Could not execute query: " .mysqli_error($conn)))
            if($jobarray=mysqli_query( $conn, "SELECT Job FROM selectedcandidates") or die("Could not execute query: " .mysqli_error($conn)))
            while($res = mysqli_fetch_row($idarray) and $row=mysqli_fetch_row($jobarray)){
                for($b = 0; $b < sizeof($res); $b++){
                    $ret=mysqli_query( $conn, "SELECT * FROM identity WHERE Id='$res[$b]' ") or die("Could not execute query: " .mysqli_error($conn));
                    $row1 = mysqli_fetch_assoc($ret);
                    #echo $row1["Name"];
                    #echo $row[$b];
                    echo'<a style="text-decoration:none" href="'.$href.$row1["Name"].$and.$row[$b].'"><div class="card">
                    <div class="cardcontainer">
                    <h4><b>'.$row1["Name"].'</b></h4> 
                    <p>'.$row1["PhoneNumber"].'</p><p>'.$row1["Email"].'
                    <p>'.$row[$b].'</p> 
                    </div>
                    </div></a>&nbsp;&nbsp;';
                    
                }

            }
        ?>  
        </div>
       <div class="button-wrapper">
          
       </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5eb2377a1d06067b2ab354f7" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://uploads-ssl.webflow.com/5eb2377a1d06067b2ab354f7/js/webflow.bcab84fed.js" type="text/javascript"></script>
</body>
</html>


