<?php
    session_start();
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleSheet1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productcategory_productdetail_productcreateTime/cookies.css">
    <title></title>
    <!--FontList-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="contact.css">

</head>

<body onload="check(); HiddenSignup();">
<header>
        <!--Navigation area-->
        <nav class="navbar" id="myTopnav">
            <!--Home (this page), About Us, Fees, My Account, Browse, FAQs, and Contact.-->
            <a class="navbar-brand" href="index.php">
                <div class="logo-image">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="image\logo123.png" class="img-fluid" alt="img_logo_website">
                </div>
            </a>

            <a href="index.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="fee.php">Fees</a>
            <a href="./login/myaccount.php">My Account</a>
            <div class="dropdown">
                <button class="dropbtn">
                    Browse
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="browsebycate.php">Browse by categories</a>
                    <a href="browsebyname.php">Browse by name</a>
                </div>
            </div>
            <a href="faq.php">FAQS</a>
            <a href="contact.php">Contact</a>
            <a id='signup' class="signup" href="./login/myaccount.php" style="padding:0;">
                <p class="button">Sign Up</p>
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


        </nav>
    </header>
    <div style="background-image: url('./Myaccount/pexels-photo-955081.jpeg'); background-repeat: repeat; ">
        <div class="row-contact">
            <section class="container_contact">
                <form method="get" class="register-form" name="form" id="form" onsubmit="validated();return false">
                    <h1>Contact Us</h1>
                    <div>Contact Purpose
                        <select name="Choose" id="select_style" placeholder="Please">
                            <option Value="1">Business</option>
                            <option Value="2">Personal</option>
                        </select>
                    </div><br>
                    <!-- Name -->
                    <div style="display:flex; flex-wrap: wrap;">
                        <label style="padding-right: 2%;"><i><b>Name:</b></i></label>
                        <input type="text" id="lname" name="lname" placeholder="Please type your full name"
                            class="clear">

                        <div id="lname-error">Last name must include at least 3 character</div>
                    </div>
                    <!-- Email  -->
                    <div style="display:flex; padding-top: 3%; flex-wrap: wrap;">
                        <label style="padding-right: 2%;"><i><b>Email:</b></i></label>
                        <input type="email" name="email" placeholder="Please type your email" id="email"><br>

                        <div id="email_error">Please enter the valid email</div>
                    </div><br>
                    <!--Phone  -->
                    <div style="display:flex; padding-top: 3%; flex-wrap: wrap;">
                        <label style="padding-right: 2%;"> <b><i>Phone:</i></b> </label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter phone number"><br>

                        <div id="phone_error">Phone is incorrect form</div>
                    </div><br>
                    <!-- Contact Method  -->
                    <div style="display:flex; padding-top: 3%; flex-wrap: wrap; ">
                        <label style="padding-right: 2%;"><i><b>Preferred contact method: </b></i> </label> <br>

                        <div style="display:flex; padding-left:2%;">
                            <input type="radio" id="email-radio" name="method" value="email">
                            <label for="email">Email</label>

                            <input type="radio" id="phone-radio" name="method" value="phone">
                            <label for="phone">Phone</label>
                        </div>

                        <div id="contact_error">Contact Method has not been selected</div>
                    </div><br>
                    <!-- Contact Day  -->
                    <div style="display:flex; padding-top: 3%; flex-wrap: wrap">
                        <label style="padding-right: 2%;"><i><b>Contact day(s):</b></i></label>
                        <div id="contactday">
                            <div>
                                <input type="checkbox" class="contact_checkbox" name="mon">
                                <label for="mon" style="color: whitesmoke;">Monday</label>
                            </div>
                            <div>
                                <input type="checkbox" class="contact_checkbox" name="tue">
                                <label for="tue" style="color: whitesmoke;">Tuesday</label>
                            </div>
                            <div>
                                <input type="checkbox" class="contact_checkbox" name="wed">
                                <label for="wed" style="color: whitesmoke;">Wednesday</label>
                            </div>
                            <div>
                                <input type="checkbox" class="contact_checkbox" name="thu">
                                <label for="thu" style="color: whitesmoke;">Thursday</label>
                            </div>
                            <div>
                                <input type="checkbox" class="contact_checkbox" name="fri">
                                <label for="fri" style="color: whitesmoke;">Friday</label>
                            </div>
                            <div>
                                <input type="checkbox" class="contact_checkbox" name="sat">
                                <label for="sat" style="color: whitesmoke;">Saturday</label>
                            </div>
                            <div>
                                <input type="checkbox" class="contact_checkbox" name="sun">
                                <label for="sun" style="color: whitesmoke;">Sunday</label>
                            </div>
                        </div>

                        <div id="day-error">Contact Day has not been selected</div>
                    </div><br>
                    <!-- Comment Area -->
                    <div class="comment" style="display:flex; padding-top: 3%; flex-wrap: wrap;">
                        <textarea class="textinput" placeholder="Comment" id='comment'></textarea>

                        <div id="cmt-error"></div>
                    </div>
                    <div style="padding-top: 1%;">
                        <button type="reset" value="Clear" class="style_button">CLEAR</button>
                        <button type="submit" value="Send" class="style_button"> SEND</button>
                    </div>
        </div>
        </form>
        </section>
    </div>
    </div>
    </div>

    <div id="cookies">
        <h3>I use cookies</h3>
        <p>My website uses cookies neccessary for its basic functioning. By continue browsing, you consent to my use of
            cookies and other technologies</p>
        <button type="button" name="button" onclick="agree();">I understand</button>
        <a href="https://gdpr-info.eu/" target="_blank">Learn more</a>
    </div>

    <!--Footer Area-->
    <!-- Element that contains the client's contact email, phone and address details
        (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->
    <footer style="background-color: #131a22; color:white; padding-bottom:5%;">
        <div class="flex">
            <!--Zero Columns-->
            <div class="footer_column0" style="flex: 2; margin: 1% 5% 0 5%">
                <img src="image\logo123.png" width="20%" alt="image_logo_website" />
                <p style="font-size:13px">EmySell is the lastest website for whom who are looking for the place to start
                    their business. We provided the solution to help our potential custumers to achive the greatest
                    outcome for their first start</p>
            </div>
            <!--First Columns-->
            <div class="footer_column1" style="flex: 1;font-size:10px;">
                <h2>Contact us</h2>
                <h3><i class="fa fa-envelope"></i> Email: cinemax@gmail.com</h3>
                <h3><i class="fa fa-phone" aria-hidden="true" style='font-size:15px'></i> Phone: 09737283823</h3>
                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Address: Ho Chi Minh City</h3>
            </div>
            <!--Second Columns-->
            <div class="footer_column2" style="flex: 1; font-size:10px;">
                <h2>Members List</h2>
                <h3>La Tran Hai Dang - s3836605</h3>
                <h3>Huynh Van Anh - s3836320</h3>
                <h3>Pham Gia Nguyen - s3819521</h3>
                <h3>Ngo My Quynh - S3836322</h3>
            </div>

            <!--Third Columns-->
            <div style="flex: 0.25" class="footer_column3">
                <!--Remember to add link Github-->
                <h3><a href="https://morioh.com/p/c479c01cf484" style="text-decoration: none"><i class="fa fa-github"
                            aria-hidden="true"></i></a></h3>
                <h3><i class="fa fa-facebook-official" aria-hidden="true"></i></h3>
                <h3><i class="fa fa-twitter" aria-hidden="true"></i></h3>
            </div>
        </div>

        <div class="footer_col">
            <a href="tos.php"><span>Terms of Service</span></a>
            <a href="privacypolicy.php"><span>Privacy Policy</span></a>
            <a>
                <span> 
                <?php
                // If the variable is not be set and it was empty, echo the default 
                 if (!isset($_SESSION['cr'])  && empty($_SESSION['cr'])){
                    $_SESSION['cr'] = '© 2021, EmySell.com, Inc. or its affiliates';
                        echo $_SESSION['cr'];
                    } else {
                    echo $_SESSION['cr'];
                }
                ?>
                </span>
            </a>
        </div>

    </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true
        });
    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>
    <script type="text/javascript" src="productcategory_productdetail_productcreateTime/javascript.js"></script>
    <script src="contact.js"></script>
    <script type="text/javascript" src="Myaccount/myaccount.js"></script>

</body>

</html>
