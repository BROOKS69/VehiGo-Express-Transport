
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lato:wght@400;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body>
        <section class="container_b">
            <div class="rtm_tricyle">
                <div class="ttms_header_content">
                    <div class="ttms_header_logo">
                        <a href="index.html"><img src="./assess/logo.png" alt="logo" width="192px" height="94px"></a>
                    </div>
                    <div class="ttms_header_divider">
                        <a href="index.html"><img src="./assess/sid-divider.png" alt="sid-divider"></a>
                    </div>
                    <div class="ttms_header_text">
                        <a href="index.html"><span class="ttms-logo-ride">VehiGo Express, GHANA</span><br>BUS TRANSPORT<br>MANAGEMENET<br>SYSTEM</span></a>
                    </div>
                </div>
                <div class="rtm_tricyle_bg">

                </div>
            </div>
            <div class="RTMSlogin">
                <div class="login">
                    <div class="login_text">
                        <p>Login</p>
                        <img src="./assess/Line 1.png">
                    </div>
                </div>
                <div class="login_text_paragraph">
                    <p>Welcome back,please login to<br>your account</p>
                </div>
                <div class="form_input">
                    <form method="POST">
                        <p><input type="email" name="email" id="email" placeholder="Email/Username" required></p>
                        <p><input type="password" name="password" placeholder="Password" required></p>
                        <p><button type="submit" <a href="index.html"</a>Login</button></p>
                        <div class= "rtmslogin_footer_or">
                            <p class="rtmslogin_footer_or_hr"></p>
                            <span class="rtmslogin_footer_or_text">or</span>
                            <p class="rtmslogin_footer_or_hr"></p>
                        </div>
                        <br>
                        <p><button><a href="signup.php">Sign Up</a></button></p>
                    </form>
                    <div class="rtmslogin_footer">
                        <div class="rtmslogin_footer_icons">
                            <p class="rtmslogin-icon-border"><svg width="13" height="33" viewBox="0 0 23 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.4928 23.9235L22.6855 16.4379H15.2282V11.5803C15.2282 9.53235 16.2699 7.53613 19.6098 7.53613H23V1.16295C23 1.16295 19.9235 0.657227 16.982 0.657227C10.8407 0.657227 6.82653 4.2425 6.82653 10.7328V16.4379H0V23.9235H6.82653V42.0195H15.2282V23.9235H21.4928Z" fill="url(#paint0_linear_50_11)"/>
                                <defs>
                                <linearGradient id="paint0_linear_50_11" x1="11.5" y1="0.657227" x2="11.5" y2="42.0195" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#673B99"/>
                                <stop offset="1" stop-color="#B10AA7"/>
                                </linearGradient>
                                </defs>
                                </svg>
                            </p>
                            <p class="rtmslogin-icon-border icon-border-space"><svg width="28" height="28" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.0042 9.44768C13.6126 9.44768 9.26369 13.6319 9.26369 18.8193C9.26369 24.0068 13.6126 28.191 19.0042 28.191C24.3959 28.191 28.7448 24.0068 28.7448 18.8193C28.7448 13.6319 24.3959 9.44768 19.0042 9.44768ZM19.0042 24.9121C15.52 24.9121 12.6716 22.1798 12.6716 18.8193C12.6716 15.4589 15.5115 12.7265 19.0042 12.7265C22.4969 12.7265 25.3369 15.4589 25.3369 18.8193C25.3369 22.1798 22.4885 24.9121 19.0042 24.9121ZM31.4152 9.06433C31.4152 10.2796 30.3979 11.2502 29.1432 11.2502C27.8801 11.2502 26.8713 10.2715 26.8713 9.06433C26.8713 7.85719 27.8886 6.87842 29.1432 6.87842C30.3979 6.87842 31.4152 7.85719 31.4152 9.06433ZM37.8665 11.2829C37.7224 8.35472 37.0272 5.761 34.7977 3.62403C32.5766 1.48707 29.8808 0.818246 26.8374 0.671431C23.7007 0.500148 14.2993 0.500148 11.1626 0.671431C8.12772 0.81009 5.4319 1.47891 3.20234 3.61588C0.972783 5.75284 0.286113 8.34657 0.133519 11.2747C-0.0445064 14.2926 -0.0445064 23.338 0.133519 26.3558C0.277635 29.2839 0.972783 31.8777 3.20234 34.0146C5.4319 36.1516 8.11924 36.8204 11.1626 36.9672C14.2993 37.1385 23.7007 37.1385 26.8374 36.9672C29.8808 36.8286 32.5766 36.1598 34.7977 34.0146C37.0187 31.8777 37.7139 29.2839 37.8665 26.3558C38.0445 23.338 38.0445 14.3007 37.8665 11.2829ZM33.8143 29.5939C33.153 31.1925 31.873 32.4241 30.2029 33.0685C27.7021 34.0228 21.7679 33.8026 19.0042 33.8026C16.2406 33.8026 10.2979 34.0146 7.80558 33.0685C6.144 32.4323 4.86392 31.2007 4.1942 29.5939C3.20234 27.1878 3.43123 21.4783 3.43123 18.8193C3.43123 16.1604 3.21082 10.4428 4.1942 8.04478C4.85544 6.44614 6.13553 5.21452 7.80558 4.57017C10.3064 3.61588 16.2406 3.8361 19.0042 3.8361C21.7679 3.8361 27.7105 3.62403 30.2029 4.57017C31.8645 5.20637 33.1446 6.43798 33.8143 8.04478C34.8061 10.4509 34.5772 16.1604 34.5772 18.8193C34.5772 21.4783 34.8061 27.1959 33.8143 29.5939Z" fill="url(#paint0_linear_50_13)"/>
                                <defs>
                                <linearGradient id="paint0_linear_50_13" x1="19" y1="0.542969" x2="19" y2="37.0957" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#673B99"/>
                                <stop offset="1" stop-color="#B10AA7"/>
                                </linearGradient>
                                </defs>
                                </svg>
                            </p>
                            <p class="rtmslogin-icon-border"><svg width="21" height="16" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.9084 11.0661C25.0308 11.6973 25.1181 12.3286 25.1181 13.1474C25.1181 20.2955 20.2063 25.3623 12.8125 25.3623C5.73333 25.3623 0 19.7667 0 12.8574C0 5.94815 5.73333 0.352539 12.8125 0.352539C16.2735 0.352539 19.1576 1.58082 21.3949 3.62804L17.9165 6.88647C16.9726 5.99934 15.3121 4.9587 12.8125 4.9587C8.44264 4.9587 4.87676 8.49009 4.87676 12.8574C4.87676 17.2248 8.44264 20.7561 12.8125 20.7561C17.8815 20.7561 19.7868 17.1906 20.0839 15.3652H12.8125V11.066H24.9084V11.0661ZM37.2808 11.4853V7.85547H33.5438V11.4853H29.8246V15.1327H33.5438V18.7625H37.2808V15.1327H41V11.4853H37.2808Z" fill="url(#paint0_linear_50_12)"/>
                                <defs>
                                <linearGradient id="paint0_linear_50_12" x1="20.5" y1="0.352539" x2="20.5" y2="25.3623" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#673B99"/>
                                <stop offset="1" stop-color="#B10AA7"/>
                                </linearGradient>
                                </defs>
                                </svg>
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

             <?php
                // Database connection parameters
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "vehigo_express_bustransport";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

                // interaction with the database connection
               
            ?>
        
    </body>