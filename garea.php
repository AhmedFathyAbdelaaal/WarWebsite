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
   <title>Grey Area</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'includes/user_header.php'; ?>
    
<div class="home-bg" style="background:url(../images/home-bg.png) no-repeat;">

<section class="home">


      <div class="swiper-slide slide">
          <div class="content">
            
            <h3 style="color: black">The Grey Area
              </h3>
            <span style="color: black">The Uncertains
              </span>
         </div> 
         <div class="image">
            <img src="images/politics.jpg" alt="">
         </div>
         
   </div>
    

</section>
        

</div>

    <h1 class="heading">What You May Not Know</h1>
    

<section class="category">
   <div class="swiper category-slider2">

   <div class="swiper-wrapper">

   <a href="garea.html" class="swiper-slide slide">
      <img src="images/warrr.jpg" alt="">
      <h3>Deeper War Reasons</h3>
       <h6 class="introh6">
            There may be Deeper War Reason behind this concept.
       </h6>
   </a>

   <a href="garea.html" class="swiper-slide slide">
      <img src="images/judge.jpg" alt="">
      <h3>Politics</h3>
        <h6 class="introh6">
            Politics may have played a sad role in all of this conflict.
       </h6>
   </a>
          <a href="garea.html" class="swiper-slide slide">
      <img src="images/shhhhhh.jpg" alt="">
      <h3>Conspiracy</h3>
        <h6 class="introh6">
            Conspiracy Theories will forever run rampant in the unstable days, and here is no different.
       </h6>
   </a>
          <a href="garea.html" class="swiper-slide slide">
      <img src="images/merica.jpg" alt="">
              <h3>Hipocracies</h3>
        <h6 class="introh6">
            The hipocracies of some parties in this conflict raised an important ethical question.
       </h6>
   </a>
       
       
       
   </div>

   </div>

</section>
    
 <section class="about">

   <div class="row">

      <div class="image">
         <img src="images/putin.jpg" alt="">
      </div>

      <div class="content">
         <h3>Deeper War Reasons
          </h3>
         <p> The people who started the war, Vladimir Putin is questionable at best. their reasons for going through with the invasion can be thought of as guesses and the orders of a mad man. it is clear Putin didnt want to defend himself against the west much but get the country for him to fulfill his Ukraine + Russia fantasy.
          </p>
      </div>

   </div>

</section>
<section class="about">

   <div class="row">

        <div class="content">
         <h3>Politics
            </h3>
         <p> From the West annoying Russia and Russia manipulating the politics in Ukraine, it is clear politics was the main tool used for getting what each country wanted, and when that failed for Russia they decided to full throttle the taking of Ukraine and make it into a whole invasion.
            </p>
      </div>
      <div class="image">
         <img src="images/politics.jpg" alt="">
      </div>

      

   </div>

</section>
    <section class="about">

   <div class="row">
i
      <div class="image">
         <img src="images/conspiracy.jpg" alt="">
      </div>

      <div class="content">
         <h3>Conspiracy
          </h3>
         <p>Conspiracies thrive in uncertain times, from theories that the west wanted this to happen, and Puting being weird, the world is never out of its conspiracy theories, one such theory says that the US is happy about such invasion for the debts they are about to impose on Ukraine. another theory states that russia didnt Invade because of the west, but because Puting just wanted to satisfy his fantasy. At the end of the day, we may never know which of the many theories true, only time will tell.
          </p>
         <a href="https://www.youtube.com/watch?v=T4g-M91WGbI&t=404s" class="btn">Learn More</a>
      </div>
    
   </div>

</section>
    
<section class="about">

   <div class="row">
       <div class="content">
           <h3>Hipocracies</h3>
         <p> It is clear that some countries are profiting off of this war, and some are supporting it. one of its supporters is China so they can later on invade Taiwan if this is ever to be "successful". Russian propoganda says they are doing this all for peace and saftey of Ukraine while causing harm. and the US supplying Ukrain with funds with interest potentail that they may not be able to cover, it is a sad reality we live in, but this horrible thing may be the fuel for other countries to take advantage of.
           </p>     
      </div>
      <div class="image">
         <img src="images/money.jpg" alt="">
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