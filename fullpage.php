<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <title>BlueRoses-Info</title>

    <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
    <link href="css/themify-icons.css" rel="stylesheet">

    <!-- lightgallery plugins -->
    <link type="text/css" rel="stylesheet" href="css/lg-zoom.css" />
    <link type="text/css" rel="stylesheet" href="css/lg-thumbnail.css" />
    
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
            border-radius: 1%;
        }

        .gallery-img {
            height: 300px; 
            max-width: 450px;
            /* border-radius: 1%; */
            margin: 0.2%;
            margin-right: -0.1%;
        }

        .gallery-container {
            height: 80%;
            width: 90%;
        }
        .gallery-container * {
            height: 90%; 
            width: 90%;
            /* border-radius: 1%; */
        }

        #gallery-cotainer {
            width: 20%;
            height: 100%;
        }
        /*Gallery css*/

        .row > .column {
        padding: 0 8px;
        }

        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        .column {
        float: left;
        width: 25%;
        }

        /* The Modal (background) */
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
        }

        /* Modal Content */
        .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
        }

        /* The Close Button */
        .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
        }

        .mySlides {
        display: none;
        }

        .cursor {
        cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
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

        img {
        margin-bottom: -4px;
        }

        .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
        }

        .demo {
        opacity: 0.6;
        }

        .active,
        .demo:hover {
        opacity: 1;
        }

        img.hover-shadow {
        transition: 0.3s;
        }

        .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding: 1%;

        }

        .gallery-img {
            /* height: auto; */
            max-width: 32%;
            margin: 0.2%;
            margin-right: -0.1%;
        }

        .gallery-container {
            height: 80%;
            width: 90%;
        }
        .gallery-container * {
            height: 90%; 
            width: 90%;
            /* border-radius: 1%; */
        }

        #gallery-cotainer {
            width: 20%;
            height: 100%;
        }
        /*Gallery css*/

        .row > .column {
        padding: 0 8px;
        }

        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        .column {
        float: left;
        width: 25%;
        }

        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }

        #map {
            height: 100vw;
            margin: auto;
        }

        
        
    </style>
    <link href="style.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />

    <!-- lightgallery plugins -->
    <link type="text/css" rel="stylesheet" href="css/lg-zoom.css" />
    <link type="text/css" rel="stylesheet" href="css/lg-thumbnail.css" />

    <link rel="stylesheet" href="jvectomap/jquery-jvectormap.css" type="text/css" media="screen"/>

    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://jvectormap.com/js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="https://jvectormap.com/js/jquery-jvectormap-europe-mill.js"></script>

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
                $("#sidebar").load("Sidebar2.html"); 
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
                <main class="main-content bgc-grey-200">
                    <div id="mainContent">
                        <?php 

                            $servername = "localhost";
                            $username = "root";
                            $password = "";

                            $conn = new mysqli($servername, $username, $password);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            else {
                                $marina = $_GET["marina_button"];
                                $marina = str_replace("_", " ", $marina);
                                $conn->select_db("bluerosesdb");
                                $sql = "SELECT * FROM site WHERE name = '$marina'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        ?>
                                        <div id="info">
                                            <div class="container-fluid">
                                                
                                                <div class="bd bgc-white">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6" style="font-size: large;">
                                                                <h3 class="c-grey-900 mT-10 mB-30"><?php echo $row['name']?></h3>
                                                                <h5 class="c-grey-900 mT-10 mB-30">Date: 01/01/2021</h5>
                                                                <?php echo $row['description_a']?>
                                                            </div>
                                                            <div class="col-md-6" style="padding-top: 5%;">
                                                                <?php
                                                                    $filepath=$row['img_path']."thumbnail"; 
                                                                    $photos = scandir($filepath);
                                                                    $thumb_url = $filepath.'/'.$photos[2];
                                                                ?>
                                                                <img src='<?php echo $thumb_url?>' class="img">
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="row" style="margin-top: 5%; font-size: large;">
                                                            <div class="col-md-6">
                                                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                                                    <?php 
                                                                         $filepath=$row['img_path']."map"; 
                                                                         $photos = scandir($filepath);
                                                                         $map_url = $filepath.'/'.$photos[2];
                                                                    ?>
                                                                    <img src='<?php echo $map_url?>' class="img">                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <?php echo $row['description_b']?>
                                                            </div>
                                                            
                                                            
                    
                    
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        

                                        <br>
                                        <div class="bd bgc-white">
                                            <?php
                                                // $filepath=$row['img_path']."gallery"; 
                                                // $photos = scandir($filepath);
                                                // for ($i=2; $i<count($photos); $i++) {
                                                //     $photo = $photos[$i];
                                                //     print_r($photo);
                                                // }          
                                            ?>
                                            <div id="gallery">
                                                <div class="masonry-item col-md-12" style="padding-top: 2%;">
                                                    <h2>Gallery</h2>
                                                    <div id="lightgallery">

                                                        <?php
                                                            $filepath=$row['img_path']."gallery"; 
                                                            $photos = scandir($filepath);
                                                            for ($i=2; $i<count($photos); $i++) {
                                                                $photo = $filepath.'/'.$photos[$i];
                                                            
                                                        ?>
                                                        
                                                            <a href=<?php echo $photo ?> data-sub-html="<h4>Photo Title</h4> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>">
                                                                <img src='<?php echo $photo ?>' class= "gallery-img">  <!--class="masonry-item col-md-4" style="width: 100%; height: 100%; padding:0; margin-top: 7px;"-->
                                                            </a>
                                                            
                                                        <?php 
                                                            }
                                                        ?>
                                                    
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <div class="bd bgc-white">
                                            <div id="video">
                                                <h2 style="padding: 1.5%;">Video</h2>
                                                    <div class="embed-responsive embed-responsive-16by9" style="padding:2%;">
                                                        <iframe height="50%;" width="50%;" class="embed-responsive-item" src="https://www.youtube.com/embed/6k70Cy6UW_A?autoplay=1>" allowfullscreen ></iframe>
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

                </main>
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

        <script type="text/javascript" src="vendor.js"></script>
        <script type="text/javascript" src="bundle.js"></script>

        <script src="js/lightgallery.umd.js"></script>

        <!-- lightgallery plugins -->
        <script src="js/plugins/lg-thumbnail.umd.js"></script>
        <script src="js/plugins/lg-zoom.umd.js"></script>

        
        <script type="text/javascript">
            lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail],
                speed: 500,
                // ... other settings
            });
        </script>
        
        <script>
            $('.gallery-img').each(function(){

                var $img = $(this),
                    imgWidth = $img.width(),
                    imgHeight = $img.height();

                
                    $img.height(imgWidth * 0.6);
                
                });
        </script>
        <script>
            $(document).ready(function () {
            
            function selectArea(code){
            var mapObj = $("#map").vectorMap("get", "mapObject");
            areas.forEach(function(area) {
                if(area.indexOf(code)>-1) {
                mapObj.setSelectedRegions(area);
                return;
                }
            });
            }
        
            function clearAll(){
                var mapObj = $("#map").vectorMap("get", "mapObject");
                mapObj.clearSelectedRegions();
             }
        
            $("#map").vectorMap({
                map: "europe_mill",
                backgroundColor: "#496bf2",
                borderColor: "#fff",
                borderOpacity: 0.25,
                borderWidth: 0,
                color: "#e6e6e6",
                zoomOnScroll: false,
                regionsSelectable: true,
                regionStyle: {
                    initial: {
                    fill: "#e4ecef"
                },
          
                selected: {
                    fill: "darkseagreen"
                },
                series: { regions: [{ values: { US: 298, SA: 200, AU: 760, IN: 200, GB: 120 }, scale: ["#03a9f3", "#02a7f1"], normalizeFunction: "polynomial" }] },
                                        hoverOpacity: null,
                                        normalizeFunction: "linear",
                                        zoomOnScroll: !1,
                                        scaleColors: ["#b6d6ff", "#005ace"],
                                        selectedColor: "#c9dfaf",
                                        selectedRegions: [],
                                        enableZoom: !1,
                                        hoverColor: "#fff",
                },
                markerStyle: { initial: { r: 7, fill: "#ff0000", "fill-opacity": 1, stroke: "#ffffff", "stroke-width": 2, "stroke-opacity": 0.4 } },
                markers: [
                    {latLng: [43.861656, 10.238474], name: 'Marina di Viareggio'},
                    {latLng: [37.012480, -7.937009], name: 'Algarve'},
                
                
                ],
                focusOn: {
                    x: 0.5,
                    y: 0.65,
                    scale: 2,
                    // animate: true
                },
                panOnDrag: true,
                onRegionClick: function(e, code){
                    clearAll();
                    selectArea(code);
                    return false;
                },
                zoomMin: 1.5,
            // onMarkerClick: function(event, index){
            //     console.log('marker-click', index);
            //     window.location.href='fullpage.html';
            // },
                });
        
                (function () {
                // Collect the rest of the World
                var mapObj = $("#map").vectorMap("get", "mapObject");
                var states = areas.join(",");
                for(var code in mapObj.regions) {
                    if(mapObj.regions.hasOwnProperty(code)) {
                    if(states.indexOf(code) == -1) {
                        areas[0].push(code);
                    }
                }
            }
            })();
        
        });


        </script>
        
    </body>
</html>