<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <title>BlueRoses-Marinas</title>
    <style>
        #loader {
            transition: all 0.3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000;
        }
        #loader.fadeOut {
            opacity: 0;
            visibility: hidden;
        }
        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out;
        }
        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0;
            }
        }
        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0;
            }
        }
        .header-container,
        .sidebar-logo {
            /* background-color:rgb(0, 0, 85) */
            background: linear-gradient(to bottom, rgb(0, 0, 85) 0%, rgb(53, 53, 134) 100%);
        }
        .sidebar-menu {
            background-color: rgb(53, 53, 134);
        }
        .ti-menu {
            color: white;
        }
        .search-icon {
            color: white;
        }
        .title {
            color: white;
        }
        .lh1 {
            color: white;
        }

        ul > li
        {
            list-style-type: none;
        }

        .img_container {
            flex: auto;
            flex-direction: column;
            display: inline;
        }
        .img {
            /* flex: 1; */
            height: 100%; 
            width: 100%;
            border-radius: 4%;
        }
        /*Gallery css*/
        body {
            font-family: Arial;
            margin: 0;
        }

        * {
        box-sizing: border-box;
        }

        img {
        vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
        position: relative;
        }

        /* Hide the images by default */
        .mySlides {
        display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
        cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
        cursor: pointer;
        position: absolute;
        top: 40%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* Container for image text */
        .caption-container {
        text-align: center;
        background-color: #222;
        padding: 2px 16px;
        color: white;
        }

        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Six columns side by side */
        .column {
        float: left;
        width: 20%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
        opacity: 0.6;
        }

        .active,
        .demo:hover {
        opacity: 1;
        }
        /*Gallery css*/


        
    </style>
    <link href="style.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
    <link href="css/themify-icons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>


    </head>
    <body class="app">
        <div id="loader"><div class="spinner"></div></div>
        <script>
            window.addEventListener("load", () => {
                const loader = document.getElementById("loader");
                setTimeout(() => {
                    loader.classList.add("fadeOut");
                }, 300);
            });
        </script>
        <script>
            $(function(){
                $("#sidebar").load("Sidebar.html"); 
                // $("#navbar").load("Navbar.html"); 
                $("#footer").load("Footer.html");
            });
        </script>
        <div>
            <div class="sidebar">
                <div class="sidebar-inner">
                    <div class="sidebar-logo">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer peer-greed">
                                <a class="sidebar-link td-n" href="SplashScreen.php">
                                    <div class="peers ai-c fxw-nw">
                                        <div class="peer">
                                            <div class="logo"><img src="images/Blue-Roses-Logo2.png" alt="" /></div>
                                        </div>
                                        <div class="peer peer-greed"><h5 class="lh-1 mB-0 logo-text" style="color:white; position: absolute;">BlueRoses</h5></div>
                                    </div>
                                </a>
                            </div>
                            <div class="peer">
                                <div class="mobile-toggle sidebar-toggle">
                                    <a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu scrollable pos-r" style="list-style-type: none;">
                        <li class="nav-item mT-30 active">
                            <a class="sidebar-link" href="Marinas.php">
                                <span class="icon-holder"><i class="c-blue-grey-200 ti-anchor"></i> </span><span class="title">Marinas</span>
                                <hr color=white style="color: white">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="Marinas.php">
                                <span class="icon-holder"><i class="c-blue-grey-200 ti-flag"></i> </span><span class="title">Cultural Sites</span>
                                <hr color=white style="color: white">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="video.html">
                                <span class="icon-holder"><i class="c-blue-grey-200 ti-video-camera"></i> </span><span class="title">Live</span>
                                <hr color=white style="color: white">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link" href="Project.html">
                                <span class="icon-holder"><i class="c-blue-grey-200 ti-archive"></i> </span><span class="title">BlueRoSES Project</span>
                                <hr color=white style="color: white">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-container">
                <div class="header navbar">
                    <div class="header-container">
                        <ul class="nav-left">
                            <li>
                                <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a>
                            </li>
                            <li class="search-box">
                                <a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a>
                            </li>
                            <li class="search-input"><input class="form-control" type="text" placeholder="Search..." /></li>
                        </ul>
                        <ul class="nav-right">
                            <li class="notifications dropdown">
                                <span class="counter bgc-red">Live</span> <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"  style="color:#fff"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="pX-20 pY-15 bdB"><i class="c-blue-grey-200 ti-bell"></i> <span class="fsz-sm fw-600 c-grey-900">Feed</span> 
                                        <div id='feed'>
                                            <div>Livestream</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                                    <i class="ti-key" style="color: #fff;"></i>
                                    <ul class="dropdown-menu">
                                        <a href="AuthenticatedUser.html">
                                            <li class="pX-20 pY-15 bdB"> <span class="fsz-sm fw-600 c-grey-900" style="display: inline;">Authenticated User Login</span></li>
                                        </a>
                                    </ul>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
                <main class="main-content bgc-grey-100">
                    <div id="mainContent">

                        <div class="container-fluid" >

                            <div class="col-md-12">

                                <div class="bd bgc-white">
                                    <div class="layers">
                                    <?php 

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";

                                        $conn = new mysqli($servername, $username, $password);

                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        else {
                                            
                                            $conn->select_db("bluerosesdb");
                                            $sql = "SELECT * FROM site WHERE type = 'marina'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    
                                    ?>
                                        <div class="layer w-100">
                                            <div class="masonry-item w-100" style="padding:5%;">
                                                <h2><?php echo $row['name']?></h2>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <?php
                                                            $filepath=$row['img_path']."thumbnail"; 
                                                            $photos = scandir($filepath);
                                                            $photo_url = $filepath.'/'.$photos[2];
                                                        ?>
                                                        <img class="img" src='<?php echo $photo_url?>'>
                                                    </div>
                                                    <div class="col-md-7">
                                                        
                                                        <?php echo $row['description_a']?>
                                                        <div style="position: absolute; right:5%; bottom: 5%; padding-top: 2%;">
                                                            <form action="fullpage.php" method="GET" id="form2">

                                                                <button type="submit" class="btn cur-p btn-outline-dark" name="marina_button" value="<?php echo $row['name']?>" form="form2">
                                                                    <i class="ti-eye"></i>
                                                                    View More
                                                                    
                                                                </button>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <?php
                                         }
                                        } else {
                                            echo "0 results";
                                        }
                                    }
                                    ?>

                                        

                                    </div>
                                </div>

                            </div>
                     
    
                                
                        </div>
   
                    </div>
                    <!-- <div style="padding-bottom: 90vw;"></div> -->
                </main>
                <div class="layers">
                    <div class="layer w-100">
                    <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600" style="padding-top: 10%;">
                        <p>Follow us on social media!</p>
                        <div class="row" style="display: flex; justify-content: space-evenly;  margin-left: 12%;">
                            <a href="https://www.facebook.com/BlueRosesProject"><i class="ti-facebook" style="font-size: 2.5vw;"></i></a>
                            <a href="https://twitter.com/bluerosesproj"><i class="ti-twitter-alt" style="font-size: 2.5vw;"></i></a>
                            <a href="https://www.instagram.com/blue_roses_project?utm_medium=copy_link"><i class="ti-instagram" style="font-size: 2.5vw;"></i></a>
                            <a href="https://www.youtube.com/channel/UCn4wyJN15uMgbkM90XZcjiw"><i class="ti-youtube" style="font-size: 2.5vw;"></i></a>
                        </div>
                        
                        <div style="padding-bottom: 1%;"></div>
                        <p>Blue RoSES project has received funding from the European Maritime & Fisheries Fund -BlueEconomy - 2018 (2018 Blue Economy call 1217), proposal no. 863619</p>
                        <div style="padding-top: 1%;">
                            <img src='images/EMFF_2018-11-07_1011301.png' style="width: 25%; min-height: 50%;"/>
                        </div>
                        
                    </footer>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <script type="text/javascript" src="vendor.js"></script>
        <script type="text/javascript" src="bundle.js"></script>

        <script src="js/lightgallery.umd.js"></script>

        <!-- lightgallery plugins -->
        <script src="js/plugins/lg-thumbnail.umd.js"></script>
        <script src="js/plugins/lg-zoom.umd.js"></script>


        <script>
            

        </script>
    </body>
</html>