
jQuery(document).ready(function( $ ) {

  // Preloader
  $(window).on('load', function() {
    $('#preloader').delay(100).fadeOut('slow',function(){$(this).remove();});
  });
  
  // Initiate the wowjs
  new WOW().init();
  
  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {opacity:'show'},
    speed: 400
  });
  
  // Mobile Navigation
  if( $('#nav-menu-container').length ) {
      var $mobile_nav = $('#nav-menu-container').clone().prop({ id: 'mobile-nav'});
      $mobile_nav.find('> ul').attr({ 'class' : '', 'id' : '' });
      $('body').append( $mobile_nav );
      $('body').prepend( '<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>' );
      $('body').append( '<div id="mobile-body-overly"></div>' );
      $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');
      
      $(document).on('click', '.menu-has-children i', function(e){
          $(this).next().toggleClass('menu-item-active');
          $(this).nextAll('ul').eq(0).slideToggle();
          $(this).toggleClass("fa-chevron-up fa-chevron-down");
      });
      
      $(document).on('click', '#mobile-nav-toggle', function(e){
          $('body').toggleClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').toggle();
      });
    
      $(document).click(function (e) {
          var container = $("#mobile-nav, #mobile-nav-toggle");
          if (!container.is(e.target) && container.has(e.target).length === 0) {
             if ( $('body').hasClass('mobile-nav-active') ) {
                  $('body').removeClass('mobile-nav-active');
                  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                  $('#mobile-body-overly').fadeOut();
              }
          }
      });
  } else if ( $("#mobile-nav, #mobile-nav-toggle").length ) {
      $("#mobile-nav, #mobile-nav-toggle").hide();
  }
  
  // Stick the header at top on scroll
  $("#header").sticky({topSpacing:0, zIndex: '50'});

  // Smoth scroll on page hash links
  $('a[href*="#"]:not([href="#"])').on('click', function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          if (target.length) {
              
              var top_space = 0;
              
              if( $('#header').length ) {
                top_space = $('#header').outerHeight();
              }
              
              $('html, body').animate({
                  scrollTop: target.offset().top - top_space
              }, 1500, 'easeInOutExpo');

              if ( $(this).parents('.nav-menu').length ) {
                $('.nav-menu .menu-active').removeClass('menu-active');
                $(this).closest('li').addClass('menu-active');
              }

              if ( $('body').hasClass('mobile-nav-active') ) {
                  $('body').removeClass('mobile-nav-active');
                  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                  $('#mobile-body-overly').fadeOut();
              }
              
              return false;
          }
      }
  });
  
  // Back to top button
  $(window).scroll(function() {

      if ($(this).scrollTop() > 100) {
          $('.back-to-top').fadeIn('slow');
      } else {
          $('.back-to-top').fadeOut('slow');
      }
      
  });
  
  $('.back-to-top').click(function(){
      $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
      return false;
  });

});
/*var x=0;
function getstarted()
{
   x=1;
}*/
$(document).ready(function() {
    
    $("#submit1").click(function() {
                var response = grecaptcha.getResponse();

                if (response.length == 0) { //reCaptcha not verified
                    alert("Captcha empty.")
                } else {
                    //reCaptch verified
                    var username = $('#username').val();
                    var password = $('#password').val();
                    var pass_2 = $('#pass_2').val();
                    var fname = $('#fname').val();
                    var lname = $('#lname').val();
                    var email = $('#email').val();
                    var phn_no = $('#phn_no').val();
                    var college = $('#college').val();

                    //  var dataString="InputUsername="+InputUsername+"&InputPassword="+InputPassword+"&InputRePassword="+InputRePassword+"&InputFirstName="+InputFirstName+"&InputLastName="+InputLastName+"&InputEmail="+InputEmail+"&InputPhone="+InputPhone+"&InputCollege="+InputCollege;
                    var dataString = "username=" + username + "&password=" + password + "&pass_2=" + pass_2 + "&fname=" + fname + "&lname=" + lname + "&email=" + email + "&phn_no=" + phn_no + "&college=" + college;
                    if (username == '' || password == '' || pass_2 == '' || fname == '' || lname == '' || email == '' || phn_no == '' || college == '') {
                        alert("Please fill all the fields");
                        return false;
                    } else if (password != pass_2) {
                        alert("Passwords do not match");
                        return false;
                    } else {
                        $.ajax({
                            type: "POST",
                            url: "register.php",
                            data: dataString,
                            cache: false,
                            success: function(result) {
                                alert(result);
                            }
                        });
                        return false;
                    }
                }
            });
            /*if(x==0)
    {
      document.getElementById("register").style.display = "none";
      document.getElementById("about").style.display = "none";
      document.getElementById("team").style.display = "none";
      document.getElementById("header").style.display = "none";
      document.getElementById("footer").style.display = "none";
      document.getElementById("header-sticky-wrapper").style.display = "none";
    }
    if(x==1)
    {
      document.getElementById("register").style.display = "block";
      document.getElementById("about").style.display = "block";
      document.getElementById("team").style.display = "block";
      document.getElementById("header").style.display = "block";
      document.getElementById("footer").style.display = "block";
      document.getElementById("header-sticky-wrapper").style.display = "block";
    }*/
  var clock;

  // Grab the current date
  var currentDate = new Date();

  // Target future date/24 hour time/Timezone
  var targetDate = new Date("September 8, 2018 21:00:00").getTime();

  // Calculate the difference in seconds between the future and current date
  var diff = targetDate / 1000 - currentDate.getTime() / 1000;

  if (diff <= 0) {
    // If remaining countdown is 0
    clock = $(".clock").FlipClock(0, {
      clockFace: "DailyCounter",
      countdown: true,
      autostart: false
    });
    console.log("Date has already passed!")
    
  } else {
    // Run countdown timer
    clock = $(".clock").FlipClock(diff, {
      clockFace: "DailyCounter",
      countdown: true,
      callbacks: {
        stop: function() {
          console.log("Timer has ended!")
        }
      }
    });
    
    // Check when timer reaches 0, then stop at 0
    setTimeout(function() {
      checktime();
    }, 1000);
    
    function checktime() {
      t = clock.getTime();
      if (t <= 0) {
        clock.setTime(0);
      }
      setTimeout(function() {
        checktime();
      }, 1000);
    }
  }
});

