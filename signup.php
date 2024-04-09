    <?php
    session_start();

    ?>
    <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "vehigo_express_bustransport";

        // createing a connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }

        // handling the submission
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $fullname = $_POST["fullname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $number1 = $_POST["number1"];
            $address1 = $_POST["address1"];
            $password = md5($_POST["password"]); // Hashes the password

            $query = "INSERT INTO sign_up (fullname, lastname, email, number1, address1, password)

                      VALUES ('$fullname', ' $lastname', ' $email', '$number1', '$address1', '$password')";

            if($conn->query($query) === TRUE)
            {
                // echo "Registration successful";
            }          
            else{
                echo "Error: " . $query . "<br>" . $conn->error;
            
            }

            // display the user detail on the dashboard
            $fullname = htmlspecialchars(trim($_POST['fullname']));
            $lastname = htmlspecialchars(trim($_POST['lastname']));
            $email = htmlspecialchars(trim($_POST['email']));
            $number = htmlspecialchars(trim($_POST['number1']));
            $address = htmlspecialchars(trim($_POST['address1']));

            // Save user details in a database or a session, depending on your application needs.
            // Then, redirect the user to the dashboard.
            header("Location: login.php");
            exit();

        }

        // close the connection
        $conn->close();

        ?>
    
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
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
                        <p><button type="button"><a href="about.html">About Us </a></button></p>
                    </div>
                    <div class="rtmreg_button">
                        
                    </div>
                </div>
                <div class="rtmreg-section-b">
                    <form action ="signup.php" method="POST" class="rtmreg-section-form" >
                        <p><input type="text" name="fullname" id="fullname"  placeholder="Full Name" required></p>
                        <p><input type="text" name="lastname" id="lastname" placeholder="Last Name" required></p>
                        <p><input type="email" name="email1" id="email1" placeholder="Email" required></p>
                        <p><input type="number" name="number1" id="number1" placeholder="Phone Number" required></p>
                        <p><input type="address" name="address1" id="address1" placeholder="Address" required></p>
                        <p><input type="password" name="password1" placeholder="Password" required></p>

                        <p><button type="submit"><a href="registration.html">Register</button></p>
                    </form>
                    <br><p> </p>
                    <p class="rtmreg_link">Already have an account? <a href="login.html">Login</a></p>  
                </div>   
            </div>
        </section> 

        
    </body>
    
