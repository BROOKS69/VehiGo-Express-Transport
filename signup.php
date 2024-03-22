
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup Page</title>
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
                            <a href="index.html"><img src="./assess/logo.png" alt="logo" width="192px" height="94px"></a>
                        </div>
                        <div class="ttms_header_divider">
                            <a href="index.html"><img src="./assess/sid-divider.png" alt="sid-divider"></a>
                        </div>
                        <div class="ttms_header_text">
                            <a href="index.html"><span class="ttms-logo-ride">VehiGo Express, GHANA</span><br>BUS TRANSPORT<br>MANAGEMENET<br>SYSTEM</span></a>
                        </div>
                </div>   
            </div>   
            <div class="rtmreg_container">
                <div class="rtmreg-section-a">
                    <div class="rtmreg_text">
                        <p><svg width="58" height="67" viewBox="0 0 58 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0L28.3696 22.3333L58 0L42 34.9155L28.3696 67L15 34.9155L0 0Z" fill="white"/>
                            </svg>
                        </p>
                        <p class="rtmreg_texta">Join Us</p>
                        <p class="rtmreg_textb">Register to join our community <br>of dispatchers</p>
                        <p><button><a href="about.html">About Us </a></button></p>
                    </div>
                    <div class="rtmreg_button">
                        
                    </div>
                </div>
                <div class="rtmreg-section-b">
                    <form class="rtmreg-section-form" method = "post">
                        <p><input type="text" name="fullname" placeholder="Full Name"></p>
                        <p><input type="text" name="lastname" placeholder="Last Name"></p>
                        <p><input type="email" name="email" placeholder="Email"></p>
                        <p><input type="number" name="number1" placeholder="Phone Number"></p>
                        <p><input type="address" name="address1" placeholder="Address"></p>
                        <p><input type="password" name="password1" placeholder="Password"></p>
                        <p><button><a href="registration.html">Register</a></button></p>
                    </form>
                    <br>
                    <p class="rtmreg_link">Already have an account? <a href="login.html">Login</a></p>  
                </div>   
            </div>
        </section> 

        <?php
        $host = "localhost"; 
        $username = "root";
        $password = "";
        $database = "vehigo_express_bustransport";
        
        $conn = mysqli_connect($host, $username, $password, $database);
        
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
       echo "connection success!";
        
        // Handle form submission and insert data into the database
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $fullname = $_POST['fullname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $number1 = $_POST['number1'];
          $address1 = $_POST['address1'];
          $password1 = $_POST['password1'];
           
          // Insert form data into the database 
          $sql = "INSERT into sign_up(fullname, lastname, email, number1, address1, password1)
                  VALUES ('$fullname', '$lastname', '$email', '$number1', '$address1', '$password1')";
        
          if (mysqli_query($conn, $sql)) {
            echo "requisition_form submitted successfully with status";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        }
        mysqli_close($conn);
        ?>

    </body>
    
