<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>The Team</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="css/about.css?<?php echo time(); ?>">
        <link rel="stylesheet" href="css/scrollbar.css?<?php echo time(); ?>">
    </head>
    <style>
        .footer-dark {
            padding:50px 0;
            color:#f0f9ff;
            background-color:#282d32;
            position: relative;
            top: 140px;
            height: 25rem;
        } 
        .footer-dark h3 {
            margin-top:0;
            margin-bottom:12px;
            font-weight:bold;
            font-size:16px;
        }  
        .footer-dark ul {
            padding:0;
            list-style:none;
            line-height:1.6;
            font-size:14px;
            margin-bottom:0;
        }
  
        .footer-dark ul a {
            color:inherit;
            text-decoration:none;
            opacity:0.6;
        }
  
        .footer-dark ul a:hover {
            opacity:0.8;
        }
  
        @media (max-width:767px) {
            .footer-dark .item:not(.social) {
                text-align:center;
                padding-bottom:20px;
            }
        }  
        .footer-dark .item.text {
            margin-bottom:36px;
        }
  
        @media (max-width:767px) {
            .footer-dark .item.text {
              margin-bottom:0;
            }
        }
  
        .footer-dark .item.text p {
            opacity:0.6;
            margin-bottom:0;
        }
  
        .footer-dark .item.social {
            text-align:center;
        }
  
        @media (max-width:991px) {
            .footer-dark .item.social {
              text-align:center;
              margin-top:20px;
            }
        }
  
        .footer-dark .item.social > a {
            font-size:20px;
            width:36px;
            height:36px;
            line-height:36px;
            display:inline-block;
            text-align:center;
            border-radius:50%;
            box-shadow:0 0 0 1px rgba(255,255,255,0.4);
            margin:0 8px;
            color:#fff;
            opacity:0.75;
        }
  
        .footer-dark .item.social > a:hover {
            opacity:0.9;
        }
  
        .footer-dark .copyright {
            text-align:center;
            padding-top:24px;
            opacity:0.3;
            font-size:13px;
            margin-bottom:0;
        }    
        .header img{
            position: relative;
            left: 200px;
            top: 10px;
        }
    </style>
    <body>
        <div class="header">
            <img src="https://i.postimg.cc/mg4rWBmv/logo.png" alt="">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="newcontact2.php">CONTACT</a></li>
            </ul>
        </div>
        <h1 class="heading">Meet The Team</h1>
    <!--Addi Details-->        
            <div class="card-wrapper">
                <div class="card">
                    <img src="images/bg1.jpg" alt="card-background" class="card-img">
                    <img src="images/addi.jpeg" alt="profile-img" class="profile-img">
                    <h1>Aditya Kumar Singh</h1>
                    <p class="job-title">Front-End Designer</p>
                    <p class="about">
                        The landing page you noticed was my idea. Altough the execution process was not as easy as it looks.
                        I am a Cricket Lover and love to play cricket in any conditions. You can even play with me but you also need to be a pro player.
                    </p>
                    <a href="tel:+91-8427825567" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" target="_"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" target="_"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" target="_"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.instagram.com/demon_in_devil_/" target="_"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div><br><br>
    <!--Saurabh Details-->          
                <div class="card">
                    <img src="images/bg2.jpg" alt="card-background" class="card-img">
                    <img src="images/saurabh.jpeg" alt="profile-img" class="profile-img">
                    <h1>Saurabh Kumar</h1>
                    <p class="job-title">Full Stack Developer</p>
                    <p class="about">
                        Hii i am a pro player in PUBG and love to play it anytime. Talking about the project i converted this whole project in Laravel and that was the most difficult thing.Do remember me while playing PUBG.
                    </p>
                    <a href="tel:+91-6239552616" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" target="_"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" target="_"><i class="fab fa-twitter-square"></i></a>
                        </li><li><a href="#" target="_"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.instagram.com/_sammy_2310/" target="_"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div><br><br>
    <!--Sanchit Details-->
                <div class="card">
                    <img src="images/bg3.jpg" alt="card-background" class="card-img">
                    <img src="images/sanchit.jpeg" alt="profile-img" class="profile-img">
                    <h1>Sanchit Tripathi</h1>
                    <p class="job-title">Front-End Designer</p>
                    <p class="about">
                        I love attending online classes of my friends because after the class its very funny to play pranks on them. The idea of creating this website was totally mine but they stole it from me So now i am their team member.
                    </p>
                    <a href="tel:+91-6283499858" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" target="_"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" target="_"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" target="_"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.instagram.com/tsanchit92/" target="_"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div><br><br>
    <!--Satyam Details-->            
                <div class="card">
                    <img src="images/bg4.jpg" alt="card-background" class="card-img">
                    <img src="images/satyam.jpg" alt="profile-img" class="profile-img">
                    <h1>Satyam Rai</h1>
                    <p class="job-title">Font-End Designer | Database Programer</p>
                    <p class="about">
                        Hii i designed the backend and the form. The page you are at is my idea and completely designed by me. I love to play cricket. I love to design websites. So if you have one to design contact me.
                    </p>
                    <a href="tel:+91-9717276730" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href="#" target="_"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" target="_"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#" target="_"><i class="fab fa-github"></i></a></li>
                        <li><a href="https://www.instagram.com/__thehalfengineer/" target="_"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Tour & Travels</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Rail Tickets</a></li>
                            </ul>
                        </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Ghumte Raho</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Ghumte Raho © 2021</p>
            </div>
        </footer>
    </div>
    </body>
</html>