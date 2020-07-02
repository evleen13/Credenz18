<?php
    
   $register = ''; 

  if(isset($_GET["register"])){
    if($_GET["register"] == 'success'){
      $register = "<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    Registeration successfull
  </div>";
    }else{
      $register = "<div class='alert alert-danger alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    Registeration unsuccessfull
  </div>";
    }
  }
  
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Pune’s largest inter-collegiate Data Science Event in Credenz ‘18.">
  <meta name="author" content="Credenz'18">
  <title>DataWiz - A Data Science Event</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/datalogo.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="./assets/css/docs.min.css" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar  navbar-expand-lg text-white fixed-top bg-default navbar-dark ">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="">
          DataWiz
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="">
                  DataWiz
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav  align-items-lg-center">
              <li class="nav-item ">
                  <a href="#home" class="nav-link" role="button">
                    <i class="ni ni-shop d-lg-none"></i>
                    <span class="nav-link-inner--text">Home</span>
                  </a>
               </li>  
            <li class="nav-item ">
              <a href="#about" class="nav-link"   role="button">
                <i class="ni ni-bulb-61 d-lg-none"></i>
                <span class="nav-link-inner--text">About</span>
              </a>
             
            </li>
            <li class="nav-item ">
              <a href="#rules" class="nav-link"   role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Rules</span>
              </a>
             
            </li>
            <li class="nav-item ">
              <a href="#structure" class="nav-link"   role="button">
                <i class="ni ni-settings d-lg-none"></i>
                <span class="nav-link-inner--text">Structure</span>
              </a>
             
            </li>
            <li class="nav-item ">
              <a href="#registeration" class="nav-link"   role="button">
                <i class="ni ni-badge d-lg-none"></i>
                <span class="nav-link-inner--text">Registeration</span>
              </a>
             
            </li>
            <li class="nav-item ">
              <a href="#judgingcriteria" class="nav-link"  role="button">
                <i class="ni ni-check-bold d-lg-none"></i>
                <span class="nav-link-inner--text">Judging Criteria</span>
              </a>
             
            </li>
           
          </ul>
         
        </div>
      </div>
    </nav>
      
    <div class="shift-y">
        <div class="d-flex flex-wrap justify-content-between">
                <div class="logo" style="transform: translateX(20px);">
                    <img src="assets/img/brand/ieeelogo.png" class="img-responsive img-fluid" />    
                </div>
                <div class="logo" style="transform: translateX(-20px);">
                    <img src="assets/img/brand/logopisb.png" class="img-responsive img-fluid" />
                </div>
            </div>
          
    </div>
          
  </header>



  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section-shaped my-0" id="home">
        <div class="shape shape-style-3 shape-dark shape-skew">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>

        </div>
        <div class="container shape-container">
            
          <div class="col px-0">
            <!--<div class="row bg-gradient-primary justify-content-between"  >
                <img src="./assets/img/brand/ieeelogo.png"" class="img-fluid " style="width: 15%" alt="">
                <img src="./assets/img/brand/logopisb.png"" class="img-fluid" style="width: 15%" alt="">
             </div>-->
            <div class="row  align-items-center">
              <div class="col-lg-6 order-lg-1 order-md-1 order-2">
                <h1 class="display-1  text-white ">DataWiz</h1>
                <h4 class=" text-white">
                <span>Pune’s largest inter-collegiate Data Science Event in Credenz ‘18. </span>
                </h4>
                <p class="lead  text-white"></p>
                <div class="btn-wrapper">
                  
                  <a href="#about" class="btn btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-bold-down"></i></span>
                    <span class="btn-inner--text">Learn More</span>
                  </a>
                </div>
              </div>
              <div class="col-lg-6   order-lg-2 order-md-2 order-1  mt-lg-0 " >
                <img src="./assets/img/brand/datawiz.png" class="img-fluid " alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 mt--200 " id="about" >
      <div class="container">
            <div style="padding: 6% 0;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <div class="col-lg-12">
                                <div class="card card-lift--hover shadow border-0">
                                    <div class="card-body py-5">
                                        <div class="d-flex justify-content-center">
                                            <div class="icon icon-shape icon-shape-primary    rounded-circle mb-2">
                                                <i class="ni ni-bulb-61"></i>
                                            </div>
                                        </div>

                                        <h6 class="text-primary text-center text-uppercase" style="font-weight: 600;">About</h6>
                                        <p class="text-center text-default font-weight-normal mt-5">DataWiz challenges you to find unconventional answers to real-world problems by applying the principles of probability, statistics & machine learning. Your goal is to analyze the data, algorithmically decipher the inherent patterns in the data and make predictions based on the statistical dependencies between the input and the corresponding output.</p>
                                        <p class="text-center text-default font-weight-normal mt-4">Participating in such predictive modelling competitions will help you gain practical experience and also improve and harness your data modelling skills in various domains. At the same time, you get to do it in a competitive context against several participants where each one tries to build the most accurate predictive algorithm.</p>
                                        <p class="text-center text-default font-weight-normal mt-4">Pushing each other to the limit can result in better performance and smaller prediction errors. Being able to perform well in such events will help you accelerate your career in Data Science.</p>
                                        <p class="text-center text-default font-weight-normal mt-4">Compete in Pune’s largest inter-collegiate Data Science Event in Credenz ‘18 and find out if you have it in you to be our very first Data Wizard! </p>
                                        <p  class="text-center text-default font-weight-bold mt-4">You either win, or learn! </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="rules"></div>
                    </div>
                </div>
            </div>
      </div>
    </section>
    <section class="mb-5"  >
      <div class="container">
        

        <div class="row row-grid ">
<div class="col-md-6 card-lift--hover">

            <div class="pr-md-5">
              <div class="d-flex justify-content-center">
                        <div class="icon icon-shape icon-shape-success  rounded-circle mb-2">
                            <i class="ni ni-collection"></i>
                          </div>
                    </div>
                <h6 class="text-success text-center text-uppercase" style="font-weight: 600;">Rules</h6>

              <ul class="list-unstyled mt-4">

                <li class="py-1">
                  <div class="d-flex align-items-start ">
                    <div>
                      <div class="badge badge-pill bg-gradient-success mr-3">
                      </div>
                    </div>
                    <div>
                     <p class=" text-default font-weight-normal ">A maximum of 2 candidates pursuing undergraduate program at their institution are allowed per team.</p>
                    </div>
                  </div>
                </li>
                 <li class="py-1">
                  <div class="d-flex align-items-start ">
                    <div>
                      <div class="badge badge-pill bg-gradient-success mr-3">
                      </div>
                    </div>
                    <div>
                     <p class=" text-default font-weight-normal ">Disclosing the code and data outside of the teams is prohibited and will lead to disqualification.</p>
                    </div>
                  </div>
                </li>
                 <li class="py-1">
                  <div class="d-flex align-items-start ">
                    <div>
                      <div class="badge badge-pill bg-gradient-success mr-3">
                      </div>
                    </div>
                    <div>
                     <p class=" text-default font-weight-normal ">Using code or data from any external resource(s) is not permitted and will lead to disqualification.</p>
                    </div>
                  </div>
                </li>
                <li class="py-1">
                  <div class="d-flex align-items-start ">
                    <div>
                      <div class="badge badge-pill bg-gradient-success mr-3">
                      </div>
                    </div>
                    <div>
                     <p class=" text-default font-weight-normal ">Round specific rules will be specified on the contest page.</p>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
     <div class="col-md-6 card-lift--hover" id="structure">
            <div class="pr-md-5">
               <div class="d-flex justify-content-center">
                        <div class="icon icon-shape icon-shape-success  rounded-circle mb-2">
                            <i class="ni ni-settings"></i>
                          </div>
                    </div>
                <h6 class="text-success text-center text-uppercase" style="font-weight: 600;">Structure</h6>

              <ul class="list-unstyled mt-4">

                <li class="py-1">
                  <div class="d-flex align-items-start ">
                    <div>
                      <div class="badge badge-pill bg-gradient-success mr-3">
                      </div>
                    </div>
                    <div>
                     <p class=" text-default font-weight-normal ">The contest will be hosted on Kaggle.</p>
                    </div>
                  </div>
                </li>
                 <li class="py-1">
                  <div class="d-flex align-items-start ">
                    <div>
                      <div class="badge badge-pill bg-gradient-success mr-3">
                      </div>
                    </div>
                    <div>
                     <p class=" text-default font-weight-normal ">The duration of the contest and the round structure will be released soon.</p>
                    </div>
                  </div>
                </li>
                 <li class="py-1">
                  <div class="d-flex align-items-start ">
                    <div>
                      <div class="badge badge-pill bg-gradient-success mr-3">
                      </div>
                    </div>
                    <div>
                     <p class=" text-default font-weight-normal ">Once the problem statement(s) and the dataset(s) are released, the teams will have to solve the problem and submit the output file on the contest page in the stipulated amount of time. The submission file format will be specified on the contest page.</p>
                    </div>
                  </div>
                </li>



              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
   

    <section class="section section-shaped my-0 overflow-hidden" id="registeration">
      <div class="shape shape-style-2 shape-dark shape-skew">
         <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
      <div class="container  pb-300">
       <div class="d-flex justify-content-center">
                        <div class="icon icon-shape icon-shape-white bg-default rounded-circle mb-2">
                            <i class="ni ni-badge "></i>
                          </div>
                    </div>
                <h6 class="text-white text-center text-uppercase mb-5" style="font-weight: 600;">Registeration</h6>
        <div class="row row-grid py-4">
          <div class="col-lg-4 d-flex align-items-start ">

            <div class="badge badge-pill bg-gradient-white mr-3">
              
            </div>
            
            <p class="text-white ">The teams can register at the desks put up at various colleges across Pune..</p>
          </div>
         <div class="col-lg-4 d-flex align-items-start">
            <div class="badge badge-pill bg-gradient-white mr-3">
              
            </div>
            
            <p class="text-white ">The teams can also register online, on the official Credenz ‘18 website and the app.</p>
          </div>
          <div class="col-lg-4 d-flex align-items-start">
           <div class="badge badge-pill bg-gradient-white mr-3">
              
            </div>
            <h5 class="text-white ">Fees:</h5>
            <p class="text-white  pl-4">
o <strong>₹100</strong> for a team.
</p>
          </div>
        </div>
         <div class="row text-center justify-content-center">
          <div class="col-lg-10 mt-5">
            
            <p class="lead text-white">Once the teams have registered, they will get an email from the DataWiz team confirming their registration, along with a unique Kaggle contest link and a Google Form. The teams will have to join the competition through the link in their email, and enter the corresponding details in the form. <br><br> 
Submissions of only those competitors will be considered whose Kaggle account details are submitted through the form.
</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center mt--300">
          <div class="col-lg-6">
            <div class="card card-lift--hover bg-gradient-secondary shadow border-0">
          
          <div class="card-body px-lg-5 py-lg-5">
             <div class="text-center text-white mb-4 py-2 bg-primary" style="border-radius: 5px;font-size: 1.5rem" >
                  <span>Register</span>
                </div>
          
          <form role="form" action="register.php" method="post">
            <?php echo $register; ?>
            <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
              </div>
              <input class="form-control" placeholder="Player 1" type="text" name="p1" required>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
              </div>
              <input class="form-control" placeholder="Player 2 (Optional)" name="p2" type="text" >
            </div>
            </div>
            <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
              </div>
              <input class="form-control" placeholder="Player1 email" type="email" name="email1" required>
            </div>
            </div>
            <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-email-83"></i></span>
              </div>
              <input class="form-control" placeholder="Player2 email (Optional)" name="email2" type="email">
            </div>
            </div>
             <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
              </div>
               <select class="form-control" name="year" >
                    
                  <option value="FE">FE</option>
                  <option value="SE">SE</option>
                  <option value="TE">TE</option>
                  <option value="BE">BE</option>
      
                </select>
            </div>
            </div>
            


             <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
              </div>
              <input class="form-control" placeholder="Transaction ID (Paytm or UPI)" type="text" name="tid" required="">
            </div>
            </div>
            
            <div class="d-flex flex-wrap justify-content-center">
                <div class="transaction mr-2">
                    <img src="assets/img/brand/1535306960459.jpg" class="img-responsive img-fluid" />
                    <p class="text-center mt-3">+91 9619132211</p>
                </div>
                <div class="transaction ml-2">
                    <img src="assets/img/brand/9619132211@upi.jpg" class="img-responsive img-fluid" />
                    <p class="text-center mt-3">+91 9619132211</p>
                </div>
            </div>
           
            <div class="text-center">
            <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
            </div>
          </form>
          </div>
        </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-lg pt-0" id="judgingcriteria">
      <div class="container">
        <div class="card card-lift--hover shadow-lg border-0">
          <div class="p-5">
            
              <div class="d-flex justify-content-center">
                        <div class="icon icon-shape icon-shape-danger   rounded-circle mb-2">
                            <i class="ni ni-check-bold"></i>
                          </div>
                    </div>
                   
                    <h6 class="text-danger text-center text-uppercase" style="font-weight: 600;">Judging Criteria</h6>
                    <p class="text-center text-default font-weight-normal mt-3">The submissions will be evaluated on the error metric decided for the given dataset. If any two teams perform equally well on the overall score, the tie will be broken by comparing the submission time of both the teams.</p>
            </div>
      
        </div>
      </div>
    </section>
   
  </main>
  <footer class="footer bg-gradient-default ">
   
    <div class="container-fluid">
      
      
      <div class="row">
        <div class="col-lg-4 col-md-4 text-white col-12 ">
          
                                <h4 class="text-center mb-3 mt-2 text-white ">Contact us </h4>
                                <p class=" text-center">Pranav Budhwant: <i class="fa fa-phone fa-icons "></i><a href="tel:+91-7020991301" style="color: white;"><span>+91-7020991301</span></a></p>
                                
                           
        </div>
		 <div class="col-lg-4 col-md-4 text-white  col-12  ">
      
                          
                                <h4 class="text-center mb-3 mt-2 text-white ">Follow us</h4>
                                <div class=" d-flex justify-content-center">
                                    <a href="https://www.facebook.com/pisb.credenz/" target="_blank" class="m-1"> <span class="fa fa-facebook"></span> </a>
                                    <a href="https://www.instagram.com/pisbcredenz/" target="_blank" class="m-1"> <span class="fa fa-instagram "></span> </a>
                                    <a href="https://twitter.com/pisbcredenz" target="_blank" class="m-1"> <span class="fa fa-twitter "></span> </a>
                                
                            </div>
                      
        </div>
		 <div class="col-lg-4 col-md-4 col-12  ">
            
                            
                                <h4 class="text-center mb-3 mt-2 text-white ">Mail us</h4>
                                <p class="text-center"><a href="mailto:credenz18@gmail.com"><i class="fa fa-envelope fa-icons" style="margin: 0 10px;"></i>datawiz@credenz.info</a></p>
                            
                        

          
        </div>

       
      </div>
    </div>

  </footer>
  <div class="p-2 text-white text-center bg-default" > Developed by WebTeam@PISB </div>
  <!-- Core -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/popper/popper.min.js"></script>
  <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.min.js"></script>
  <script>  
    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
  console.log(event);
  console.log(this);
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});   
  </script>
</body>

</html>