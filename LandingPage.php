<?php
ob_start();
session_start(); 
?>
<head>
    <meta charset="utf-8"/>
    <title>CS-620 PROJECT</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Webflow" name="generator"/>
    <link href="https://uploads-ssl.webflow.com/5e70dea69102726195b77eba/css/suraksha.webflow.0bf5950f9.css" rel="stylesheet" type="text/css"/>
    <link rel = "stylesheet" type = "text/css" href = "style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
    WebFont.load({
        google: {
            families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Lora:regular,italic,700", "Oxygen:300,regular,700"]
        }
    });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
    !function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "700px";
        }
        function closeNav() {
            document.getElementById("mySidepanel").style.width="0";
        }
    </script>
    <style>
        .sidepanel  {
            width: 0;
            position: fixed;
            z-index: 1;
            height: 1000px;
            top: 0;
            left: 0;
            background-color: #000;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidepanel a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidepanel a:hover {
            color: #f1f1f1;
        }

        .sidepanel .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
        }
        .myclass{
            margin-left:70px;
            margin-top:100px;
        }
        .signin{
            margin-left: 150px;
        }
        .empsignin{
            margin-left: 125px;
        }
    </style>
    <script>
        function emp(){
            window.location.href = "EmployeeLogin.php";
        }
    </script>
    <link href="https://uploads-ssl.webflow.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon"/>  
</head>
<body>
    <div>
        <div data-collapse="tiny" data-animation="over-right" data-duration="400" data-ix="navbar" class="navbar w-nav">
            <div class="w-container">
                <a href="/" aria-current="page" class="logo w-nav-brand w--current">
                    <div class="long-text">T A A P</div>
                </a>
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="#ABOUT" class="nav-link w-nav-link">About</a>
                    <a href="#CONTACTS" class="nav-link w-nav-link">Contact</a>
                    <a class="nav-link w-nav-link" onclick="openNav()">>Sign in</a>
                    <a href="#" class="close-x w-hidden-main w-hidden-medium w-hidden-small">×</a>
                </nav>
                <div class="menu-button w-hidden-main w-hidden-medium w-hidden-small w-clearfix w-nav-button">
                    <div class="menu-icon w-icon-nav-menu"></div>
                    <div class="menu-link">MENU</div>
                </div>
            </div>
        </div>
        <div class="hero-section">
            <div class="w-row">
                <div class="w-col w-col-6">
                    <div data-ix="hero-text" class="hero-heading">Opportunities Made Real</div>
                    <div class="hero-content w-container">
                        <div data-ix="hero-text-2" class="hero-subheading">Effective talent acquisition starts with a sound talent strategy, a conscious decision regarding what methods and approaches to use to identify, source and secure the best talent in the market.</div>
                        <a data-ix="hero-button" href="Signup.php" class="button w-button">Sign Up</a>
                    </div>
                </div>
                <div class="w-col w-col-6">
                    <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
                        <div class="w-slider-mask">
                            <div class="slide w-slide">
                                <img src="img1.jpg" alt="" class="image-2"/>
                            </div>
                            <div class="slide-2 w-slide">
                                <img src="img2.jpg" alt="" class="image"/>
                            </div>
                            <div class="slide-3 w-slide">
                            <img src="img3.jpg" alt="" class="image"/>
                            </div>
                            <div class="slide-4 w-slide">
                            <img src="img4.jpg" alt="" class="image"/>
                            </div>
                        </div>
                        <div class="w-slider-arrow-left">
                            <div class="w-icon-slider-left"></div>
                        </div>
                        <div class="w-slider-arrow-right">
                            <div class="w-icon-slider-right"></div>
                        </div>
                        <div class="slide-nav w-slider-nav w-round"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ABOUT" class="main-section bottom-padding">
            <div class="columns w-row">
                <div class="column w-col w-col-6">
                    <p class="paragraph">Fill an online resume regarding your skills and other intersts on portal. Check your resume and submit it. Check for notifications about jobs.</p>
                </div>
                <div class="column-2 w-col w-col-6">
                    <img src="image1.jpg" width="372" srcset="image1.jpg 1080w, image1.jpeg 1300w" sizes="(max-width: 479px) 79vw, (max-width: 767px) 372px, (max-width: 991px) 46vw, 372px" alt="" class="image-3"/>
                </div>
            </div>
            <div class="columns-2 w-row">
                <div class="column-3 w-col w-col-6">
                    <img src="https://uploads-ssl.webflow.com/5e70dea69102726195b77eba/5e70dea6cb0816be6853fdc9_photo-1444012830796-83db7e1db0d3.jpg" width="358" srcset="https://uploads-ssl.webflow.com/5e70dea69102726195b77eba/5e70dea6cb0816be6853fdc9_photo-1444012830796-83db7e1db0d3-p-1080x715.jpeg 1080w, https://uploads-ssl.webflow.com/5e70dea69102726195b77eba/5e70dea6cb0816be6853fdc9_photo-1444012830796-83db7e1db0d3.jpg 1300w" sizes="(max-width: 479px) 73vw, (max-width: 767px) 67vw, (max-width: 991px) 43vw, 358px" alt="" class="image-4"/>
                </div>
                <div class="column-4 w-col w-col-6">
                    <p class="paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
                </div>
            </div>
        </div>
        <div class="main-section dark">
            <div class="footer-section">
                <div class="w-container">
                    <div class="w-row">
                        <div class="w-col w-col-6">
                            <h1 id="CONTACTS" class="heading">Contact Us</h1>
                            <div class="text-block">Suraksha Tasgaonkar : 7843643654</div>
                        </div>
                        <div class="w-col w-col-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mySidepanel" class="sidepanel">
        <div class="myclass">
            <form  method="POST">
                <div class="space">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <input type="text" name="name" id="Name" placeholder="Name">
                    <input type="password" id="password" name="pswd" placeholder="Password"><br/>
                    <div class="signin"><input type="submit" name="submit" value="LogIn"></div>
                </div>
            </form>
            <div class="empsignin"><input type="submit" value="Employee Login" onclick="emp()"></div><br/>
        </div>
    </div>
    <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "candidate_recommender";
     $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
     } 
     if(isset($_POST['name']) and isset($_POST['pswd']) ) {
		$user=$_POST['name'];
        $pass=$_POST['pswd'];
		$ret=mysqli_query( $conn, "SELECT * FROM identity WHERE Name='$user' AND Password='$pass' ") or die("Could not execute query: " .mysqli_error($conn));
        $row = mysqli_fetch_assoc($ret);
        $_SESSION["Id"] = $row["Id"];
		if(count($row) > 0){
           header("Location: ResumeFill.php");
		}
		else
		{
			echo "Not found";
		}
     }
    ?>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e70dea69102726195b77eba" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://uploads-ssl.webflow.com/5e70dea69102726195b77eba/js/webflow.24d5d989a.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>

