<?php

include 'includes/connect.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<?php include 'includes/user_header.php'; ?>

<div class="home-bg" style="background:url(../images/home-bg.png) no-repeat;">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide" data-swiper-autoplay="2000" style="color: black">
         <div class="image">
            <img src="images/ukraine.png" alt="">
         </div>
         <div class="content">
            <span style="color: black">An old nation in a struggle</span>
            <h3 style="color: black">Ukraine</h3>
            <a href="history.php" class="btn">Learn More</a>
         </div>
      </div>

      <div class="swiper-slide slide" data-swiper-autoplay="2000">
         <div class="image">
            <img src="images/russia.png" alt="">
         </div>
         <div class="content">
            <span style="color: black">At fault or just being used?</span>
            <h3 style="color: black">Russia</h3>
            <a href="garea.php" class="btn">Learn More</a>
         </div>
      </div>

      <div class="swiper-slide slide" data-swiper-autoplay="2000">
         <div class="image">
            <img src="images/grain.jpg" alt="">
         </div>
         <div class="content">
            <span style="color: black">The war affects everyone</span>
            <h3 style="color: black">Global Issues</h3>
            <a href="consequences.php" class="btn">Learn More</a>
         </div>
      </div>

   </div>  
   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Introduction</h1>
    
    <section class="home-intro">
        <h3>
                fdfff
        </h3>
    </section>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

<a href="history.php" class="swiper-slide slide">
      <img src="images/1.png" alt="">
      <h3>History</h3>
           <h6 class="introh6">
            History about the conflict.
       </h6>
   </a>

   <a href="consequences.php" class="swiper-slide slide">
      <img src="images/2.png" alt="">
      <h3>Consequences</h3>
              <h6 class="introh6">
            Consequences of the Conflict
       </h6>
   </a>

   <a href="garea.php" class="swiper-slide slide">
      <img src="images/3.png" alt="">
      <h3>Grey Area</h3>
        <h6 class="introh6">
            The Uncertains
       </h6>
   </a>

   </div>

   </div>

</section>
<section class="category">
   <div class="swiper category-slider2">

   <div class="swiper-wrapper">

   <a href="about.html" class="swiper-slide slide">
      <img src="images/4.png" alt="">
      <h3>About Us</h3>
       <h6 class="introh6">
            Who and Why this website?
       </h6>
   </a>

   <a href="contact.php" class="swiper-slide slide">
      <img src="images/5.png" alt="">
      <h3>Contact Us</h3>
        <h6 class="introh6">
            Reach out to us.
       </h6>
   </a>

   </div>

   </div>

</section>

<?php include 'includes/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
    breakpoints: {
      0: {
         slidesPerView: 1,
       },
    }

});
 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 3,
       },
   },
});
    
 var swiper = new Swiper(".category-slider2", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView: 2,
      },
   },
});


</script>

</body>
</html>