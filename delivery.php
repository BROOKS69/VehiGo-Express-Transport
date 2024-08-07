<?php
                 session_start();
                 require ('./private/dbconnect/dbconnect.php');
                 
            //    // interaction with the database connection
                // if (!isset($_SESSION['Valid'])) {
                //     # code...
                //   header("Location: login.php");
                // }
        
               
    ?>

<!DOCTYPE Html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delivery Page</title>
        <link rel="stylesheet" type="text/css" href="./style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lato:wght@400;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body>
        <section class="container_c">
            <div class="testing">
                <div class="ttms_header_content">
                        <div class="ttms_header_logo">
                            <a href="index.php"><img src="./assess/logo.png" alt="logo" width="192px" height="94px"></a>
                        </div>
                        <div class="ttms_header_divider">
                            <a href="index.php"><img src="./assess/sid-divider.png" alt="sid-divider"></a>
                        </div>
                        <div class="ttms_header_text">
                            <a href="index.php"><span class="ttms-logo-ride">VehiGo Express, GHANA</span><br>BUS TRANSPORT<br>MANAGEMENT<br>SYSTEM</span></a>
                        </div>
                </div>   
            </div>
            <div class="booking_b-content">
                <div class="booking_b-content-fl">
                    <div class="booking_b-content-flex">
                        <p class="booking_b-content-text">Delivery Details</p>
                        <form action="delivery.php" method="POST">
                            <!-- Customer or User Details -->
                            <p><input type="text" name="couriername" placeholder="Courier name" required></p>
                            <p><input type="number" name="contact" placeholder="Phone" required></p>
                            <p><input type="text" name="courieradrs" placeholder="Courier address" required></p>
                            <!-- Receiver Details -->
                            <p><input type="text" name="recievername" placeholder="Receiver name" required></p>
                            <p><input type="number" name="recievercontact" placeholder="Receiver contact" required></p>
                            <p><input type="text" name="itemname" placeholder="Package name" required></p>
                            <p><input type="text" name="recieveradrs" placeholder="Receiver address" required></p>
                        </form> 
                        </form> 
                    </div>
                </div>
                <div class="booking_b-button">
                <a href="delivery_successful.html"><button type="submit" name="submit" value="Submit">Submit Details</button></a>
                </div>
            </div>
            
            <footer class="footer-booking">
                <div class="bottom-footera">
					<span>
                        <svg width="23" height="23" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.7393 30.47C20.2931 31.5623 19.1392 32.1777 17.9854 31.9546C16.8315 31.7238 15.9315
                         30.7161 15.9315 29.5392V16.0004H2.39269C1.28574 16.0004 0.273404 15.1697 0.0464757 14.0158C-0.180453 
                         12.8619 0.441101 11.708 1.52959 11.2619L28.6087 0.183205C29.5241 -0.192187 30.578 0.0201249 31.278 
                         0.720908C31.978 1.42246 32.1934 2.47633 31.8165 3.39404L20.7393 30.47Z" fill="white"/>
                        </svg>
                    </span>
					<span>3P8P+F5F, Koforidua-Nsutam Road, Koforidua, Ghana.</span>
				</div>
				<div class="footer-icona">
                    <p class="social-icon">
                        <a href="#">       
                            <svg width="16" height="28" viewBox="0 0 26 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M24.2962 27L25.6444 18.3131H17.2145V12.6759C17.2145 10.2994 18.3921 7.98281 22.1676   
                             7.98281H26V0.586875C26 0.586875 22.5222 0 19.1971 0C12.2548 0 7.71694 4.16063 7.71694 
                             11.6925V18.3131H0V27H7.71694V48H17.2145V27H24.2962Z" fill="white"/>
                            </svg>
                        </a>
                    </p>
                    <p class="social-icon">
                        <a href="#">
                            <svg width="34" height="24" viewBox="0 0 54 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M48.4494 10.9656C48.4837 11.4468 48.4837 11.9281 48.4837 12.4094C48.4837 27.0874 
                                37.3479 44 16.995 44C10.7246 44 4.89978 42.178 0 39.0157C0.890898 39.1187 1.74741 39.1531
                                 2.67259 39.1531C7.84638 39.1531 12.6092 37.4001 16.4125 34.4094C11.547 34.3063 7.46954 
                                 31.1094 6.06469 26.7094C6.75003 26.8124 7.43526 26.8812 8.15488 26.8812C9.1485 26.8812
                                  10.1422 26.7437 11.0673 26.5031C5.99624 25.4718 2.19281 21.0031 2.19281 15.6062V15.4688C3.66611
                                   16.2938 5.37946 16.8094 7.19532 16.8781C4.21434 14.8843 2.26136 11.4812 2.26136 7.63117C2.26136
                                    5.56871 2.80949 3.67809 3.76894 2.02807C9.21695 8.76557 17.4061 13.1655 26.5888 13.6468C26.4175 
                                    12.8218 26.3147 11.9625 26.3147 11.1031C26.3147 4.98432 31.2487 0 37.382 0C40.5685 0 43.4467 
                                    1.34062 45.4683 3.50625C47.9695 3.02502 50.368 2.09685 52.4924 0.825006C51.67 3.40319 49.9226
                                     5.56882 47.6269 6.94372C49.8541 6.70321 52.0128 6.08433 54 5.22504C52.4926 7.42495 50.608 
                                     9.38424 48.4494 10.9656Z" fill="white"/>
                            </svg>
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            <svg width="22" height="22" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.9953 10.2317C26.9545 10.2317 31.7612 15.0395 31.7612 21C31.7612 26.9605 26.9545 
                                31.7683 20.9953 31.7683C15.0361 31.7683 10.2294 26.9605 10.2294 21C10.2294 15.0395 15.0361
                                 10.2317 20.9953 10.2317ZM20.9953 28.0008C24.8463 28.0008 27.9945 24.8612 27.9945 21C27.9945
                                  17.1388 24.8557 13.9992 20.9953 13.9992C17.135 13.9992 13.9961 17.1388 13.9961 21C13.9961
                                   24.8612 17.1443 28.0008 20.9953 28.0008ZM7.27797 9.79125C7.27797 11.1877 8.40234 12.3029 
                                   9.78907 12.3029C11.1852 12.3029 12.3002 11.1783 12.3002 9.79125C12.3002 8.40422 11.1758
                                    7.27959 9.78907 7.27959C8.40234 7.27959 7.27797 8.40422 7.27797 9.79125ZM0.147572 
                                    12.3404C0.306858 8.9759 1.07518 5.99565 3.53943 3.54022C5.99431 1.08479 8.9739 0.3163 
                                    12.3376 0.147607C15.8045 -0.0492023 26.1955 -0.0492023 29.6624 0.147607C33.0167 0.306928
                                     35.9963 1.07542 38.4606 3.53085C40.9248 5.98628 41.6838 8.96653 41.8524 12.331C42.0492 
                                     15.7986 42.0492 26.192 41.8524 29.6596C41.6931 33.0241 40.9248 36.0044 38.4606 38.4598C35.9963
                                      40.9152 33.0261 41.6837 29.6624 41.8524C26.1955 42.0492 15.8045 42.0492 12.3376 41.8524C8.9739 
                                      41.6931 5.99431 40.9246 3.53943 38.4598C1.08455 36.0044 0.316227 33.0241 0.147572 29.6596C-0.0491905
                                       26.192 -0.0491905 15.808 0.147572 12.3404ZM4.62632 33.3802C5.35717 35.2171 6.772 36.6323 8.61784 
                                       37.3726C11.3819 38.4692 17.9408 38.2161 20.9953 38.2161C24.0499 38.2161 30.6181 38.4598 33.3728 
                                       37.3726C35.2093 36.6416 36.6241 35.2265 37.3643 33.3802C38.4606 30.6155 38.2076 24.0552 38.2076 
                                       21C38.2076 17.9448 38.4512 11.3751 37.3643 8.61977C36.6335 6.78289 35.2186 5.36773 33.3728 
                                       4.62736C30.6087 3.53085 24.0499 3.78389 20.9953 3.78389C17.9408 3.78389 11.3726 3.54022 
                                       8.61784 4.62736C6.78137 5.35836 5.36654 6.77351 4.62632 8.61977C3.53006 11.3845 3.78305 
                                       17.9448 3.78305 21C3.78305 24.0552 3.53006 30.6249 4.62632 33.3802Z" fill="white"/>
                            </svg>
                        </a>
                    </p>
				</div>
            </footer>
        </section>
        

        
    </body>
</html>