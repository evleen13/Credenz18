<?php 
	if(!isset($_SESSION)){
    session_start();
}

	include_once("config.php");//We include this to initialize global constants. See config.php


if( !(isset( $_POST['login'] ) ) ) { $a=0;

  } else {
	  $usr = new nth;
	  $usr->storeFormValues( $_POST );
	  
	  if( $usr->userLogin() ) {
          if($_SESSION['user_level'] == 0 ) {
              header("Location:ques1.php");
          }
      if($_SESSION['user_level'] == 1 ) {
		header("Location:ques1.php");
		}
    if($_SESSION['user_level'] == 2 ) {
    header("Location:simonmckeon.php");
    }
    if($_SESSION['user_level'] == 3 ) {
    header("Location:bbc.php");
    }
    if($_SESSION['user_level'] == 4 ) {
    header("Location:melisandre.php");
    }
    if($_SESSION['user_level'] == 5 ) {
    header("Location:negaraku.php");
    }
    if($_SESSION['user_level'] == 6 ) {
    header("Location:neva.php");
    }
    if($_SESSION['user_level'] == 7 ) {
    header("Location:tomtato.php");
    }
    if($_SESSION['user_level'] == 8 ) {
    header("Location:teide.php");
    }
    if($_SESSION['user_level'] == 9 ) {
    header("Location:continuumproductions.php");
    }
    if($_SESSION['user_level'] == 10 ) {
    header("Location:hmsbeagle.php");
    }
    if($_SESSION['user_level'] == 11 ) {
    header("Location:cardini.php");
    }
    if($_SESSION['user_level'] == 12 ) {
    header("Location:theoryofmutation.php");
    }
    if($_SESSION['user_level'] == 13 ) {
    header("Location:logitech.php");
    }
    if($_SESSION['user_level'] == 14 ) {
    header("Location:thenewday.php");
    }
    if($_SESSION['user_level'] == 15 ) {
    header("Location:regnumfrancorum.php");
    }
          if($_SESSION['user_level'] == 16 ) {
              header("Location:mounteverest.php");
          }
          if($_SESSION['user_level'] == 17 ) {
              header("Location:ulsterbanner.php");
          }
          if($_SESSION['user_level'] == 18 ) {
              header("Location:lifeinalookingglass.php");
          }
          if($_SESSION['user_level'] == 19 ) {
              header("Location:johncandy.php");
          }
          if($_SESSION['user_level'] == 20 ) {
              header("Location:aegontargaryen.php");
          }
          if($_SESSION['user_level'] == 21 ) {
              header("Location:farsi.php");
          }
          if($_SESSION['user_level'] == 22 ) {
              header("Location:larryewing.php");
          }
          if($_SESSION['user_level'] == 23 ) {
              header("Location:tigerwoods.php");
          }
          if($_SESSION['user_level'] == 24 ) {
              header("Location:francisstevens.php");
          }
          if($_SESSION['user_level'] == 25 ) {
              header("Location:declan.php");
          }
          if($_SESSION['user_level'] == 26 ) {
              header("Location:matildaziegler.php");
          }
          if($_SESSION['user_level'] == 27 ) {
              header("Location:mrsparker.php");
          }
          if($_SESSION['user_level'] == 28 ) {
              header("Location:kolkata.php");
          }
          if($_SESSION['user_level'] == 29 ) {
              header("Location:tomhanks.php");
          }
          if($_SESSION['user_level'] == 30 ) {
              header("Location:meenakshiamma.php");
          }
          if($_SESSION['user_level'] == 31 ) {
              header("Location:electronicarts.php");
          }
          if($_SESSION['user_level'] == 32 ) {
              header("Location:birendersinghdhanoa.php");
          }
          if($_SESSION['user_level'] == 33 ) {
              header("Location:soulcall.php");
          }
          if($_SESSION['user_level'] == 34 ) {
              header("Location:jerryandjumbo.php");
          }
          if($_SESSION['user_level'] == 35 ) {
              header("Location:trainwreck.php");
          }
          if($_SESSION['user_level'] == 36 ) {
              header("Location:ferdinandporsche.php");
          }
          if($_SESSION['user_level'] == 37 ) {
              header("Location:mauricejarre.php");
          }
          if($_SESSION['user_level'] == 38 ) {
              header("Location:christopherpaolini.php");
          }
          if($_SESSION['user_level'] == 39 ) {
              header("Location:acromantula.php");
          }
          if($_SESSION['user_level'] == 40 ) {
              header("Location:aphrodite.php");
          }
          if($_SESSION['user_level'] == 41 ) {
              header("Location:scottavett.php");
          }
          if($_SESSION['user_level'] == 42 ) {
              header("Location:afeastforcrows.php");
          }
          if($_SESSION['user_level'] == 43 ) {
              header("Location:montmorency.php");
          }
          if($_SESSION['user_level'] == 44 ) {
              header("Location:notsaygoodbye.php");
          }
          if($_SESSION['user_level'] == 45 ) {
              header("Location:romario.php");
          }
          if($_SESSION['user_level'] == 46 ) {
              header("Location:sennheiser.php");
          }
          if($_SESSION['user_level'] == 47 ) {
              header("Location:jonathanive.php");
          }
          if($_SESSION['user_level'] == 48 ) {
              header("Location:earlmanigault.php");
          }
          if($_SESSION['user_level'] == 49 ) {
              header("Location:trystwithdestiny.php");
          }
          if($_SESSION['user_level'] == 50 ) {
              header("Location:marshallchessclub.php");
          }
	  } else {
		  //echo "<div style='margin-top:100px;z-index:5000;' class='alert alert-danger'><span class='glyphicon glyphicon-remove-circle'></span> Invalid Username/Password</div>";
			echo "<script>alert('INVALID USERNAME PASSWORD COMBINATION.');</script>";
				
	  }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>NTH 17</title>
    <meta name="description" content="Credenz Coming Soon">
    <meta name="author" content="PICT IEEE Student Branch">
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!--EOF-->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./qcss/animate.css">
    <link rel="stylesheet" href="./qcss/main.css">
    <link rel="stylesheet" type="text/css" href="qcss/demo.css">
    <script src="qjs/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="qcss/sweetalert.css">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    </head>
<body style="overflow-x:hidden;">
<div id="credenzIco">
    <div id="topLeftCredenzIcon" class="fadeInDown animated"><a href="http://www.credenz.info" target="blank"><img class="lololologo" src="images/lupadlogo.png" alt="CREDENZ' 17"></a> </div>
</div>
	<section class="REGISTER_container">
    <div class="CONCONTSCT">
        <div class="CONCONTSCT_title">Login</div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mob">
            <div class="col-xl-2 col-lg-2 col-md-2"></div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="instructionregister1">
                    <h3 class="center-on-mob" style="color:#222;font-size:40px;text-align:center;font-family:'SolThin';">INSTRUCTIONS </h3>
                    <div style="color:#222;font-size:20px;font-family:"Quicksand", sans-serif;">
                    <ol>
                        <li>Do not prompt or reveal	the answers/hints anywhere on the Facebook page else you will be disqualified.  </li>
						<li>We reserve the right to ban any user for the use of any unfair means.  </li>
			 			<li>The decision regarding winners by the NTH team is final and binding.  </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-2"></div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 CONTACT_FORM_7">
        <form role="form" style="padding-right:10px;margin-top:40px;" action="" method="POST">
            <div class="form-group" style="padding-left:100px;padding-right:100px;">
                <div class="input-group INPUT">
                    <input type="text" class="form-control" id="InputUsername1" name="username" placeholder="Username" required> </div>
            </div>
            <div class="form-group" style="padding-left:100px;padding-right:100px;">
                <div class="input-group INPUT">
                    <input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password" required>
                </div>
            </div>
            
            <input type="submit" name="login" id="login" value="Log In" class="btn btn-info pull-right" style="margin-right:100px;"> 
        </form>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 web">
        <div class="col-xl-2 col-lg-2 col-md-2"></div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="instructionregister">
                <h3 class="center-on-mob" style="color:#222;font-size:40px;text-align:center;font-family:'SolThin';">INSTRUCTIONS </h3>
                <div id="instructions" style="color:#222;font-family:"Quicksand", sans-serif;">
                <ol>
                    <li>Do not prompt or reveal	the answers/hints anywhere on the Facebook page else you will be disqualified.  </li>
					<li>We reserve the right to ban any user for the use of any unfair means.  </li>
					<li>The decision regarding winners by the NTH team is final and binding.  </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-2"></div>
    </div>
    </div>
</section>

	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>-->
	<script  type="text/javascript" src="qjs/bootstrap-modal-carousel.min.js"></script>
	<script  type="text/javascript" src="qjs/cbpFWTabs.js"></script>

		<script type="text/javascript">
		(function() {

			[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
			new CBPFWTabs( el );
			});

		})();
		</script>
	  <script>
       $(window).ready(function(){

       	 //hand made side bar
            var status = 0;//sidebar is inside 1 for outside
            var count  = 0;
            var $sidebar = $('#sidebar');
            var $sidebartoggle=$('#toggleSidebar');
            function close(){
                   if(status==1){
                        $('#black').fadeOut(700);
                        $sidebar.animate({left:'-320px'},500);
                        $sidebartoggle.animate({left:'0%'},500);
                        $sidebartoggle.removeClass('fa-close').addClass('fa-bars');
                         status=0;
                     }
            }
            function open () {
                // body...
                  $('#black').fadeIn(700);
                    $sidebar.animate({left:'0%'},500);
                    $sidebartoggle.animate({left:'320px'},500);
                    $sidebartoggle.removeClass('fa-bars').addClass('fa-close');
                    status=1;
            }

            $sidebartoggle.click(function() {             
                if (status==0) {
                  open();
                }else{
                  close();
                }          
            });


           $('#black').click(function() {
            close();
           });

           $('.sidebar-item > a').click(function() {
           		close();
           });
          
          //END OF MOBILE SIDEBAR
           
		var $pisblogo = $('#img1');
		var $credlogo = $('#img2');
		var $credlogov = $('#img2v');
		var $landing = $('#landing');

       	$(window).resize(function() {
       		var width = $(this).width();
       		if(width<768){
       			$sidebartoggle.show();
       			$credlogo.hide();
       			
       		}else{
       			$sidebartoggle.hide();
       			$credlogo.show();
       			
       		}
       	});
       	var wid = $(window).width();

       	if(wid<768){
       		$credlogo.css('display','none');

       		$('#close-landing').click(function() {
		       	$pisblogo.removeClass('center-block');
		       	$credlogo.removeClass('center-block');
		       	$pisblogo.css({position:'fixed'});
		       	$credlogo.css({position:'fixed'});
		       	$(this).animate({right:-2000},"fast");
		       	$(this).hide();
		       	$('#present').hide();
		       	$pisblogo.hide();
		       	//$pisblogo.animate({right:0,top:10,width:120},"slow");
				
				$credlogov.css('display','none');
				$credlogo.css('display','block');       	
		       	$credlogo.animate({right:10,top:0,width:121,padding:10},"slow");

		       	//$('#landing').delay(200).animate({width:0,height:0},"slow");
		       	$landing.delay(500).animate({height:70},"slow");
		       	$landing.css('background-image','none');
		       	$sidebartoggle.show();
		       //	$landing.css({'box-shadow':'0px 5px 5px 1px'});
       	});
	
       	}else{

       		$('#close-landing').click(function() {
	       	$pisblogo.removeClass('center-block');
	       	$credlogo.removeClass('center-block');
	       	$pisblogo.css({position:'fixed'});
	       	$credlogo.css({position:'fixed'});
	       	$(this).animate({right:-2000},"fast");
	       	$(this).hide();
	       	$('#present').hide();
	       	$pisblogo.animate({right:0,top:0,width:150},"slow");
	       	$credlogo.animate({left:0,top:0,width:121},"slow");
	       	$credlogo.css('padding-top','5px');
	       	$credlogo.css('padding-right','0px');
	       	$credlogo.css('padding-botttom','20px');
	       	$credlogo.css('padding-left','10px');

	       	//$('#landing').delay(200).animate({width:0,height:0},"slow");
	       	$landing.delay(500).animate({height:70},"slow");
	       	$landing.css('background-image','none');
	       //	$landing.css({'box-shadow':'0px 5px 5px 1px'});
       	});
		
       	}


       	$('#close-landing').delay(4000).animate({opacity:1},"slow");
  
      $('.sidenavitem').mouseenter(function(){$(this).animate({right:"0px"});}).mouseleave(function(){$(this).animate({right:"-350px"});});


      //Active class toggle script
      $('.sidenav > a').click(function() {
      		$('.sidenav > a').removeClass('active');
      		$(this).addClass("active");
      
      });

       $('.sidebar-item').click(function() {
      		$('.sidebar-item').removeClass('active');
      		$(this).addClass("active");
      
      });


    });
      
  </script>


	</body>
</html>
