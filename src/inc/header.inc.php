<!DOCTYPE html>
<html lang="en"><!--Website Language-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A2Z Recyclers</title>
    <!-- Stylesheet Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-XXXTJfLF6rwFrSdVYWW+soK68HzINnM0fHUrEDM7z8zqwEBpSKi97W8oVB1Jq5sf" crossorigin="anonymous">

</head>
<style>

</style>
</head>

<body>


    <!-- Fullscreen Overlay -->

    <!--   the <span> element below closes side navbar when clicking outside if collapsed   -->

    <div>
        <span id="myOverlay" class="overlay" onclick="closeOverlay(), closeNav()" id="myOverlay" class="overlay" title="Close Overlay"></span>


    </div>

    <!-- Fullscreen Search -->

    <div id="myOverlaySearch" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">&#10005;</span>

        <!-- <div class="overlay-content" style="z-index: 5;"> -->
        <form class="d-flex justify-content-center align-items-center" action="" name="searchbox" id="searchbox">
            <div class="col-4 p-1 bg-light rounded rounded-pill shadow-sm mb-4" style="min-width: 250px;">
                <div class="input-group d-flex justify-content-center align-items-center">
                    <input type="search" name="search" id="search" placeholder="Search" aria-describedby="button-addon1" class="form-control border-0 bg-light" style="min-width: 200px;">
                    <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link text-primary" style="color: #f8f9fa; background-color: #f8f9fa;">
                            <i class="fa fa-search"></i>
                            <svg style="color:black" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>

        </form><br>





        <!-- </div> -->




    </div>





    <!-- Skip Link -->
    <!-- <a href="#section2" class="skip">Skip to main content</a> -->



    <!--Navbar-->
    <nav class="sticky-top navbar navbar-expand-lg d-flex justify-content-between" aria-label="Main navigation">

        <div class="d-flex justify-content-center">

            <!-- humburger menu -->

            <div id="main">

                <div class="container" id="hamburger" onclick="myFunction(this), openNav(), openOverlay(), closeSearch()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>


            <!--  Logo -->

            <div class="">

                <a href="index.php">
                    <img src="img/A2Z_logo.png" class="brand-center" id="brand-center" alt="brand" style="">
                </a>
            </div>
        </div>




        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent" id="myMenu">
            <a class="navbar-brand d-none d-md-block" href="index.php" style="padding: 0px;" ">
                <img src=" img/A2Z_logo.png" alt="gelos-brand" id="brand-start" class="brand-start" style="margin: 0px 0px 0px 0px;">
            </a>

            <ul class="navbar-nav  justify-content-center">
                <!-- added a bit of margin to center navbar items better since the search box is "camuflated" -->
                <li>

                </li>
                <li class="nav-item">
                    <a class="nav-link zone" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link zone" href="purpose.php">Purpose</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link zone" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link zone" href="contact.php">Contact</a>
                </li>
                <!--"d-flex was used to get the search box and icon inline"-->
                <form class="d-flex">

                    <!-- previsous button -->
                    <!-- <button class="btn btn-sm btn-outline-dark" type="submit" >Search</button> -->

                    <!--choosed to customise the bootstrap template for aesthatics-->
                    <!-- <input class="search-box input-small" type="search" id="search" name="search"  placeholder="Search">  the input field was no longer necessary due to fullscreen searchbar option  -->
                    <label hidden="hidden" for="search">Search</label>
                    <button type="button" class="btn btn-secondary" STYLE="margin: 0px 0px 7px 0px" id="magnifier">
                        <svg onclick="openSearch(), closeNav()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </button>
                </form>
            </ul>



            <ul class="navbar-nav  mb-2 mb-lg-0 d-flex  ">
                <li class="nav-item">
                    <a href="login.php" class="btn btn-outline-secondary btn-sm" style="width:fit-content;margin-right: 10px;" type=" button">Log in</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="btn btn-primary btn-sm" style="width:fit-content; color: #818181;" type="button">Sign up</a>
                </li>
            </ul>

        </div>








    </nav>

    <!-- side Navegation -->
    <div id="mySidenav" class="sidenav">

        <div href="javascript:void(0)" class="closebtn d-flex justify-content-center" style="margin-left: 0px; padding-left: 0px; padding-right: 52.5px;">
            <!-- the padding-right is aligning the logo and the hamburger manu with the overlayed in the navbar -->
            <div id="main" style=" padding-right: 0px;" id="menu-logo-sidenav">

                <div class="container" id="hamburger" onclick="closeNav(), closeOverlay(), closeSearch()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>

            <div class="" id="brand-center">

                <a href="index.php" style="padding: 0px;">
                    <img src="img/A2Z_logo.png" class="brand-center" id="brand-center" alt="brand" style="margin-top: 7.5px; padding: 0px;">
                    <!--  Logo -->
                </a>
            </div>
        </div>

        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
        <a href="index.php">Home</a>
        <a href="purpose.php">Purpose</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>

        <!-- little dropdown menu in case of implementations -->
        <!-- <button class="dropdown-btn">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div> -->

        <label hidden="hidden" for="search">Search</label>
        <a type="button" class="" id="magnifier"> <svg onclick="openSearch(), closeNav(), closeOverlay()" xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
            </svg></a>


        <div class="" id="sign-in-out" style="padding: 32px 8px 8px 32px; width: 175px;"> <!-- in order to make both buttons fit side by side the fixed 175px width was used -->
            <li class="nav-item justify-content-end" style="padding: 0px; margin: 10;">
                <a href="login.php" class="btn btn-outline-secondary btn-sm" style="width:fit-content;margin-right: 0px; " type=" button">Log in</a>
            </li>

            <li class="nav-item justify-content-start" style="padding: 0px; margin: 10;">
                <a href="signup.php" class="btn btn-primary btn-sm" style="width:fit-content; " type="button">Sign up</a>
            </li>
        </div>

    </div>


    <!-- Clock widget -->


    <div id="clock-widget" class="clock-widget">
        <div class=" d-flex justify-content-center  align-items-center">
            <span id="hours"></span>:<span id="minutes"></span>
        </div>

        <div class=" d-flex justify-content-center  align-items-center">
            <span id="weekday" style="font-size:small;"></span><span style="font-size:small;">, </span><span id="day" style="font-size:small;"></span><span style="font-size:small;">&nbsp;</span><span id="month" style="font-size:small;"></span>
        </div>
    </div>







    <script type="text/javascript">
        // js to open and close side nav
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            // document.getElementById("main").style.marginLeft = "250px"; - Disabling this allow me to open the menu withouth the push since preference is overlaying.
            // document.body.style.backgroundColor = "rgba(0,0,0,0.4)"; - no longer using it since a custom overlay was created.
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            // document.getElementById("main").style.marginLeft= "0"; - Disabling this allow me to open the menu withouth the push since preference is overlaying.
            document.body.style.backgroundColor = "white";
        }


        // js for toggle button open/close in the navbar
        function myFunction(x) {
            x.classList.toggle("change");
        }


        // js for dropdown menu in the navbar
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }


        //js for  Open the full screen search box
        function openSearch() {
            document.getElementById("myOverlaySearch").style.display = "block";
        }

        // Close the full screen search box
        function closeSearch() {
            document.getElementById("myOverlaySearch").style.display = "none";
        }


        //js for  Open the full screen overlay
        function openOverlay() {
            document.getElementById("myOverlay").style.display = "block";
        }

        // Close the full screen overlay
        function closeOverlay() {
            document.getElementById("myOverlay").style.display = "none";
        }



        // js for Clock widget

        function updateClock() {
            var now = new Date();
            var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var monthsOfYear = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            var weekday = daysOfWeek[now.getDay()];
            var day = now.getDate().toString().padStart(2, '0');
            var month = monthsOfYear[now.getMonth()];

            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');

            document.getElementById('weekday').textContent = weekday;
            document.getElementById('day').textContent = day;
            document.getElementById('month').textContent = month;
            document.getElementById('hours').textContent = hours;
            document.getElementById('minutes').textContent = minutes;
        }

        setInterval(updateClock, 1000);


        // clock fades untill hidden when scrolling down
        var clockWidget = document.getElementById('clock-widget');
        var scrollPosition = window.scrollY;

        window.addEventListener('scroll', function() {
            if (window.scrollY > scrollPosition) {
                clockWidget.classList.add('hidden');
            } else {
                clockWidget.classList.remove('hidden');
            }

            scrollPosition = window.scrollY;
        });


        // Js to identify and indicate active page / navbar and sidenav link

        document.addEventListener('DOMContentLoaded', function() {
            var sideNavLinks = document.querySelectorAll('.sidenav a');
            var mainNavLinks = document.querySelectorAll('nav ul li a');

            // Function to highlight the active link based on the current URL
            function highlightActiveLink() {
                var currentURL = window.location.href;

                // Check the side navigation links
                sideNavLinks.forEach(function(link) {
                    if (link.href === currentURL) {
                        link.classList.add('indicator');
                    } else {
                        link.classList.remove('indicator');
                    }
                });

                // Check the main navigation links
                mainNavLinks.forEach(function(link) {
                    if (link.href === currentURL) {
                        link.classList.add('indicator');
                    } else {
                        link.classList.remove('indicator');
                    }
                });
            }

            // Highlight the active link on page load
            highlightActiveLink();

            // Add click event listeners to the links
            sideNavLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    // Remove 'active' class from all links
                    sideNavLinks.forEach(function(link) {
                        link.classList.remove('indicator');
                    });

                    mainNavLinks.forEach(function(link) {
                        link.classList.remove('indicator');
                    });

                    // Add 'active' class to the clicked link
                    this.classList.add('indicator');
                });
            });
        });
    </script>