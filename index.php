<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sky.css" />
    <link rel="stylesheet" href="css/dark-theme.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <title>MY TESTIMONIAL</title>
</head>

<body>
    <div class="modal_sec">
        <span class="cut_btn"><i class="fa-solid fa-xmark"></i></span>
        <div class="container close_bg">
            <div class="modal_main">
                <div class="row justify-content-center">
                    <div class="col-sm-10 text-center">
                        <div class="holiday_heading modal_heading">
                            <div class="title mb-5">
                                <h2>enquiry now</h2>
                                <!-- <p>Find a Perfect holiday Destination</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="row input-container">
                        <div class="col-sm-12">
                            <div class="styled-input wide">
                                <input type="text" name="name" required />
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="styled-input">
                                <input type="text" name="email" required />
                                <label>Email</label>
                            </div>
                        </div>
                        <div class=" col-sm-12">
                            <div class="styled-input" style="float:right;">
                                <input type="text" name="number" required />
                                <label>Phone Number</label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="styled-input wide">
                                <textarea name="msg" required></textarea>
                                <label>Message</label>
                            </div>
                        </div>
                        <div class="col-sm-12 login_box">
                            <button type="submit" name="send">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Submit
                            </button>
                        </div>

                    </div>
                    <?php
                
                //Import PHPMailer classes into the global namespace
                //These must be at the top of your script, not inside a function
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\Exception;
                                if(isset($_POST['send']))
                                {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $number = $_POST['number'];
                                    $msg = $_POST['msg'];
                
                
                
                //Load Composer's autoloader
                require 'PHPMailer\Exception.php';
                require 'PHPMailer\PHPMailer.php';
                require 'PHPMailer\SMTP.php';
                
                
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);
                
                try {
                    //Server settings
                                     //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'surajbanerjee255@gmail.com';                     //SMTP username
                    $mail->Password   = 'psfl rlta xfqa aary';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                    //Recipients
                    $mail->setFrom('surajbanerjee255@gmail.com', 'Contact Form');
                    $mail->addAddress('priyankamalikhs@gmail.com', 'my website');     //Add a recipient
                    // $mail->addAddress('ellen@example.com');               //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');
                
                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'test form';
                    $mail->Body    = "Name - $name <br> Email - $email <br> Number - $number <br> Massage - $msg";
                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                
                                }
                                ?>
            </div>
            </form>
        </div>

    </div>

    <!-- <div class="search_popup">
        <div class="close_bg"></div>
        <div class="modal_content">
            <div class="login-box">
                <h2>Contact Us</h2>
                <form action="" method="post">
                    <div class="user-box">
                        <input type="text" name="name" required="">
                        <label>Name *</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="email" required="">
                        <label>Email *</label>
                    </div>
                    <div class="user-box">
                        <input type="number" name="number" required="">
                        <label>Phone Number *</label>
                    </div>
                    <div class="user-box">
                        <textarea type="text" name="msg" required="" rows="2" cols="50"></textarea>
                        <label>Message</label>
                    </div>
                    <button type="submit" name="send">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </button>
                </form>
            
            </div>

        </div>
    </div> -->

    <div id="main1" class="main dark_mode">
        <div class="sky1">
            <div class="star1"></div>
            <div class="star2"></div>
            <div class="star3"></div>


            <!-- <div class="grass"></div>
        <div class="house"></div>
        <div class="clouds"></div> -->

        </div>
        <header class="my_header">
            <div class="container">
                <nav class="navbar my_nav">
                    <a class="navbar-brand">
                        <img class="img-fluid" src="images/logo.svg" alt="" />
                    </a>
                    <span class="color_change_icon">
                        <div id="switch" class="off">

                            <div id="contentwrapper">

                                <div id="circle"></div>

                                <div id="stars">
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div class="star"></div>
                                    <div id="shtngstarwrapper">
                                        <div id="shootingstar"></div>
                                    </div>

                                </div>

                                <div>
                                    <div class="cloud">
                                        <div class="cloudpart"></div>
                                        <div class="cloudpart"></div>
                                    </div>
                                    <div class="cloud">
                                        <div class="cloudpart"></div>
                                        <div class="cloudpart"></div>
                                    </div>
                                    <div class="cloud">
                                        <div class="cloudpart"></div>
                                        <div class="cloudpart"></div>
                                        <div class="cloudpart"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </span>
                </nav>
            </div>
        </header>
        <div class="section all_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="sticky_sidebar">
                            <div class="side_box">
                                <div class="avtar">
                                    <img class="img-fluid" src="images/pinki website/3.jpg" alt="" />
                                </div>
                                <div class="main_cpntent_box">
                                    <h2 class="name">PRIYANKA MALIK</h2>
                                    <h3 class="role">Staff Nurse</h3>
                                    <div class="social_icons">
                                        <ul>
                                            <li>
                                                <a class="socialbtn blue" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a class="socialbtn sky" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a class="socialbtn red" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a class="socialbtn red" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="all_info_box">
                                    <ul>
                                        <li>
                                            <span class="icon red">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 320 512" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="info">
                                                <p>Phone</p>
                                                <a class="add" href="#">+91 8436712455</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="icon green_blue">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 384 512" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="info">
                                                <p>Location</p>
                                                <a class="add" href="#">Kotulpur, Bankura, Pin:722141</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="icon c_red">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 512 512" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="info">
                                                <p>Email</p>
                                                <a class="add" href="#">priyankamalikhs@gmail.com</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="icon pink">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" height="1em" width="1em" x="0"
                                                    y="0" viewBox="0 0 512 512"
                                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                    class="">
                                                    <g>
                                                        <circle cx="256" cy="316" r="30" fill="#000000" opacity="1"
                                                            data-original="#000000" class=""></circle>
                                                        <path
                                                            d="M311 431c0-30.327-24.673-55-55-55s-55 24.673-55 55v5h110z"
                                                            fill="#000000" opacity="1" data-original="#000000" class="">
                                                        </path>
                                                        <path
                                                            d="M0 457c0 30.327 24.673 55 55 55h402c30.327 0 55-24.673 55-55V210H0zm171-26c0-31.171 16.877-58.461 41.963-73.255C202.475 346.936 196 332.214 196 316c0-33.084 26.916-60 60-60s60 26.916 60 60c0 16.214-6.475 30.936-16.962 41.745C324.123 372.539 341 399.829 341 431v20c0 8.284-6.716 15-15 15H186c-8.284 0-15-6.716-15-15zM457 60h-2.198c-2.181-13.603-7.308-26.194-14.983-36.426C428.584 8.592 412.612 0 396 0s-32.584 8.592-43.819 23.574C344.506 33.806 339.378 46.397 337.198 60h30.591c4.223-17.28 15.437-30 28.212-30s23.989 12.72 28.212 30H367.79A63.239 63.239 0 0 0 366 75c0 24.393 13.738 45 30 45 8.284 0 15 6.716 15 15s-6.716 15-15 15c-16.612 0-32.584-8.592-43.819-23.574C341.746 112.515 336 94.251 336 75c0-5.091.413-10.109 1.198-15h-22.395c-2.181-13.603-7.308-26.194-14.983-36.426C288.584 8.592 272.612 0 256 0s-32.584 8.592-43.819 23.574C204.506 33.806 199.379 46.397 197.198 60h30.591c4.223-17.28 15.437-30 28.212-30s23.989 12.72 28.212 30H227.79A63.239 63.239 0 0 0 226 75c0 24.393 13.738 45 30 45 8.284 0 15 6.716 15 15s-6.716 15-15 15c-16.612 0-32.584-8.592-43.819-23.574C201.746 112.515 196 94.251 196 75c0-5.091.413-10.109 1.198-15h-22.395c-2.181-13.603-7.308-26.194-14.983-36.426C148.584 8.592 132.612 0 116 0S83.416 8.592 72.181 23.574C64.506 33.806 59.379 46.397 57.198 60h30.591C92.011 42.72 103.225 30 116 30s23.989 12.72 28.212 30H87.788A63.343 63.343 0 0 0 86 75c0 24.393 13.738 45 30 45 8.284 0 15 6.716 15 15s-6.716 15-15 15c-16.612 0-32.584-8.592-43.819-23.574C61.746 112.515 56 94.251 56 75c0-5.091.413-10.109 1.198-15H55C24.673 60 0 84.673 0 115v65h512v-65c0-30.327-24.673-55-55-55z"
                                                            fill="#000000" opacity="1" data-original="#000000" class="">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="info">
                                                <p>Birthday</p>
                                                <a class="add" href="#">May 27, 1990</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="download_btn">
                                    <a class="btn custom_btn" href="">
                                        <span class="btn_icon">
                                            <div class="downloading">
                                                <div class="btn_arrow">
                                                    <img src="images/arrow.png" alt="" class="img-fluid" />
                                                </div>
                                            </div>

                                            <div class="bar">
                                                <img src="images/download.png" alt="" class="img-fluid" />
                                            </div>
                                        </span>
                                        Download PDF
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="my_tab">
                            <ul class="tabs">
                                <li class="active icon" data-id="0">
                                    <span class="tab_icon">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z">
                                            </path>
                                        </svg>
                                        <h4>Home</h4>
                                    </span>
                                </li>
                                <li class="icon" data-id="1">
                                    <span class="tab_icon">
                                        <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
                                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 6C6 5.44772 6.44772 5 7 5H17C17.5523 5 18 5.44772 18 6C18 6.55228 17.5523 7 17 7H7C6.44771 7 6 6.55228 6 6Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M6 10C6 9.44771 6.44772 9 7 9H17C17.5523 9 18 9.44771 18 10C18 10.5523 17.5523 11 17 11H7C6.44771 11 6 10.5523 6 10Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M7 13C6.44772 13 6 13.4477 6 14C6 14.5523 6.44771 15 7 15H17C17.5523 15 18 14.5523 18 14C18 13.4477 17.5523 13 17 13H7Z"
                                                fill="currentColor"></path>
                                            <path
                                                d="M6 18C6 17.4477 6.44772 17 7 17H11C11.5523 17 12 17.4477 12 18C12 18.5523 11.5523 19 11 19H7C6.44772 19 6 18.5523 6 18Z"
                                                fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 4C2 2.34315 3.34315 1 5 1H19C20.6569 1 22 2.34315 22 4V20C22 21.6569 20.6569 23 19 23H5C3.34315 23 2 21.6569 2 20V4ZM5 3H19C19.5523 3 20 3.44771 20 4V20C20 20.5523 19.5523 21 19 21H5C4.44772 21 4 20.5523 4 20V4C4 3.44772 4.44771 3 5 3Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <h4>Resume</h4>
                                    </span>
                                </li>
                                <li class="icon" data-id="2">
                                    <span class="tab_icon">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 24 24" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M3 2h16.005C20.107 2 21 2.898 21 3.99v16.02c0 1.099-.893 1.99-1.995 1.99H3V2zm4 2H5v16h2V4zm2 16h10V4H9v16zm2-4a3 3 0 0 1 6 0h-6zm3-4a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm8-6h2v4h-2V6zm0 6h2v4h-2v-4z">
                                                </path>
                                            </g>
                                        </svg>
                                        <h4>Contact</h4>
                                    </span>
                                </li>
                                <li class="icon" data-id="3">
                                    <span class="tab_icon">
                                        <i class="far fa-images"></i>
                                        <h4>gallery</h4>
                                    </span>
                                </li>
                            </ul>

                            <div class="contents">
                                <div class="box show" data-content="0">
                                    <div class="box_content">
                                        <div class="heading">
                                            <h2>About Me</h2>
                                            <span class="side_border"></span>
                                        </div>
                                        <p class="para">
                                            I have completed GNM course from Bankura Sammilani Medical College &
                                            Hospital under West Bengal
                                            Nursing Council & looking for a job to exploit my education and
                                            knowledge in
                                            a competitive
                                            challenging and growth-oriented environment for
                                            betterment of the organization's goal.
                                        </p>
                                        <div class="heading mt-5">
                                            <h2>Personal Information</h2>
                                        </div>
                                        <div class="about_area">
                                            <div class="info_box">
                                                <ul>
                                                    <li>
                                                        <span class="text_b">Father's Name:</span>
                                                        <span class="text_c">Bablu Malik</span>
                                                    </li>
                                                    <li>
                                                        <span class="text_b">Date of Birth:</span>
                                                        <span class="text_c">06/07/2002</span>
                                                    </li>
                                                    <li>
                                                        <span class="text_b">Nationality:</span>
                                                        <span class="text_c">Indian</span>
                                                    </li>
                                                    <li>
                                                        <span class="text_b">Religion:</span>
                                                        <span class="text_c">Hinduism</span>
                                                    </li>
                                                    <li>
                                                        <span class="text_b">Caste:</span>
                                                        <span class="text_c">S.C</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="info_box">
                                                <ul>
                                                    <li>
                                                        <span class="text_b">Sex:</span>
                                                        <span class="text_c">Female</span>
                                                    </li>
                                                    <li>
                                                        <span class="text_b">Marital Status:</span>
                                                        <span class="text_c">Unmarried</span>
                                                    </li>
                                                    <li>
                                                        <span class="text_b">Address:</span>
                                                        <span class="text_c">Vill: Gogra, P.O: Kotulpur, P.S:
                                                            Kotulpur,
                                                            Dist: Bankura, Pin: 722141.
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="text_b">Language Proficiency:</span>
                                                        <span class="text_c"> English, Bengali, Hindi</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="section_boxes">
                                            <div class="heading">
                                                <h2>What I do!</h2>
                                            </div>
                                            <div class="service_box_row">
                                                <div class="service_item bg_color_1">
                                                    <div class="service_icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                            viewBox="0 0 64 64" id="health-care">
                                                            <path
                                                                d="M24.221 22.76h4.491v4.494a1 1 0 001 1h5.547a1 1 0 001-1V22.76H40.75a1 1 0 001-1V16.215a1 1 0 00-1-1H36.259V10.723a1 1 0 00-1-1H29.712a1 1 0 00-1 1v4.492H24.221a1 1 0 00-1 1V21.76A1 1 0 0024.221 22.76zm1-5.545h4.491a1 1 0 001-1V11.723h3.547v4.492a1 1 0 001 1H39.75V20.76H35.259a1 1 0 00-1 1v4.494H30.712V21.76a1 1 0 00-1-1H25.221zM57.764 22.821a4.025 4.025 0 00-4.025 4.049l.033 5.571L50.709 35.86a3.5 3.5 0 00-.771-1.147A3.431 3.431 0 0047.4 33.7a3.473 3.473 0 00-2.494 1.114L38 42.229a3.154 3.154 0 00-.852 2.159V56.965h-.191a1 1 0 00-1 1v5.178a1 1 0 001 1h12.3a1 1 0 001-1V57.965a1 1 0 00-1-1H39.149V44.388a1.164 1.164 0 01.314-.795l6.908-7.416a1.5 1.5 0 011.071-.478 1.636 1.636 0 011.089.435 1.5 1.5 0 01.057 2.078l-4.788 5.3 1.484 1.341 4.052-4.482.012.011 6.172-6.89a1 1 0 00.254-.673l-.035-5.957a2.025 2.025 0 012.025-2.037 2.036 2.036 0 012.023 1.98l.235 10.6L47.272 52.755a1 1 0 00-.23.638v1.393h2V53.755L61.8 38.391a1 1 0 00.23-.661l-.243-10.974A4.048 4.048 0 0057.764 22.821zM48.042 58.965h.215v3.178h-10.3V58.965H48.042zM15.843 56.965h-.214a1 1 0 00-1 1v5.178a1 1 0 001 1h12.3a1 1 0 001-1V57.965a1 1 0 00-1-1H17.843V53.393a1 1 0 00-.231-.638L4.862 37.4 5.1 26.8a2.036 2.036 0 012.023-1.98 2.023 2.023 0 012.024 2.037l-.035 5.957a1.006 1.006 0 00.255.673l6.172 6.89.011-.01L19.6 44.849l1.484-1.341-4.788-5.3a1.5 1.5 0 01.058-2.078 1.559 1.559 0 011.088-.435 1.5 1.5 0 011.072.478l6.909 7.417a1.162 1.162 0 01.312.794V54.571h2V44.388a3.153 3.153 0 00-.85-2.158l-6.908-7.417a3.48 3.48 0 00-2.5-1.113 3.438 3.438 0 00-2.534 1.013 3.5 3.5 0 00-.771 1.148l-3.064-3.42.033-5.571a4.024 4.024 0 00-4.024-4.049A4.048 4.048 0 003.1 26.756L2.854 37.73a1.012 1.012 0 00.231.661L15.843 53.755zm10.893 2h.192v3.178h-10.3V58.965H26.736z">
                                                            </path>
                                                            <path
                                                                d="M15.056,23.705,31.722,40.371a1,1,0,0,0,1.414,0L49.8,23.705c4.049-4.049,5.656-9.039,4.41-13.692a12.479,12.479,0,0,0-8.8-8.8C41.032.042,36.344,1.4,32.429,4.951,25.956-.912,18.351.253,14.017,4.586,9.524,9.078,8.438,17.088,15.056,23.705ZM15.431,6a10.47,10.47,0,0,1,7.381-3.091c2.844,0,5.964,1.184,8.91,4.13a1,1,0,0,0,1.414,0C36.72,3.456,40.9,2.074,44.9,3.147a10.472,10.472,0,0,1,7.384,7.384c1.072,4-.31,8.178-3.892,11.76L32.429,38.25,16.47,22.291C10.517,16.338,11.758,9.673,15.431,6Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="service_content">
                                                        <h3>nursing and caring</h3>
                                                        <p>
                                                            3 Years of experience in the field of nursing
                                                            and caring.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="service_item bg_color_2">
                                                    <div class="service_icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24"
                                                            id="medical-equipment">
                                                            <path
                                                                d="M20.5,22H14c0.3-0.4,0.5-0.9,0.5-1.5c0,0,0,0,0-0.1c1.2-0.5,2.4-1.2,3.3-2.2c3-3.3,2.9-8.4-0.2-11.6l0.5-0.5C18.2,6,18.3,6,18.3,5.9L19,3.8c0.1-0.2,0-0.4-0.1-0.5l-2.1-2.1C16.6,1,16.4,1,16.2,1l-2.1,0.7c-0.1,0-0.1,0.1-0.2,0.1L7.6,8.2c0,0,0,0,0,0c-0.2,0.2-0.2,0.5,0,0.7l0.4,0.4L6.1,11c0,0,0,0,0,0c-0.2,0.2-0.2,0.5,0,0.7l2.1,2.1C8.4,14,8.5,14,8.6,14C8.7,14,8.9,14,9,13.9l1.8-1.8l0.4,0.4c0.1,0.1,0.2,0.1,0.4,0.1c0.1,0,0.3-0.1,0.4-0.1l5.1-5.1c0.8,0.8,1.4,1.8,1.7,2.9c1.2,3.8-0.7,7.8-4.4,9.2C13.9,18.6,13,18,12,18c-1.1,0-2.1,0.7-2.4,1.8c-1.2-0.3-2.3-0.9-3.2-1.8h1.1C7.8,18,8,17.8,8,17.5S7.8,17,7.5,17h-4C3.2,17,3,17.2,3,17.5S3.2,18,3.5,18H5c1.2,1.4,2.7,2.3,4.5,2.8c0,0.5,0.2,0.9,0.5,1.2H3.5C3.2,22,3,22.2,3,22.5S3.2,23,3.5,23h17c0.3,0,0.5-0.2,0.5-0.5S20.8,22,20.5,22z M8.6,12.8l-1.4-1.4L8.6,10l1.4,1.4L8.6,12.8z M16.6,6.3C16.6,6.3,16.5,6.3,16.6,6.3C16.5,6.3,16.5,6.3,16.6,6.3l-5.1,5.1L8.6,8.6l5.9-5.9l1.7-0.6l1.7,1.7l-0.6,1.7L16.6,6.3z M12,22c-0.8,0-1.5-0.7-1.5-1.5S11.2,19,12,19c0.8,0,1.5,0.7,1.5,1.5C13.5,21.3,12.8,22,12,22z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="service_content">
                                                        <h3>advance technologies</h3>
                                                        <p>
                                                            In-depth knowledge of the advance technologies and
                                                            equipments.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="service_item bg_color_3">
                                                    <div class="service_icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                            height="512" x="0" y="0" viewBox="0 0 512 512"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve" class="">
                                                            <g>
                                                                <path
                                                                    d="M142.559 416.446V390.82l-45.45-25.496v75.491c0 3.82-3.099 6.919-6.919 6.919s-6.919-3.099-6.919-6.919v-87.306a6.91 6.91 0 0 1 3.423-5.968 6.895 6.895 0 0 1 6.883-.068l59.284 33.261a6.918 6.918 0 0 1 3.536 6.036v29.676c0 3.82-3.099 6.919-6.919 6.919s-6.919-3.099-6.919-6.919zM15.297 345.968v-82.473c0-23.516 23.225-34.043 46.243-34.043h5.753c-9.188-8.479-15.19-22.112-15.19-37.507 0-23.622 14.189-38.295 37.027-38.295 22.842 0 37.032 14.673 37.032 38.295 0 15.395-6.002 29.028-15.191 37.507h54.3c2.207 0 3.959-.288 6.054-.995l25.852-8.732 17.459-6.095 37.779-13.345c3.356-1.185 5.878-2.928 8.171-5.653l12.122-14.412c13.68-16.275 24.482-29.131 44.64-29.131l18.13-.196c-10.613-8.408-17.702-23.24-17.702-40.151 0-24.065 14.455-39.016 37.721-39.016 23.27 0 37.725 14.95 37.725 39.016 0 16.609-6.83 31.229-17.128 39.711h42.08l.107-40.9c0-10.858 7.237-19.679 17.329-22.493V6.919A6.92 6.92 0 0 1 442.529 0h62.554a6.915 6.915 0 0 1 5.914 3.331 6.91 6.91 0 0 1 .221 6.784l-7.275 13.971 7.275 13.971a6.91 6.91 0 0 1-.221 6.784 6.913 6.913 0 0 1-5.914 3.331h-55.635v39.052c9.527 3.009 16.5 11.823 16.5 22.331v64.187c0 13.133-10.676 23.818-23.793 23.818l-29.005 1.158c-5.59.007-10.622 2.11-14.437 5.932s-5.919 8.865-5.919 14.198v46.108l57.347 33.153a6.923 6.923 0 0 1 3.455 5.991v57.856c0 3.82-3.099 6.919-6.919 6.919s-6.919-3.099-6.919-6.919V308.09l-57.347-33.153a6.923 6.923 0 0 1-3.455-5.991v-50.099c0-9.025 3.541-17.538 9.964-23.975 6.432-6.441 14.941-9.986 23.955-9.986l29.005-1.158c5.766-.007 10.23-4.484 10.23-9.986v-64.187c0-5.34-4.347-9.685-9.689-9.685-5.968 0-10.302 4.072-10.302 9.685l-.09 42.263c0 7.151-5.82 13.032-12.977 13.108l-101.626.003c-13.207 0-20.387 7.854-34.122 24.196l-12.131 14.417c-3.919 4.658-8.414 7.768-14.149 9.795l-25.343 8.953c1.947 2.03 3.595 4.404 4.74 7.151 1.579 3.786 2.023 7.819 1.542 11.782l36.197-11.178c3.45-1.065 6.068-2.736 8.482-5.423l19.194-21.351a6.903 6.903 0 0 1 7.622-1.833 6.916 6.916 0 0 1 4.441 6.459v180.867c0 3.82-3.099 6.919-6.919 6.919s-6.919-3.099-6.919-6.919V225.939l-7.131 7.932c-4.126 4.59-8.793 7.574-14.689 9.392l-55.023 16.991-.018.003-39.541 14.107c-3.68 1.311-7.072 1.896-10.995 1.896h-18.626c-5.14 0-10.005 2.036-13.698 5.739-3.694 3.698-5.73 8.577-5.73 13.73v35.149l55.982 32.365a6.923 6.923 0 0 1 3.455 5.991v47.212c0 3.82-3.099 6.919-6.919 6.919s-6.919-3.099-6.919-6.919v-43.221l-55.982-32.365a6.923 6.923 0 0 1-3.455-5.991v-39.14c0-8.847 3.473-17.194 9.775-23.509 6.311-6.32 14.653-9.797 23.491-9.797h18.626c2.329 0 4.167-.315 6.347-1.095l39.842-14.203c2.018-.849 3.847-2.685 4.815-5.043a9.503 9.503 0 0 0-.023-7.32c-2.032-4.876-7.64-7.189-12.495-5.171-.144.061-35.396 11.975-35.396 11.975-3.532 1.191-6.766 1.723-10.482 1.723H61.541c-3.315 0-32.405.568-32.405 20.205v82.473c0 8.847 6.1 16.301 14.514 19.031V273.85c0-3.82 3.099-6.919 6.919-6.919s6.919 3.099 6.919 6.919v99.198c0 .016.005.03.005.045s-.005.029-.005.045v67.676c0 3.82-3.099 6.919-6.919 6.919s-6.919-3.099-6.919-6.919v-61.468c-16.147-3.115-28.353-16.894-28.353-33.378zM449.446 34.333h44.23l-3.671-7.052a6.908 6.908 0 0 1 0-6.392l3.671-7.052h-44.23zm-117.833 76.41c0 18.538 10.712 33.622 23.883 33.622s23.887-15.083 23.887-33.622c0-21.908-14.964-25.178-23.887-25.178-8.919 0-23.883 3.271-23.883 25.178zM65.941 191.946c0 18.038 10.401 32.712 23.189 32.712s23.194-14.673 23.194-32.712c0-21.279-14.532-24.457-23.194-24.457s-23.189 3.178-23.189 24.457zm342.221 176.928a6.92 6.92 0 0 0 6.919-6.919v-39.919a6.916 6.916 0 0 0-3.536-6.036l-60.653-34.023a6.882 6.882 0 0 0-6.878.068 6.911 6.911 0 0 0-3.423 5.968v100.748c0 3.82 3.099 6.919 6.919 6.919s6.919-3.099 6.919-6.919v-88.932l46.815 26.261v35.865a6.92 6.92 0 0 0 6.918 6.919zm96.919 26.099h-124.54a6.92 6.92 0 0 0-6.919 6.919v20.829H256a6.92 6.92 0 0 0-6.919 6.919v16.23H131.459a6.92 6.92 0 0 0-6.919 6.919v19.225H6.919A6.92 6.92 0 0 0 0 478.933v26.149C0 508.901 3.099 512 6.919 512s6.919-3.099 6.919-6.919v-19.23h110.703v19.23c0 3.82 3.099 6.919 6.919 6.919s6.919-3.099 6.919-6.919v-45.374h110.703v45.374c0 3.82 3.099 6.919 6.919 6.919s6.919-3.099 6.919-6.919v-68.523h110.703v68.523c0 3.82 3.099 6.919 6.919 6.919s6.919-3.099 6.919-6.919v-96.27h110.703v96.27c0 3.82 3.099 6.919 6.919 6.919s6.919-3.099 6.919-6.919V401.892a6.924 6.924 0 0 0-6.921-6.919z"
                                                                    fill="#000000" data-original="#000000" class="">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="service_content">
                                                        <h3>leadership qualities</h3>
                                                        <p>
                                                            3 Years of experience in the field of nursing
                                                            and caring.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="service_item bg_color_4">
                                                    <div class="service_icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                                            id="nurse">
                                                            <path d="M392,152c-57.346,0-104,46.654-104,104c0,4.117,0.242,8.179,0.711,12.173l-45.56-19.526
                                c-1.025-0.439-2.095-0.641-3.151-0.64v-11.498c14.683-14.169,25.015-32.423,29.497-52.509h0.431
                                c14.129,0,26.303-10.455,28.484-24.379c0.931-0.295,1.813-0.754,2.594-1.381c1.893-1.518,2.994-3.813,2.994-6.24v-39.552
                                c0-21.095-11.655-39.648-29.357-49.107l-2.692-24.224c-0.314-2.826-2.104-5.272-4.702-6.427
                                c-47.821-21.254-102.677-21.254-150.498,0c-2.598,1.155-4.388,3.602-4.702,6.427l-1.85,16.65C91.774,69.129,80,90.792,80,115.149
                                V152c0,2.529,1.196,4.909,3.225,6.418c0.724,0.538,1.525,0.937,2.364,1.202C87.769,173.545,99.942,184,114.072,184h0.431
                                c4.482,20.086,14.814,38.34,29.497,52.509v11.498c-1.057-0.001-2.127,0.201-3.151,0.64l-56,24c-3.053,1.308-4.98,4.367-4.842,7.686
                                c0.032,0.76,0.182,1.493,0.415,2.191c-18.182,8.074-33.686,20.869-45.092,37.328C22.684,338.099,16,359.478,16,381.679V488
                                c0,4.418,3.582,8,8,8h336c4.418,0,8-3.582,8-8V381.679c0-8.6-1.015-17.073-2.979-25.292C373.628,358.721,382.662,360,392,360
                                c57.346,0,104-46.654,104-104S449.346,152,392,152z M243.267,266.104l30.241,12.96l-28.038,9.346
                                c-3.828,1.276-6.106,5.202-5.315,9.158l6.916,34.578L200,361.566v-23.35L243.267,266.104z M271.779,167.851
                                c0.137-2.18,0.221-4.371,0.221-6.575v-6.414l10.591,2.354C281.691,162.761,277.229,167.047,271.779,167.851z M288,112.448v29.579
                                l-78.514-17.447c-9.633-2.141-18.622-6.547-26.216-12.731c29.094-0.666,58.212,1.992,87.105,7.985
                                c0.54,0.112,1.083,0.167,1.625,0.167c1.973,0,3.898-0.73,5.385-2.084c1.895-1.725,2.849-4.253,2.566-6.799l-2.896-26.064
                                C283.881,92.21,288,101.875,288,112.448z M127.436,45.517c41.284-17.027,87.844-17.027,129.128,0l6.285,56.564
                                c-23.532-4.227-47.192-6.34-70.849-6.34s-47.317,2.114-70.849,6.34L127.436,45.517z M96,115.149
                                c0-12.891,4.232-24.807,11.424-34.41l-3.375,30.378c-0.283,2.546,0.671,5.075,2.566,6.799c1.895,1.725,4.502,2.437,7.01,1.917
                                c8.688-1.802,17.396-3.296,26.117-4.496c-10.005,11.386-22.859,19.645-37.533,24.047L96,141.248V115.149z M101.364,156.979
                                l-0.087-0.609l5.53-1.659c1.756-0.527,3.482-1.116,5.193-1.735v8.301c0,2.204,0.084,4.395,0.221,6.575
                                C106.692,167.035,102.172,162.64,101.364,156.979z M128,161.276v-15.764c11.159-6.52,20.916-15.24,28.804-25.843
                                c1.621-2.179,3.142-4.41,4.562-6.69c0.156-0.013,0.313-0.027,0.469-0.039c11.207,13.736,26.866,23.41,44.179,27.258l8.569,1.904
                                l-4.24,4.24c-3.125,3.124-3.125,8.189,0,11.313c3.124,3.124,8.189,3.124,11.313,0l2.343-2.343l2.343,2.343
                                c1.562,1.562,3.609,2.343,5.657,2.343s4.095-0.781,5.657-2.343c2.784-2.784,3.081-7.107,0.902-10.226L256,151.306v9.97
                                c0,34.945-20.634,66.695-52.566,80.888c-7.265,3.229-15.6,3.229-22.867,0C148.634,227.972,128,196.221,128,161.276z
                                 M174.068,256.785c5.698,2.532,11.815,3.798,17.932,3.798s12.234-1.266,17.932-3.798c4.928-2.19,9.621-4.742,14.068-7.603v17.935
                                l-32,53.333l-32-53.333v-17.935C164.447,252.043,169.141,254.595,174.068,256.785z M140.733,266.104L184,338.216v23.35
                                l-47.071-29.419l6.916-34.578c0.791-3.956-1.487-7.882-5.315-9.158l-28.038-9.346L140.733,266.104z M32,381.679
                                c0-38.361,24.133-73.185,60.051-86.654l7.4-2.775l27.319,9.106l-6.615,33.075c-0.652,3.263,0.783,6.589,3.604,8.353l60.24,37.65
                                V480H32V381.679z M352,480H200v-99.566l60.24-37.65c2.822-1.764,4.257-5.09,3.604-8.353l-6.615-33.075l27.319-9.106l7.4,2.775
                                C327.867,308.494,352,343.318,352,381.679V480z M392,344c-11.849,0-23.141-2.381-33.459-6.659c-2.726-6.076-6.017-11.93-9.87-17.49
                                c-10.27-14.82-23.855-26.682-39.733-34.792C305.745,275.957,304,266.179,304,256c0-48.523,39.477-88,88-88s88,39.477,88,88
                                S440.523,344,392,344z"></path>
                                                            <path
                                                                d="M200 80v-8h8c4.418 0 8-3.582 8-8s-3.582-8-8-8h-8v-8c0-4.418-3.582-8-8-8s-8 3.582-8 8v8h-8c-4.418 0-8 3.582-8 8s3.582 8 8 8h8v8c0 4.418 3.582 8 8 8S200 84.418 200 80zM170.343 202.343c-3.125 3.124-3.125 8.189 0 11.313 5.971 5.971 13.813 8.957 21.657 8.957s15.686-2.986 21.657-8.957c3.125-3.124 3.125-8.189 0-11.313-3.124-3.124-8.189-3.124-11.313 0-2.763 2.763-6.436 4.284-10.343 4.284s-7.581-1.521-10.343-4.284C178.533 199.219 173.467 199.219 170.343 202.343zM160 155.313l2.343 2.343c1.562 1.562 3.609 2.343 5.657 2.343s4.095-.781 5.657-2.343c3.125-3.124 3.125-8.189 0-11.313l-8-8c-3.124-3.124-8.189-3.124-11.313 0l-8 8c-3.125 3.124-3.125 8.189 0 11.313 3.124 3.124 8.189 3.124 11.313 0L160 155.313zM304 376h-48c-4.418 0-8 3.582-8 8v48c0 2.675 1.337 5.173 3.562 6.656l24 16c1.343.896 2.891 1.344 4.438 1.344s3.094-.448 4.438-1.344l24-16c2.226-1.483 3.562-3.981 3.562-6.656v-48C312 379.582 308.418 376 304 376zM296 427.719l-16 10.667-16-10.667V392h32V427.719zM136 376h-24v-16c0-4.418-3.582-8-8-8s-8 3.582-8 8v16H72c-4.418 0-8 3.582-8 8v32c0 4.418 3.582 8 8 8h64c4.418 0 8-3.582 8-8v-32C144 379.582 140.418 376 136 376zM128 408H80v-16h48V408zM456 224h-32v-32c0-4.418-3.582-8-8-8h-48c-4.418 0-8 3.582-8 8v32h-32c-4.418 0-8 3.582-8 8v48c0 4.418 3.582 8 8 8h32v32c0 4.418 3.582 8 8 8h48c4.418 0 8-3.582 8-8v-32h32c4.418 0 8-3.582 8-8v-48C464 227.582 460.418 224 456 224zM448 272h-32c-4.418 0-8 3.582-8 8v32h-32v-32c0-4.418-3.582-8-8-8h-32v-32h32c4.418 0 8-3.582 8-8v-32h32v32c0 4.418 3.582 8 8 8h32V272z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="service_content">
                                                        <h3>health care</h3>
                                                        <p>
                                                            Very careful and responsible towards the health care.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="service_item bg_color_5">
                                                    <div class="service_icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                            viewBox="0 0 512 512" id="medical-sign">
                                                            <path
                                                                d="m435.19 382.037 68.707-79.987a39.256 39.256 0 0 0 7.876-37.035L472.146 132.91a23.927 23.927 0 0 0-46.836 6.81c0 .56.017 1.12.057 1.633l5.522 80.524a19.146 19.146 0 0 0-14.815 5.186l-67.82 64.67a78.73 78.73 0 0 0-24.314 56.707v61.849a28.387 28.387 0 0 0-13.97 24.417V504.5a7.5 7.5 0 0 0 15 0v-51.75H425.31v51.75a7.5 7.5 0 0 0 15 0v-69.794a28.375 28.375 0 0 0-13.38-24.055v-6.341a34.21 34.21 0 0 1 8.26-22.273Zm-9.881 55.713H324.97v-3.044a13.461 13.461 0 0 1 13.494-13.396h73.35a13.461 13.461 0 0 1 13.494 13.396Zm-1.5-65.485a49.218 49.218 0 0 0-11.88 32.045v2.003c-.038 0-.076-.003-.115-.003H338.94v-57.87a63.666 63.666 0 0 1 19.665-45.852l67.824-64.672a4.2 4.2 0 0 1 5.853.073l.559.568q.318.319.614.65c.065.08.132.158.2.235a21.937 21.937 0 0 1-1.04 30.158l-37.63 37.1a7.5 7.5 0 0 0 10.53 10.68l37.632-37.1a36.939 36.939 0 0 0 3.443-48.696l-6.263-91.321a7.27 7.27 0 0 1-.017-.543 8.928 8.928 0 0 1 17.466-2.505l39.63 132.11a24.323 24.323 0 0 1-4.885 22.948ZM189.5 410.289V347a78.738 78.738 0 0 0-24.314-56.708l-67.818-64.668a19.137 19.137 0 0 0-14.818-5.183l5.516-80.446c.043-.539.064-1.1.064-1.715a23.927 23.927 0 0 0-46.833-6.815L1.666 263.575a39.25 39.25 0 0 0 7.875 37.031l68.709 79.99a34.218 34.218 0 0 1 8.26 22.274v7.782a28.374 28.374 0 0 0-13.378 24.054V504.5a7.5 7.5 0 0 0 15 0v-51.75H188.47v51.75a7.5 7.5 0 0 0 15 0v-69.794a28.387 28.387 0 0 0-13.97-24.417ZM20.917 290.83a24.321 24.321 0 0 1-4.884-22.944l39.633-132.117a8.927 8.927 0 0 1 17.464 2.511c0 .174-.002.347-.023.608l-6.257 91.247a36.948 36.948 0 0 0 3.444 48.706l37.63 37.1a7.5 7.5 0 1 0 10.532-10.682L80.827 268.16a21.95 21.95 0 0 1-1.028-30.184c.256-.291.517-.577.849-.908l.494-.506a4.214 4.214 0 0 1 5.873-.085l67.818 64.668A63.668 63.668 0 0 1 174.5 347v59.31h-72.874c-.04 0-.077.002-.116.003v-3.443a49.227 49.227 0 0 0-11.88-32.047ZM188.47 437.75H88.132v-3.044a13.461 13.461 0 0 1 13.494-13.396h73.349a13.461 13.461 0 0 1 13.495 13.396Zm92.267-164.96c23.471-7.214 42.172-14.704 45.553-28.691a17.178 17.178 0 0 0-2.284-13.594c-5.096-7.958-16.903-13.21-32.407-17.5 25.359-5.96 44.504-13.327 48.212-27.528a15.77 15.77 0 0 0-1.803-12.417c-4.7-7.76-15.822-13.17-37.196-18.09a7.5 7.5 0 0 0-3.365 14.618c21.943 5.052 26.702 9.545 27.73 11.242a.854.854 0 0 1 .12.858c-.465 1.78-3.339 6.51-19.952 11.974-11.71 3.851-26.83 6.973-41.845 9.946v-64.856h72.619l.012.001.022-.001h44.117a11.5 11.5 0 0 0 8.71-19.009l-49.957-57.95A44.872 44.872 0 0 0 284.241 51.2L263.5 61.928V48.85a25 25 0 1 0-15 0v13.08L227.759 51.2a44.873 44.873 0 0 0-54.782 10.593l-49.957 57.95a11.5 11.5 0 0 0 8.71 19.009h44.117l.022.001.012-.001H248.5v64.856c-15.014-2.973-30.135-6.095-41.845-9.946-16.613-5.465-19.487-10.194-19.952-11.975a.852.852 0 0 1 .12-.857c1.028-1.697 5.786-6.19 27.725-11.241a7.5 7.5 0 1 0-3.365-14.617c-21.37 4.92-32.493 10.33-37.19 18.089a15.768 15.768 0 0 0-1.804 12.416c3.708 14.2 22.853 21.569 48.212 27.529-15.504 4.289-27.311 9.54-32.407 17.499a17.178 17.178 0 0 0-2.284 13.594c3.381 13.987 22.082 21.477 45.553 28.692-11.253 4.542-19.807 9.779-23.667 16.947a17.72 17.72 0 0 0-1.341 13.86c3.48 11.388 15.925 18.537 30.78 25.027-15.412 7.752-27.367 17.617-23.86 33.19a7.5 7.5 0 0 0 14.634-3.297c-1.523-6.76 7.227-12.576 20.691-18.724v20.372a7.5 7.5 0 0 0 15 0v-20.372c13.464 6.148 22.214 11.963 20.691 18.724a7.5 7.5 0 1 0 14.633 3.296c3.508-15.572-8.447-25.437-23.858-33.189 14.854-6.49 27.3-13.64 30.78-25.026a17.72 17.72 0 0 0-1.342-13.86c-3.86-7.17-12.414-12.406-23.667-16.948ZM248.5 317.198c-12.682-5.29-25.92-11.504-27.9-17.981a2.709 2.709 0 0 1 .203-2.365c2.75-5.11 14.491-9.957 27.697-14.296Zm0-54.912c-12.137-3.574-24.677-7.27-34.065-11.395-11.766-5.17-13.812-8.937-14.145-10.317a2.221 2.221 0 0 1 .337-1.98c4.42-6.905 26.345-12.274 47.873-16.698Zm0-138.533h-40.076a55.775 55.775 0 0 0 3.794-3.785 57.453 57.453 0 0 0 10.89-17.686 7.5 7.5 0 1 0-13.971-5.46 42.512 42.512 0 0 1-8.048 13.088c-8.639 9.559-19.694 12.767-25.863 13.843h-35.858l44.97-52.164a29.922 29.922 0 0 1 36.53-7.065L248.5 78.817Zm62.873 114.84a2.221 2.221 0 0 1 .337 1.981c-.333 1.38-2.379 5.147-14.145 10.317-9.389 4.125-21.928 7.82-34.065 11.395v-40.39c21.528 4.424 43.452 9.792 47.873 16.698ZM291.132 64.525a29.921 29.921 0 0 1 36.53 7.064l44.97 52.164h-35.858c-6.17-1.076-17.224-4.284-25.863-13.842a42.528 42.528 0 0 1-8.048-13.09 7.5 7.5 0 1 0-13.97 5.461 57.47 57.47 0 0 0 10.89 17.687 55.756 55.756 0 0 0 3.792 3.784H263.5V78.817ZM256 35a10 10 0 1 1 10-10 10.012 10.012 0 0 1-10 10Zm35.4 264.216c-1.98 6.477-15.218 12.691-27.9 17.98v-34.64c13.206 4.338 24.946 9.185 27.697 14.295a2.709 2.709 0 0 1 .202 2.365Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="service_content">
                                                        <h3>medical terminology.</h3>
                                                        <p>
                                                            perfect knowledge of the medical terminology.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="service_item bg_color_6">
                                                    <div class="service_icon">
                                                        <svg width="81" height="73" viewBox="0 0 81 73" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M76.2 50H55.5C53.567 50 52 51.567 52 53.5C52 59.299 56.701 64 62.5 64H67.8C73.9856 64 79 58.9856 79 52.8C79 51.2536 77.7464 50 76.2 50Z"
                                                                stroke="#e5b147" stroke-width="4" />
                                                            <path
                                                                d="M26.2 50H5.5C3.567 50 2 51.567 2 53.5C2 59.299 6.70101 64 12.5 64H17.8C23.9856 64 29 58.9856 29 52.8C29 51.2536 27.7464 50 26.2 50Z"
                                                                stroke="#e5b147" stroke-width="4" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M40 0C36.6863 0 34 2.68629 34 6V15.3009C34 18.6146 36.6863 21.3009 40 21.3009H47.7995L53.1281 25.5557C54.2229 26.43 55.7771 26.43 56.8719 25.5557L62.2005 21.3009H70C73.3137 21.3009 76 18.6146 76 15.3009V6C76 2.68629 73.3137 0 70 0H40ZM38 6C38 4.89543 38.8954 4 40 4H70C71.1046 4 72 4.89543 72 6V15.3009C72 16.4054 71.1046 17.3009 70 17.3009H62.2005C61.2935 17.3009 60.4134 17.6091 59.7046 18.1751L55 21.9317L50.2954 18.1751C49.5866 17.6091 48.7065 17.3009 47.7995 17.3009H40C38.8954 17.3009 38 16.4054 38 15.3009V6Z"
                                                                fill="#e5b147" />
                                                            <circle cx="40.5" cy="36.5" r="8.5" stroke="#e5b147"
                                                                stroke-width="4" />
                                                            <path
                                                                d="M60.4999 55C60.4999 61.5 58 72 39.4999 73C28.9999 72.5 21.3333 67.5 20 59.5C17.4999 44.5 29.2827 47 39.4999 47C49.7172 47 60.4998 44.4525 60.4999 55Z"
                                                                fill="transparent" />
                                                            <path
                                                                d="M52.5 52H28.875C26.7349 52 25 53.7349 25 55.875C25 62.2953 30.2047 67.5 36.625 67.5H43.5C50.1274 67.5 55.5 62.1274 55.5 55.5V55C55.5 53.3431 54.1569 52 52.5 52Z"
                                                                stroke="#e5b147" stroke-width="4" />
                                                            <path
                                                                d="M73 36C73 39.7655 69.7454 43 65.5 43C61.2546 43 58 39.7655 58 36C58 32.2345 61.2546 29 65.5 29C69.7454 29 73 32.2345 73 36Z"
                                                                stroke="#e5b147" stroke-width="4" />
                                                            <path
                                                                d="M23 36C23 39.7655 19.7454 43 15.5 43C11.2546 43 8 39.7655 8 36C8 32.2345 11.2546 29 15.5 29C19.7454 29 23 32.2345 23 36Z"
                                                                stroke="#e5b147" stroke-width="4" />
                                                        </svg>
                                                    </div>
                                                    <div class="service_content">
                                                        <h3>communication skills</h3>
                                                        <p>
                                                            Energetic and positive attitude with the profound
                                                            communication skills both verbally and
                                                            written.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box hide" data-content="1">
                                    <div class="box_content">
                                        <div class="heading">
                                            <h2>Resume</h2>
                                            <span class="side_border"></span>
                                        </div>
                                        <div class="resume_box">
                                            <div class="resume_item">
                                                <div class="heading">
                                                    <div class="heading_icon">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                            viewBox="0 0 24 24" height="1em" width="1em"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                            <path
                                                                d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <h2 class="sub_title">Education</h2>
                                                </div>
                                                <div class="grid_box service_box_row">
                                                    <div class="education_box service_item bg_color_1">
                                                        <span class="date">2021-2023 - Present</span>
                                                        <h3 class="education">(G.N.M)
                                                            Diploma in Nursing</h3>
                                                        <p>Google Inc.</p>
                                                    </div>
                                                    <div class="education_box service_item bg_color_4">
                                                        <span class="date">2020</span>
                                                        <h3 class="education">Higher Secondary(10-2)</h3>
                                                        <p>W.B.C.H.S.E</p>
                                                    </div>
                                                    <div class="education_box service_item bg_color_3">
                                                        <span class="date">2018</span>
                                                        <h3 class="education">Madhyamik (10)</h3>
                                                        <p>W.B.B.S.E</p>
                                                    </div>
                                                </div>
                                                <div class="section_on">
                                                    <div class="new_box">
                                                        <div class="heading">
                                                            <div class="heading_icon bif">

                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                                    height="512" x="0" y="0" viewBox="0 0 66 66"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve">
                                                                    <g>
                                                                        <path
                                                                            d="M31.9 62.7c-1.1 0-2.2-.1-3.4-.4-.5-.1-.8-.6-.8-1.1.2-1.3-.1-2.3-.6-2.6-.6-.2-1.5.4-2.3 1.4-.3.4-.9.5-1.3.2-1.9-1.2-3.5-2.8-4.7-4.7-.3-.4-.2-1 .2-1.3 1.1-.9 1.7-1.8 1.4-2.3-.2-.6-1.3-.9-2.7-.7-.5.1-1-.3-1.1-.8-.5-2.2-.5-4.4 0-6.7.1-.5.6-.8 1.1-.8 1.3.2 2.3-.1 2.6-.7.2-.4-.3-1.4-1.4-2.3-.4-.3-.5-.9-.2-1.3.8-1.3 1.9-2.5 3.2-3.6.4-.4 1.1-.3 1.4.1.4.4.3 1.1-.1 1.4-.9.8-1.7 1.6-2.3 2.5 1.3 1.3 1.8 2.8 1.3 4-.6 1.3-2 2-3.8 2-.2 1.4-.2 2.7 0 4.1 2 0 3.4.7 3.8 2 .6 1.2.1 2.7-1.3 4 .8 1.1 1.8 2.1 2.9 2.9 1.3-1.3 2.7-1.8 4-1.3h.1c1.2.6 1.9 2.1 1.8 3.8 1.4.2 2.7.2 4.1 0 0-2 .7-3.4 2-3.8 1.3-.5 2.7 0 4 1.3 1.1-.8 2.1-1.8 2.9-2.9-1.3-1.3-1.8-2.7-1.3-4 .6-1.4 2-2.1 3.8-2 .2-1.4.2-2.7 0-4-1.9.1-3.3-.7-3.8-1.9-.5-1.3 0-2.8 1.3-4.1-.5-.7-1.1-1.3-1.8-2-.4-.4-.4-1 0-1.4s1-.4 1.4 0c.9.9 1.9 1.9 2.6 3.1.2.4.1 1-.3 1.3-1.1.8-1.6 1.8-1.4 2.4.2.4 1.2.8 2.6.6.5-.1 1 .2 1.1.7.5 2.2.5 4.4 0 6.7-.1.5-.6.8-1.1.8-1.3-.2-2.3.1-2.6.7-.2.5.3 1.5 1.4 2.3.4.3.5.9.2 1.3-1.2 1.9-2.8 3.5-4.7 4.7-.4.3-1 .2-1.3-.2-.8-1.1-1.8-1.6-2.4-1.4-.5.2-.8 1.3-.6 2.6.1.5-.3 1-.8 1.1-.8.1-1.9.3-3.1.3z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M32 54.8c-4.2 0-7.7-3.5-7.7-7.7s3.5-7.7 7.7-7.7 7.7 3.5 7.7 7.7-3.5 7.7-7.7 7.7zm0-13.4c-3.1 0-5.7 2.6-5.7 5.7s2.6 5.7 5.7 5.7 5.7-2.6 5.7-5.7-2.6-5.7-5.7-5.7zM32.5 33.2c-.1 0-.3 0-.4-.1l-14.3-6.3c-.4-.2-.6-.5-.6-.9s.3-.8.6-.9l14.3-5.6c.2-.1.5-.1.7 0L47.2 25c.4.1.6.5.6.9s-.2.8-.6.9l-14.3 6.3c-.1.1-.3.1-.4.1zM20.8 26l11.7 5.2L44.2 26l-11.7-4.6z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M32.6 38.2c-3.3 0-6.6-.3-9.9-.9-.5-.1-.8-.5-.8-1v-7.9c0-.6.4-1 1-1s1 .4 1 1v7.1c5.8.9 11.7.9 17.5 0v-7.1c0-.6.4-1 1-1s1 .4 1 1v7.9c0 .5-.3.9-.8 1-3.4.6-6.7.9-10 .9zM46 32.2c-.6 0-1-.4-1-1v-4.9c0-.6.4-1 1-1s1 .4 1 1v4.9c0 .6-.4 1-1 1zM13.2 18.8c-1.6 0-3.2-.8-4.1-2.2-1.6-2.4-1.1-5.5 1.3-7.1s5.5-1.1 7.1 1.3 1.1 5.5-1.3 7.1c-1 .6-2 .9-3 .9zm-2.5-3.4c1 1.4 2.8 1.8 4.3.7 1.4-1 1.7-2.8.7-4.3-1-1.4-2.8-1.7-4.3-.7-1.4 1-1.7 2.9-.7 4.3zM52.8 18.8c-1 0-2.1-.3-3-.9-1.1-.8-1.9-1.9-2.1-3.3-.2-1.3.1-2.7.9-3.8s1.9-1.9 3.3-2.1c1.3-.2 2.7.1 3.8.9s1.9 1.9 2.1 3.3c.2 1.3-.1 2.7-.9 3.8-.8 1.1-1.9 1.9-3.3 2.1-.2-.1-.5 0-.8 0zm-.1-8.3h-.5c-.8.1-1.5.6-2 1.3s-.7 1.5-.5 2.3c.1.8.6 1.5 1.3 2s1.5.7 2.3.5c.8-.1 1.5-.6 2-1.3.5-.7.7-1.5.5-2.3-.1-.8-.6-1.5-1.3-2-.5-.3-1.2-.5-1.8-.5z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M47.8 21.8c-.2 0-.4-.1-.6-.2-.5-.3-.6-.9-.2-1.4l2.7-3.8c.3-.5.9-.6 1.4-.2.5.3.6.9.2 1.4l-2.7 3.8c-.2.3-.5.4-.8.4zM33 13.6c-2.9 0-5.1-2.2-5.1-5.1s2.2-5.1 5.1-5.1 5.1 2.2 5.1 5.1-2.2 5.1-5.1 5.1zm0-8.2c-1.7 0-3.1 1.4-3.1 3.1s1.4 3.1 3.1 3.1 3.1-1.4 3.1-3.1-1.4-3.1-3.1-3.1z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M33 18c-.6 0-1-.4-1-1v-4.5c0-.6.4-1 1-1s1 .4 1 1V17c0 .6-.4 1-1 1zM59.6 37.6c-2.4 0-4.5-1.7-5-4.2-.5-2.7 1.3-5.4 4.1-5.9 1.3-.2 2.7.1 3.8.8 1.1.8 1.8 1.9 2.1 3.3.2 1.3 0 2.7-.8 3.8s-1.9 1.8-3.3 2.1c-.3 0-.6.1-.9.1zm0-8.2h-.5c-1.7.3-2.8 1.9-2.5 3.5.3 1.7 1.9 2.8 3.5 2.5.8-.1 1.5-.6 2-1.2.5-.7.6-1.5.5-2.3s-.6-1.5-1.3-2c-.5-.3-1.1-.5-1.7-.5z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M50 35.1c-.5 0-.9-.3-1-.8s.3-1.1.8-1.1l5.6-.9c.5-.1 1.1.3 1.1.8.1.5-.3 1.1-.8 1.1l-5.6.9H50zM59.8 58.1c-1 0-2-.3-2.9-.9-2.3-1.7-2.8-4.8-1.3-7.1 1.7-2.3 4.8-2.8 7.1-1.3 1.2.8 1.9 2 2.2 3.3.2 1.3-.1 2.7-.9 3.8-1 1.5-2.6 2.2-4.2 2.2zm.1-8.1c-1 0-1.9.5-2.5 1.3-1 1.4-.6 3.3.8 4.3s3.3.6 4.3-.8c.5-.7.7-1.5.6-2.3s-.6-1.5-1.3-2c-.7-.3-1.3-.5-1.9-.5z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M56.6 51.7c-.2 0-.4-.1-.6-.2l-4.7-3.2c-.5-.3-.6-.9-.3-1.4s.9-.6 1.4-.3l4.7 3.2c.5.3.6.9.3 1.4-.2.3-.5.5-.8.5zM18.4 22.1c-.3 0-.6-.1-.8-.4l-2.9-4.1c-.3-.5-.2-1.1.2-1.4.5-.3 1.1-.2 1.4.2l2.9 4.1c.3.5.2 1.1-.2 1.4-.2.1-.4.2-.6.2zM6.4 37.6c-.3 0-.6 0-.9-.1-1.4-.2-2.5-1-3.3-2.1s-1.1-2.4-.8-3.8c.5-2.8 3.1-4.6 5.9-4.1s4.6 3.1 4.1 5.9c-.2 1.3-1 2.5-2.1 3.3-.9.5-1.9.9-2.9.9zm0-8.2c-1.4 0-2.7 1.1-3 2.5-.1.8 0 1.6.5 2.3s1.2 1.1 2 1.2c.8.1 1.6 0 2.3-.5s1.1-1.2 1.3-2c.3-1.6-.8-3.2-2.5-3.5-.3.1-.4 0-.6 0z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M14.4 34.9h-.2l-4-.7c-.5-.1-.9-.6-.8-1.2.1-.5.6-.9 1.2-.8l4 .7c.5.1.9.6.8 1.2-.1.5-.5.8-1 .8zM6.1 58.1C4.6 58.1 3 57.4 2 56c-.8-1.1-1.1-2.5-.9-3.8s1-2.5 2.2-3.3c2.3-1.6 5.4-1 7.1 1.2 1.6 2.3 1.1 5.4-1.2 7.1-1 .6-2 .9-3.1.9zm-1.7-7.6c-.7.5-1.2 1.2-1.3 2s.1 1.6.6 2.3c1 1.4 2.9 1.7 4.3.8 1.4-1 1.7-2.9.7-4.3s-2.9-1.7-4.3-.8z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M9.4 51.7c-.3 0-.6-.2-.8-.4-.3-.5-.2-1.1.3-1.4l4.7-3.2c.5-.3 1.1-.2 1.4.3s.2 1.1-.3 1.4L10 51.5c-.2.1-.4.2-.6.2z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                                </g>
                                                                </svg>
                                                            </div>

                                                            <h2 class="sub_title">skills</h2>
                                                        </div>
                                                        <div class="all_skills">
                                                            <div class="box1">
                                                                <h4>Academic Qualification</h4>
                                                                <div class="skills_item">
                                                                    <div class="text_box">
                                                                        <span class=" text_area">Madhyamik
                                                                            (10)</span>
                                                                        <span class="per">91%</span>
                                                                    </div>
                                                                    <svg class="rc-progress-line" viewBox="0 0 100 1"
                                                                        preserveAspectRatio="none">
                                                                        <path class="rc-progress-line-trail" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1"
                                                                            fill-opacity="0">
                                                                        </path>
                                                                        <path class="rc-progress-line-path" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#FF6464" stroke-width="1"
                                                                            fill-opacity="0"
                                                                            style="stroke-dasharray: 91px, 100px;stroke-dashoffset: 0px;transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="skills_item">
                                                                    <div class="text_box">
                                                                        <span class=" text_area">Higher
                                                                            Secondary(10-2)</span>
                                                                        <span class="per">94.60%</span>
                                                                    </div>
                                                                    <svg class="rc-progress-line" viewBox="0 0 100 1"
                                                                        preserveAspectRatio="none">
                                                                        <path class="rc-progress-line-trail" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1"
                                                                            fill-opacity="0">
                                                                        </path>
                                                                        <path class="rc-progress-line-path" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#9272D4" stroke-width="1"
                                                                            fill-opacity="0"
                                                                            style="stroke-dasharray: 95px, 100px;stroke-dashoffset: 0px;transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="box1">
                                                                <h4>(G.N.M)</h4>
                                                                <div class="skills_item">
                                                                    <div class="text_box">
                                                                        <span class=" text_area">1 Year</span>
                                                                        <span class="per">68.80%</span>
                                                                    </div>
                                                                    <svg class="rc-progress-line" viewBox="0 0 100 1"
                                                                        preserveAspectRatio="none">
                                                                        <path class="rc-progress-line-trail" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1"
                                                                            fill-opacity="0">
                                                                        </path>
                                                                        <path class="rc-progress-line-path" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#dd2476" stroke-width="1"
                                                                            fill-opacity="0"
                                                                            style="stroke-dasharray: 67px, 100px;stroke-dashoffset: 0px;transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="skills_item">
                                                                    <div class="text_box">
                                                                        <span class=" text_area">2nd Year</span>
                                                                        <span class="per">71.14%</span>
                                                                    </div>
                                                                    <svg class="rc-progress-line" viewBox="0 0 100 1"
                                                                        preserveAspectRatio="none">
                                                                        <path class="rc-progress-line-trail" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1"
                                                                            fill-opacity="0">
                                                                        </path>
                                                                        <path class="rc-progress-line-path" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#d566ff" stroke-width="1"
                                                                            fill-opacity="0"
                                                                            style="stroke-dasharray: 72px, 100px;stroke-dashoffset: 0px;transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="skills_item">
                                                                    <div class="text_box">
                                                                        <span class=" text_area">3rd Year</span>
                                                                        <span class="per">Appearing</span>
                                                                    </div>
                                                                    <svg class="rc-progress-line" viewBox="0 0 100 1"
                                                                        preserveAspectRatio="none">
                                                                        <path class="rc-progress-line-trail" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#D9D9D9" stroke-width="1"
                                                                            fill-opacity="0">
                                                                        </path>
                                                                        <path class="rc-progress-line-path" d="M 0.5,0.5
                                    L 99.5,0.5" stroke-linecap="round" stroke="#ff75d8" stroke-width="1"
                                                                            fill-opacity="0"
                                                                            style="stroke-dasharray: 0px, 100px;stroke-dashoffset: 0px;transition: stroke-dashoffset 0.3s ease 0s, stroke-dasharray 0.3s ease 0s, stroke 0.3s linear 0s, 0.06s;">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="new_box">
                                                        <div class="heading">
                                                            <div class="heading_icon bif">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                                    height="512" x="0" y="0" viewBox="0 0 32 32"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve">
                                                                    <g>
                                                                        <path
                                                                            d="M16 7.5a8.462 8.462 0 0 0-4.336 1.19.5.5 0 0 0 .512.86A7.439 7.439 0 0 1 15.5 8.533V11a.5.5 0 0 0 .5.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 0-.5.5v2.5h-2V15a1.5 1.5 0 0 0-3 0v.5l-1.967.002a7.438 7.438 0 0 1 1.016-3.326.5.5 0 0 0-.858-.512A8.487 8.487 0 0 0 11.5 23.203V24a.5.5 0 0 0 .5.5h.5v1.002H12a.5.5 0 0 0 0 1h.5v1.5a.5.5 0 0 0 .5.5h.55a2.5 2.5 0 0 0 4.9 0H19a.5.5 0 0 0 .5-.5v-1.5h.5a.5.5 0 0 0 0-1h-.5V24.5h.5a.5.5 0 0 0 .5-.5v-.797A8.495 8.495 0 0 0 16 7.5Zm0 22.002a1.503 1.503 0 0 1-1.415-1h2.83a1.503 1.503 0 0 1-1.415 1Zm2.5-2h-5v-1h5Zm-5-2v-1h5v1Zm3-12.002h.5a1.5 1.5 0 0 0 0-3h-.5V8.525a7.499 7.499 0 0 1 6.975 6.977L21 15.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 0-.5-.5h-2.5Zm-7.966 3.002L11 16.5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 0 .5.5h2.5v2H15a1.5 1.5 0 0 0 0 3h.5v2h-3v-.58a.5.5 0 0 0-.25-.433 7.505 7.505 0 0 1-3.716-5.985Zm11.216 5.985a.5.5 0 0 0-.25.433v.58h-3V21a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 1 0-1h1a.5.5 0 0 0 .5-.5v-2.5h2v.5a1.5 1.5 0 0 0 3 0v-.5l1.966.002a7.505 7.505 0 0 1-3.716 5.985ZM5.5 16a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5ZM6.724 10.067l-2.599-1.5a.5.5 0 1 0-.5.866l2.599 1.5a.5.5 0 0 0 .5-.866ZM10.067 6.724a.5.5 0 1 0 .866-.5l-1.5-2.599a.5.5 0 0 0-.866.5ZM16 5.5a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-1 0v3a.5.5 0 0 0 .5.5ZM21.25 6.907a.5.5 0 0 0 .683-.183l1.5-2.599a.5.5 0 0 0-.866-.5l-1.5 2.599a.5.5 0 0 0 .183.683ZM25.527 11a.497.497 0 0 0 .25-.067l2.598-1.5a.5.5 0 0 0-.5-.866l-2.599 1.5a.5.5 0 0 0 .25.933ZM30 15.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1ZM28.375 22.567l-2.599-1.5a.5.5 0 1 0-.5.866l2.599 1.5a.5.5 0 0 0 .5-.866ZM6.224 21.067l-2.599 1.5a.5.5 0 0 0 .5.866l2.599-1.5a.5.5 0 1 0-.5-.866Z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                        <path
                                                                            d="M9.99 9.99a.5.5 0 1 0 .707 0 .5.5 0 0 0-.707 0Z"
                                                                            fill="#fa5252" data-original="#fa5252">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>

                                                            <h2 class="sub_title">Knowledges</h2>
                                                        </div>
                                                        <div class="others_skills">
                                                            <button class="resume-btn">WINDOWS XP</button><button
                                                                class="resume-btn">WINDOWS
                                                                VISTA</button><button class="resume-btn">WINDOWS
                                                                7</button><button class="resume-btn">MS
                                                                OFFICE</button>
                                                            <button class="resume-btn">ADOBE</button>
                                                            <button class="resume-btn">Microsoft Office</button>
                                                            <button class="resume-btn">LANGUAGE KNOWN:- VISUAL
                                                                BASIC</button>
                                                            <button class="resume-btn">*COMPUTER CERTIFICATE:
                                                                Diploma In
                                                                Information Technology
                                                                Application.</button>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box hide" data-content="2">
                                    <div class="box_content">
                                        <div class="heading">
                                            <h2>Contact</h2>
                                            <span class="side_border"></span>
                                        </div>
                                        <div class="contact_area">
                                            <div class="contact_item service_item bg_color_1">
                                                <span class="contact_icon service_icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512"
                                                        x="0" y="0" viewBox="0 0 473.806 473.806"
                                                        style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                        class="">
                                                        <g>
                                                            <path
                                                                d="M374.456 293.506c-9.7-10.1-21.4-15.5-33.8-15.5-12.3 0-24.1 5.3-34.2 15.4l-31.6 31.5c-2.6-1.4-5.2-2.7-7.7-4-3.6-1.8-7-3.5-9.9-5.3-29.6-18.8-56.5-43.3-82.3-75-12.5-15.8-20.9-29.1-27-42.6 8.2-7.5 15.8-15.3 23.2-22.8 2.8-2.8 5.6-5.7 8.4-8.5 21-21 21-48.2 0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5-6-6.2-12.3-12.6-18.8-18.6-9.7-9.6-21.3-14.7-33.5-14.7s-24 5.1-34 14.7l-.2.2-34 34.3c-12.8 12.8-20.1 28.4-21.7 46.5-2.4 29.2 6.2 56.4 12.8 74.2 16.2 43.7 40.4 84.2 76.5 127.6 43.8 52.3 96.5 93.6 156.7 122.7 23 10.9 53.7 23.8 88 26 2.1.1 4.3.2 6.3.2 23.1 0 42.5-8.3 57.7-24.8.1-.2.3-.3.4-.5 5.2-6.3 11.2-12 17.5-18.1 4.3-4.1 8.7-8.4 13-12.9 9.9-10.3 15.1-22.3 15.1-34.6 0-12.4-5.3-24.3-15.4-34.3l-54.9-55.1zm35.8 105.3c-.1 0-.1.1 0 0-3.9 4.2-7.9 8-12.2 12.2-6.5 6.2-13.1 12.7-19.3 20-10.1 10.8-22 15.9-37.6 15.9-1.5 0-3.1 0-4.6-.1-29.7-1.9-57.3-13.5-78-23.4-56.6-27.4-106.3-66.3-147.6-115.6-34.1-41.1-56.9-79.1-72-119.9-9.3-24.9-12.7-44.3-11.2-62.6 1-11.7 5.5-21.4 13.8-29.7l34.1-34.1c4.9-4.6 10.1-7.1 15.2-7.1 6.3 0 11.4 3.8 14.6 7l.3.3c6.1 5.7 11.9 11.6 18 17.9 3.1 3.2 6.3 6.4 9.5 9.7l27.3 27.3c10.6 10.6 10.6 20.4 0 31-2.9 2.9-5.7 5.8-8.6 8.6-8.4 8.6-16.4 16.6-25.1 24.4-.2.2-.4.3-.5.5-8.6 8.6-7 17-5.2 22.7l.3.9c7.1 17.2 17.1 33.4 32.3 52.7l.1.1c27.6 34 56.7 60.5 88.8 80.8 4.1 2.6 8.3 4.7 12.3 6.7 3.6 1.8 7 3.5 9.9 5.3.4.2.8.5 1.2.7 3.4 1.7 6.6 2.5 9.9 2.5 8.3 0 13.5-5.2 15.2-6.9l34.2-34.2c3.4-3.4 8.8-7.5 15.1-7.5 6.2 0 11.3 3.9 14.4 7.3l.2.2 55.1 55.1c10.3 10.2 10.3 20.7.1 31.3zM256.056 112.706c26.2 4.4 50 16.8 69 35.8s31.3 42.8 35.8 69c1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.4-1.2 12.3-8.2 11.1-15.6-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3 3.7-15.6 11s3.5 14.4 10.9 15.6zM473.256 209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2 3.7-15.5 11-1.2 7.4 3.7 14.3 11.1 15.6 46.6 7.9 89.1 30 122.9 63.7 33.8 33.8 55.8 76.3 63.7 122.9 1.1 6.6 6.8 11.2 13.3 11.2.8 0 1.5-.1 2.3-.2 7.3-1.1 12.3-8.1 11-15.4z"
                                                                fill="#dd2476" opacity="1" data-original="#dd2476"
                                                                class=""></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <h4 class="contact_text">+91 8436712455</h4>
                                            </div>
                                            <div class="contact_item service_item bg_color_2">
                                                <span class="contact_icon service_icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512"
                                                        x="0" y="0" viewBox="0 0 512 512"
                                                        style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                        class="">
                                                        <g>
                                                            <path fill-rule="evenodd"
                                                                d="M462.88 337.781c0 43.236-35.17 78.351-78.351 78.351H127.472c-43.181 0-78.352-35.116-78.352-78.351V174.219a77.802 77.802 0 0 1 10.809-39.615l125.428 125.428c18.765 18.82 43.894 29.19 70.67 29.19 26.721 0 51.85-10.37 70.615-29.19L452.07 134.604a77.79 77.79 0 0 1 10.809 39.615v163.562zM384.528 95.868H127.472c-17.832 0-34.293 6.035-47.461 16.076l126.69 126.745c13.114 13.058 30.616 20.301 49.326 20.301 18.655 0 36.158-7.243 49.271-20.301l126.69-126.745c-13.167-10.041-29.627-16.076-47.46-16.076zm0-30.232H127.472c-59.861 0-108.584 48.723-108.584 108.584v163.562c0 59.916 48.723 108.584 108.584 108.584h257.056c59.861 0 108.584-48.668 108.584-108.584V174.219c0-59.861-48.723-108.583-108.584-108.583z"
                                                                clip-rule="evenodd" fill="#b369cf" opacity="1"
                                                                data-original="#b369cf" class=""></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <h4 class="contact_text">priyankamalikhs@gmail.com</h4>
                                            </div>

                                            <div class="contact_item service_item bg_color_4">
                                                <span class="contact_icon service_icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512"
                                                        x="0" y="0" viewBox="0 0 512 512"
                                                        style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                        class="">
                                                        <g>
                                                            <g data-name="01-home">
                                                                <g data-name="linear color">
                                                                    <path
                                                                        d="M256 4C147.925 4 60 91.925 60 200c0 52.5 31.807 119.92 94.537 200.378a1065.816 1065.816 0 0 0 93.169 104.294 12 12 0 0 0 16.588 0 1065.816 1065.816 0 0 0 93.169-104.294C420.193 319.92 452 252.5 452 200 452 91.925 364.075 4 256 4Zm0 475.111C220.581 443.408 84 299.268 84 200c0-94.841 77.159-172 172-172s172 77.159 172 172c0 99.268-136.581 243.408-172 279.111Z"
                                                                        fill="#63b3ed" opacity="1"
                                                                        data-original="#63b3ed" class=""></path>
                                                                    <path
                                                                        d="M256 60c-77.2 0-140 62.8-140 140s62.8 140 140 140 140-62.8 140-140S333.2 60 256 60Zm0 256a116 116 0 1 1 116-116 116.132 116.132 0 0 1-116 116Z"
                                                                        fill="#63b3ed" opacity="1"
                                                                        data-original="#63b3ed" class=""></path>
                                                                    <path
                                                                        d="m352.072 183.121-88-80a12 12 0 0 0-16.144 0l-88 80A12 12 0 0 0 168 204h12v60a12 12 0 0 0 12 12h44a12 12 0 0 0 12-12v-36h16v36a12 12 0 0 0 12 12h44a12 12 0 0 0 12-12v-60h12a12 12 0 0 0 8.072-20.879ZM308 192v60h-20v-36a12 12 0 0 0-12-12h-40a12 12 0 0 0-12 12v36h-20v-60a12 12 0 0 0-6.453-10.644L256 128.217l58.453 53.139A12 12 0 0 0 308 192Z"
                                                                        fill="#63b3ed" opacity="1"
                                                                        data-original="#63b3ed" class=""></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <h4 class="contact_text">Kotulpur, Bankura, Pin: 722141</h4>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <h1>contact us</h1>
                                        </div>
                                        <div class="row justify-content-center text-center">

                                            <span class="modal_btn" id="shadow">click to <div id="glow">contact me</div>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="box hide" data-content="3">
                                <div class="box_content">
                                    <div class="heading">
                                        <h2>My gallery</h2>
                                        <span class="side_border"></span>
                                    </div>
                                    <div class="gallery_box">
                                        <div class="gallery-wrapper">

                                            <div class="gallery-container w-2">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/1.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-2">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/2.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-2 h-1">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/5.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-3 h-2">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/6.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-3 h-1">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/38.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-2 h-2">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/4.jpg">
                                                    </div>
                                                </div>
                                            </div>





                                            <div class="gallery-container w-3 h-1">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/39.jpg">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="gallery-container w-2 h-2">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/12.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-2">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/13.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-3">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/14.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-3">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/15.jpg">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="gallery-container w-2 h-2">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/17.jpg">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="gallery-container w-3 h-1">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/37.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-3">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/19.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-2 h-1">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/20.jpg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="gallery-container w-1 h-1">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/21.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gallery-container w-3 h-1">
                                                <div class="gallery-item">
                                                    <div class="image">
                                                        <img src="images/pinki website/36.jpg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/79a7f5db80.js" crossorigin="anonymous"></script>
    <script src="js/style.js"></script>
    <script>
    var modal = document.querySelector(".search_popup");
    var trigger = document.querySelector(".contact_text");
    // var closeButton = document.querySelector(".close-button");

    // function toggleModal() {
    //     modal.classList.toggle("active");
    // }

    // function windowOnClick(event) {
    //     if (event.target === modal) {
    //         toggleModal();
    //     }
    // }

    // trigger.addEventListener("click", toggleModal);
    // // closeButton.addEventListener("click", toggleModal);
    // window.addEventListener("click", windowOnClick);
    </script>
</body>

</html>