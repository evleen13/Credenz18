<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>NTH '18 | Network Treasure Hunt</title>
    <link rel='icon' href="img/nth4.png" type='image/jpg' >
    <meta name="description" content="NTH, i.e. Network Treasure Hunt is an free online event organised by PICT IEEE Student Branch (P.I.S.B.).">

    <meta name="author" content="WebTeam@PISB & NTH Team">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-animation.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css'>
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body id="body" data-spy="scroll" data-target="#nav-menu-container" data-offset="50">
  <div id="preloader">
    
  </div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <img src="img/credenzi.png" class="img-fluid img-responsive credenzlogo " >
    <div class="hero-container">
      <div class="wow fadeIn">
          <div class="row">
            <div class="col-md-5 col-sm-3"></div>
            <div class="col-md-2 col-xs-6 col-sm-6">
              <!--<div class="nth">-->
                <img src="img/nth3.png" class="img-responsive img-fluid nth mt-3" />
             <!-- </div>-->
            </div>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div>
                <div class="homeitems">
                          <h1 class="nthtext">Network Treasure Hunt</h1>
                          <h2 class="decrypt text-right">Decrypt the Encrypted!</h2>
                          <div class="actions">
                              <a href="login.php" class="btn-get-started">Start Hunting</a>
                               <a href="#register" class="btn-services" onclick="getstarted()">Get Started</a>
                          </div>
                </div>
              </div>      
            </div>
          </div>
          <div class="clock"></div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#register">Register</a></li>
          
          <li><a href="#about">About Us</a></li>
          <li><a href="#team">Contact Us</a></li>
        </ul>
      </nav>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section class="section section-lg pt-lg-0 mt--200 bg-light" id="register" >
      <div class="container ">
            <div style="padding: 6% 0;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                          <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="card card-lift--hover shadow-sm border-0">
                                    <div class="card-body py-5 bg-white">
                                        <div class="container wow fadeInUp">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <h3 class="section-title">Register</h3>
                                              <div class="section-title-divider"></div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6 col-lg-6 ">
                                                <form action="register.php" method="POST" class="w-100" role="form">
                                                  <div class="row">
                                                    <div class="col-md-6 col-lg-6 ">
                                                      <div class="form-group">
                                                        <div class="input-group input-group-alternative ">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                          </div>
                                                          <input class="form-control" placeholder="First Name" type="text" id="fname" name="fname" required>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">
                                                      <div class="form-group ">
                                                        <div class="input-group input-group-alternative ">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                           </div>
                                                           <input class="form-control" placeholder="Last Name" type="text" id="lname" name="lname"  required>
                                                        </div>
                                                      </div>
                                                    </div>  
                                                  </div>
                                                  <div class="form-group mb-3">
                                                    <div class="input-group input-group-alternative">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Username" type="text" id="uname" name="uname"  required>
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Password" type="password" id="password"  name="password" required>
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Re-enter Password" type="password" id="pass_2" name="pass_2" required>
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                      </div>
                                                      <input class="form-control" placeholder="Email-Id" type="text" id="email" name="email" required>
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fa fa-university"></i></span>
                                                        </div>
                                                        <input class="form-control" placeholder="College" type="text" id="college" name="college" required>
                                                    </div>
                                                  </div>
                                                  <div class="text-center">
                                                     <div class="g-recaptcha" data-sitekey="6LeSPm4UAAAAAC0FWOGg3ulblZMfE71vsJHDyyn6"></div>
                                                      <button type="button" id="submit1" class="btn btn-primary my-4">Register</button>
                                                  </div>
                                                </form>
                                              </div>
                                                <div class="col-md-6 col-lg-6 mt-2">
                                                  <div>
                                                    <h2>Instructions</h2>
                                                      <ul class="list-group">
                                                        <li class="list-group-item">Please make sure all the fields entered are correct. </li>
                                                        <li class="list-group-item">Certificate will be given to you in the name specified in your registration. </li>
                                                        <li class="list-group-item">Certificate will be sent at the email address specified in your registration. </li>
                                                      </ul>
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
    </section>
    <section class="section section-lg pt-lg-0 mt--200 bg-light " id="about" >
      <div class="container">
            <div style="padding: 6% 0;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="card card-lift--hover shadow-sm bg-white   border-0">
                                    <div class="card-body py-5">
                                        <div class="container wow fadeInUp">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <h3 class="section-title">About Us</h3>
                                              <div class="section-title-divider"></div>
                                            </div>
                                          </div>
                                          <div class="about-container wow fadeInUp">
                                            <div class="row">
                                              <div class="col-lg-4 col-md-4">
                                                  <div class="about-img ">
                                                      <img src="img/nth4.png" alt="nth" class="img-responsive img-fluid">
                                                  </div>
                                              </div>

                                              <div class="col-md-8 col-lg-8 about-content">
                                                <p class="about-text">
                                                  Network Treasure Hunt is an online Treasure Hunt played across the globe. Read between the lines, find the hidden clues and connect the dots. You can use every tool at your disposal. Even with Google and Wikipedia by your side, it's going to be fun and challenging.
                                                </p>
                                                <p class="about-text">
                                                  Exert yourself to keep your name on the top and reach the ultimate level to win exciting prizes. The beginning of an enthraling adventure awaits YOU. A journey which guarantees to leave you with a thirst for more.
                                                </p>
                                                <p class="about-text">
                                                 Bring out the Sherlock in you as The Game Is On!
                                                </p>
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
    </section>
  
  <!--==========================
  Team Section
  ============================-->
  <section class="section section-lg pt-lg-0 mt--200 bg-light " id="team" >
      <div class="container">
            <div style="padding: 6% 0;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="card card-lift--hover shadow-sm bg-white border-0">
                                    <div class="card-body py-5">
                                      <div class="container wow fadeInUp">
                                          <div class="row">
                                        <div class="col-md-12">
                                          <h3 class="section-title">Contact Us</h3>
                                          <div class="section-title-divider"></div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="member">
                                            <div class="pic"><img src="img/aditi.jpg" alt="aditi" class="img-responsive img-fluid"  style="border-radius: 50%;"></div>
                                            <h4>Aditi Kulkarni</h4>
                                            <div class="social">
                                              <p><a href="tel:'+91-8108590333'"><i class="fa fa-phone"> +91-8108590333</i></a></p>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-md-3">
                                          <div class="member">
                                            <div class="pic"><img src="img/evleen.jpg" alt="evleen" class="img-responsive img-fluid" style="border-radius: 50%;"></div>
                                            <h4>Evleen Singh</h4>
                                            <div class="social">
                                              <p><a href="tel:'+91-8329531360'"><i class="fa fa-phone"> +91-8329531360</i></a></p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="member">
                                            <div class="pic "><img src="img/nishit.jpg" alt="nishit" class="img-responsive img-fluid"  style="border-radius: 50%;"></div>
                                            <h4>Nishit Chaudhari</h4>
                                            <div class="social">
                                              <p><a href="tel:'+91-8237395395'"><i class="fa fa-phone"> +91-8237395395</i></a></p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="member">
                                            <div class="pic "><img src="img/toshal.jpg" alt="toshal" class="img-responsive img-fluid"  style="border-radius: 50%;"></div>
                                            <h4>Toshal Agrawal</h4>
                                            <div class="social">
                                              <p><a href="tel:'+91-9545588430'"><i class="fa fa-phone"> +91-9545588430</i></a></p>
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
    </section>
  
  <!--==========================
  Footer
============================-->

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-xs-6 col-6">
                    <a href="http://ieee.org">
                      <div class="logo">
                        <img class="foot_img img-responsive img-fluid ieee" src="img/ieeelogo.png" alt="IEEE Logo" />
                      </div>
                        
                    </a>
                </div>
                <div class="col-md-8">
                   <div class="credits">
            
            Designed by WebTeam@PISB
          </div>
                </div>
                <div class="col-md-2 col-xs-6 col-6">
                  <div class="logo">
                     <img class="foot_img img-responsive img-fluid pisb" src="img/pisb.png" alt="PISB Logo" />
                  </div>
                </div>
        </div>
      </div>
    </div>
  </footer>
 <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>-->
  

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src='https://momentjs.com/downloads/moment.js'></script>
<script src='https://momentjs.com/downloads/moment-timezone-with-data-2012-2022.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js'></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
