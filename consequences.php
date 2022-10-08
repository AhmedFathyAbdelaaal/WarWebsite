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
   <title>Consequences</title>
    
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
         <div class="image">
            <img src="images/warr.jpg" alt="">
         </div>
         <div class="content">
            <span style="color: black">Results of It.
             </span>
            <h3 style="color: black">Ukraine Russia War.
             </h3>
         </div> 
   </div>
    

</section>
        

</div>

    <h1 class="heading">Consequences of the War
    </h1>
    
    <section class="home-intro">
        <h3 style="font-size: large">
                The war had some consequences Locally for Ukrain and Russia and Internationally around the world.
        </h3>
    </section>
    <h2 class="heading">Local Effects</h2>
    
<section class="about">

   <div class="row">
       <div class="content">
         <h3>Ukraine</h3>
         <p> Ukraine has suffered massive infrastructure issues and economical issues. The war has led many of its people to flee or fight. The war also caused many essential buildings to be dangerous to live in or unlivable. As for its economy it also suffered a but but nothing like Russia's massive plunge into the depth, currancy wise.
           </p>
         <a href="https://www.bbc.com/news/world-europe-60506682" class="btn">Learn More</a>
      </div>
      <div class="image">
         <img src="images/ukraine.png" alt="">
      </div>

      

   </div>
    
</section>
    
 <section class="about">

   <div class="row">
       <div class="content">
         <h3>Russia</h3>
         <p>Russia didnt suffer as much as Ukraine did infrestructure wise, but starting wars does cost man power and a lot of wealth. morale in Russian soliders and citizens. Also their currancy dropped hard due to the sanctions placed by many countries.
           </p>
         <a href="https://www.aljazeera.com/news/2022/6/22/russia-ukraine-live-news-brutal-shelling-kills-15-in-kharkiv-liveblog" class="btn">Learn More</a>
      </div>
      <div class="image">
         <img src="images/russia.png" alt="">
      </div>
       

      

   </div>

</section>
    <h2 class="heading">International Effects</h2>
 <section class="about">

   <div class="row">

      <div class="image">
         <img src="images/refugee.jpg" alt="">
      </div>

      <div class="content">
         <h3>Human Related Issues</h3>
         <p>Refugees from Ukrain mainly have fled the country onces the invasion started. and rightfully so since the russian army showed sign of not caring whether they hit public infrestructure or military one. Many of the public decided to either take arms against the invaders or flee the country. More statisics on the number of refugees following the Learn More button.
          </p>
         <a href="https://data.unhcr.org/en/situations/ukraine" class="btn">Learn More</a>
      </div>
       
 
   </div>

</section>
    
<section class="about">

   <div class="row">
       <div class="content">
         <h3>Food Supply Issues</h3>
         <p>Since the war started, since Ukrain is a massive exporter for grains, the war and sanctions around ther region have caused many of their exports to slow down. And because of said slowing, some countries are suffering the consequences in the form of increasing food related item prices. some example are meantion in the video linked in Learn More.
           </p>
         <a href="https://www.youtube.com/watch?v=pRCSLunWWko" class="btn">Learn More</a>
      </div>
      <div class="image">
         <img src="images/grains.jpg" alt="">
      </div>
       
      

   </div>

</section>
    
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/oil.jpg" alt="">
      </div>

      <div class="content">
         <h3>Oil Issues</h3>
         <p>This is a pretty straight forward issue. What happens when you sanction off the county  that supplies you with a lot of oil? The prices are more likely to increase. Couple that with the already unstable post Corona climate, it makes for the perfect environment for economy shifts.
          </p>
         <a href="https://www.weforum.org/agenda/2022/03/how-does-the-war-in-ukraine-affect-oil-prices/" class="btn">Learn More</a>
      </div>
       

   </div>

</section>
    

<?php include 'includes/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>