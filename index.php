<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compitable" content="IE=egde">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="shortcut icon" href="img/favicon.png">
       <title>Noakhali  Science and Technology University</title>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,600" rel="stylesheet"> 
       <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/slicknav.min.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css">
       <link rel="stylesheet" href="css/owl.theme.default.min.css">
       <link rel="stylesheet" href="css/bxslider.css">
       <link rel="stylesheet" href="css/custom.css">
   </head>
   <body>
   <?php include 'menu.php'; ?>
    <div id="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li><i class="fas fa-phone"></i> Call Us : 02334496522 </li>
                        <li><i class="fas fa-envelope"></i> Email Us : registrar@office.nstu.edu.bd </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="social">
                        <li><a href="https://www.facebook.com/NSTU.ADMISSION"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/resultbangla/status/1472847346819948544"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://nstu.edu.bd/"><i class="fab fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/school/noakhali-science-and-technology-university/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.youtube.com/playlist?list=PLrNJJ-yLIP982hvHWb0gNpaBfVmpVWeFC"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.facebook.com/groups/1412911529005790"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div id="slider_area">
         <div class="bxslider">
             <div class="child_slider">
                 <img src="img/miner1.jpg">
                 <div class="slider_text">
                     <div class="slider_display">
                         <div class="slider_table">
                             <div class="slider_main">
                                 <h3>Welcome To </h3>
                                 <h1>NOAKHALI SCIENCE & TECHNOLOGY UNIVERSITY </h1>
                                 <a href="https://admission.nstu.edu.bd/" class="readmore">ADMISSION</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="child_slider">
                 <img src="img/pen1.jpg">
                 <div class="slider_text">
                     <div class="slider_display">
                         <div class="slider_table">
                             <div class="slider_main">
                             <h3>Welcome To </h3>
                                 <h1>NOAKHALI SCIENCE & TECHNOLOGY UNIVERSITY </h1>
                                 <a href="https://admission.nstu.edu.bd/" class="readmore">ADMISSION</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="child_slider">
                 <img src="img/bus1.jpg">
                 <div class="slider_text">
                     <div class="slider_display">
                         <div class="slider_table">
                             <div class="slider_main">
                             <h3>Welcome To </h3>
                                 <h1>NOAKHALI SCIENCE & TECHNOLOGY UNIVERSITY </h1>
                                 <a href="https://admission.nstu.edu.bd/" class="readmore">ADMISSION</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>           
    </div>

    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br>
 

<div class="text-center"> <a href="register.php"> <input type="button" value="Registration" style="width: 160px;height: 50px;background-color: #078700;color: white;border-radius: 5px;font-weight: bold" ></a></div>
     
<br><br>

     <div id="copyright_area">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <p> Created By Gulam Murshed Robin |All Rights Reserved © </p>
                 </div>
             </div>
         </div>
     </div>

   </body>
       
       
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/main.js"></script>
</html>