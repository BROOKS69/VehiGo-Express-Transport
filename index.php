<?php
        require('./private/dbconnect/dbconnect.php');

    //interaction with the database connection
    session_start();
    // if (!isset($_SESSION['Valid'])) {
    //     # code...
    //     header("Location: login.php");
    //     }

    
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <link rel="stylesheet" type="text/css" href="./style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lato:wght@400;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body>
        <section class="container">
            <div class="ttms_containers">
                <div class="ttms_header">
                    <div class="testing">
                        <div class="ttms_header_content">
                                <div class="ttms_header_logo">
                                    <a href="index.php"><img src="./assess/logo.png" alt="logo" width="192px" height="94px"></a>
                                </div>
                                <div class="ttms_header_divider">
                                    <a href="index.php"><img src="./assess/sid-divider.png" alt="sid-divider"></a>
                                </div>
                                <div class="ttms_header_text">
                                    <a href="index.php"><span class="ttms-logo-ride">VehiGo Express, GHANA</span><br>BUS TRANSPORT<br>MANAGEMENET<br>SYSTEM</span></a>
                                </div>
                        </div>
                        <div class="ttms_header_nav">
                            <ul>                                
                                <li><a href="index.php">HOME</a></li>  
                                <li><a href="dashboard.php">DASHBOARD</a></li>                              
                                    <li>
                                        <div class="dropdown">
                                            <button class="dropbtn">SERVICES</button>
                                            <div class="dropdown-content">
                                            <a href="membership.php">Membership</a>
                                            <a href="booking.php">Booking</a>
                                            <a href="delivery.php">Delivery</a>
                                            <a href="agent.html">Agents</a>
                                            <a href="review.php">Reviews</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="about.html">ABOUT</a></li>
                                
                                <!-- <li>
                                <span class="login_nav_link">
                                    <div class="dropdown">
                                        <button class="dropbtn">LOGIN</button>
                                    <div class="dropdown-content">
                                        <a href="login.php">Login</a>
                                      <a href="signup.php">New User</a>
                                </span>
                                </li> -->
                            </ul>
                        </div>
                    </div>   
                </div>
                <div class="ttms_body">
                    <div class="ttms_body_text">
                        <p>Enjoy Safe <br><span> Ride</span> With <br> Us</p>
                    </div>
                    <div class="ttms_body_img">
                        <!--<img src="./assess/body__img-removebg-preview.png">-->
                    </div>
                </div>
            </div>    
        </section>

    </body>
