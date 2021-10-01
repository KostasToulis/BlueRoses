<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <title>Blue Roses</title>
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
            margin-bottom: 0;
        }
        .sidebar-menu {
            background-color: rgb(53, 53, 134);
        }

        /* .main-content {
            background-image: url(images/seafloor3.jpg); 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            background-size: cover; 
        } */
       

        .showcase_img {
            height: 90%; 
            width: 80%; 
            border-radius: 3%;
        }

        ul.images {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row;
            width: 100%;
            overflow-x: auto; 
            /* width:10em;
            height: 20em;
            overflow: auto;
            white-space: nowrap;
            /* display: inline-block; */
        }
        ul.images li {
            flex: 0 0 auto;
            padding: 1em;
            width: 45em;
            height: 30em;
        }

        .img_banner {
            width:100%;
            height: 100%;

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

        /* Map CSS */
        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        /* Map CSS */

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

        /* body {
        background: #d1d3ee;
        background-image: url(images/seafloor3.jpg);
        background-image: url(images/seafloor3.jpg), linear-gradient(#000877, #d1d3ee); 
        } */

        .backgound {
            /* background-image: url(images/seafloor3.jpg); 
            background-repeat: no-repeat; 
            background-attachment: fixed; 
            background-size: cover;  */
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: contain;
            padding-top: -2%;
            margin-top: -2%;
            padding-left: -2%;
            margin-left: -2%;
            background: #d1d3ee;
            background-image: url(images/jellyfish3.jpg); /* fallback */
            background-image: url(images/jellyfish3.jpg), linear-gradient(#000877, #d1d3ee); /* W3C */
            height: 500px;
            width: 1500px;
        }

        .title-name {
            text-align: center;
            font-size: 6em;
            color: cornsilk;
            padding-top: 5%;
        }

        #map {
            height: 630px;
            min-height: 100px;
            max-width: 1000px;
            
        }

        .fb-container {
            position: relative;
            display: inline-block;
            overflow: hidden;
            width: 100%;
            padding-top: 100%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
            /* padding-top: 33.4%; */
        }

        .responsive-iframe {
            position: absolute;
            top: 2%;
            left: 3%;
            /* bottom: 0;
            right: 0; */
            width: 100%;
            height: 100%;
        }
        /* #main-content {
            padding-top: -10%;
            margin-top: -10%;
        } */

        
    </style>
    <link href="style.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
    <link href="css/themify-icons.css" rel="stylesheet">

    <!-- lightgallery plugins -->
    <link type="text/css" rel="stylesheet" href="css/lg-zoom.css" />
    <link type="text/css" rel="stylesheet" href="css/lg-thumbnail.css" />


    <script src="jvectomap/tests/assets/jquery-1.8.2.js"></script>

    <!-- jvectormap plugins -->
    <link rel="stylesheet" href="jvectomap/jquery-jvectormap.css" type="text/css" media="screen"/>


  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="http://jvectormap.com/js/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="https://jvectormap.com/js/jquery-jvectormap-europe-mill.js"></script>


    <!-- OR -->

   <!-- <link type="text/css" rel="stylesheet" href="css/lightgallery-bundle.css" />-->


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
                $("#navbar").load("Navbar.html"); 
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
                                        <!-- <div class="form-group-row"><input type="password" class="form-control" placeholder="Password"></div> -->
                                    </ul>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
                
                <main class="main-content bgc-grey-200">
                    
                    <div id="mainContent">
                        <div class="row gap-20 masonry pos-r">
                            <div class="masonry-sizer col-md-6"></div>
                            
                            <div class="masonry-item col-12">
                                <div class="bd bgc-white">
                                    <div class="peers fxw-nw@lg+ ai-s">
                                        <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                                            <div class="layers">
                                                <!-- <h1>Hi</h1> -->
                                                <div class="layer w-100 mB-10"><h4 class="lh-1" style="margin-left: 10%;">Mapped Sites</h6></div>
                                                <div class="layer w-100"> 
                                                    <div id="map" style="margin: auto;"></div>
                                                </div>   
                                            </div>
                                            
                                            <div class="masonry-item col-md-6">
                                                <div class="bd bgc-white p-20">
                                                    <div class="layers">
                                                        <div class="layer w-100 mB-10">
                                                            <h6>Livestream</h6>
                                                        </div>
                                                        <div class="layer w-100">
                                                            <div class="embed-responsive embed-responsive-16by9" >
                                                                <iframe height="50%;" width="50%;" class="embed-responsive-item" src="https://www.youtube.com/embed/6k70Cy6UW_A?autoplay=1>" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="masonry-item col-md-6">
                                                <div class="bd bgc-white p-20">
                                                    <div class="layer w-100 mB-10">
                                                        <h6>Calendar</h6>
                                                    </div>
                                                    <form action="fullpage.php" method="GET" id="form1">

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
                                                            $sql = "SELECT * FROM site";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                // output data of each row
                                                                while($row = $result->fetch_assoc()) {
                                                                    
                                                    ?>

                                                        <div class="layer w-100 mT-15">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <img src=<?php echo $row['thumbnail']?> style="height: 100%; width: 100%; border: 5%;">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div>
                                                                        <h6>
                                                                            Name: 
                                                                            <div>
                                                                                <?php echo $row['name']?>
                                                                            </div>
                                                                            
                                                                        </h6>    
                                                                        <div  class="d-inline">
                                                                            Date: 01/01/2021
                                                                            <!-- echo $row['date'] -->
                                                                        </div>
                                                                        <div class="d-inline" style="position: absolute; right:2%; bottom: 5%; padding-top: 2%;">
                                                                            <button type="submit" class="btn cur-p btn-outline-dark" name="marina_button" value="<?php echo $row['name']?>" form="form1">
                                                                                <i class="ti-eye"></i>
                                                                                    View More
                                                                                
                                                                            </button>
                                                                            
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
    
                                                        

                                                    </form>
                                                    
                                                    
                                                </div>
                                            </div>

                                            <div class="masonry-item col-md-6">
                                                <div class="bd bgc-white p-20" >
                                                    <div class="layers">
                                                        <!-- <div style="position: absolute;"> -->
                                                            <div class="layer w-100 mB-10">
                                                                <h6>Facebook Feed</h6>
                                                            </div>
                                                            <div class="layer w-100">
                                                                <div class="fb-container" >
                                                                    <iframe 
                                                                        class="responsive-iframe"
                                                                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBlueRosesProject&tabs=timeline&width=550&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" 
                                                                        width="600"
                                                                        height="600"
                                                                        style="border:none;overflow:hidden" 
                                                                        scrolling="no" 
                                                                        frameborder="0" 
                                                                        allowfullscreen="true" 
                                                                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                                                                    </iframe>
                                                                </div>
                                                            </div>
                                                        <!-- </div> -->
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
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


        <!-- jvectormap plugins -->
        <!-- <script src="jvectomap/bjornd-jvectormap-1a905c8/" -->
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
            
            var markers = [
                {latLng: [43.861656, 10.238474], name: 'Marina di Viareggio'},
                {latLng: [37.012480, -7.937009], name: 'Marina Algarve'},
            ];

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
            markers: markers,
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
            onMarkerClick: function(event, index){
                console.log('marker-click ', markers[index].name);
                var marina = markers[index].name;
                window.location.href='fullpage.php?marina_button=' + marina;
            },
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
