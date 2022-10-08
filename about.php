<?php

include 'includes/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <style>
       .image2{
           opacity: 0;
       }
    </style>
<?php include 'includes/user_header.php'; ?>
<div class="home-bg" style="background:url(../images/home-bg.png) no-repeat;">

<section class="home">


      <div class="swiper-slide slide">\
          <div class="content">
            
            <h3 style="color: black">About US:
              </h3>
            <span style="color: black">This is but an Assignment
              </span>
         </div> 
         <div class="image2">
            <img src="images/ukraine.png" alt="" opacity = "0">
         </div>
         
   </div>
    

</section>
        

</div>

    <section class="home-intro">
        <h3 style="text-align: left; font-size: large;">
            
                This is an assignment for a Multimedia Course at Xiamen Univeristy Malaysia.
            <br>It is a website that talks briefly about the Ukraine Russia War 
            <br>It covers the History of the conflict, Consequences of the coflict.
            
            <br>It also covers the Grey Areas of the issue.
        </h3>
        <br>
    </section>

        <section class="about">

   <div class="row">
       <div class="content">
           <h3>Who?</h3>
         <p>This assignment was made by Ahmed Fathy, a CST Student at Xiamen Universisty Malaysia. I am Egyptian and 21 years of age as of 2022. this is the first full website i have created thus far.
           </p>
      </div>
      <div class="image">
         <img src="images/me.jpg" alt="">
      </div>

      

   </div>

</section>
<section class="about">

   <div class="row">
       <div class="content">
           <h3>Why?</h3>
         <p>The website covers the Ukraine Russia War. This topic was chosen as it is prevelant nowadays and is still ongoing. and it is part of why the ecocnomy may be suffering right now. This is simply to summarize the issues going on and is not that deep, but some links are on the website to allow the users to learn more.
           </p>
      </div>
      <div class="image">
         <img src="images/code.jpg" alt="">
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
        slidesPerView: 4,
      },
   },
});
</script>

</body>
</html>