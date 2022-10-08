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
    <title>History</title>

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
            <img src="images/shelf.jpg" alt="">
         </div>
         <div class="content">
            <span style="color: black">Why and Who?</span>
            <h3 style="color: black">Ukraine Russia War</h3>
         </div> 
   </div>
    

</section>
        

</div>

    <h1 class="heading">History of the Conflict</h1>
    
    <section class="home-intro">
        <h3 style="font-size: large">
                The Ukraine Russia War is a deep and was nearly an inevitable war. from the US trying to make friends with Ukraine and Russia opossing it. it goes even beyond so with the history between the two nations.
        </h3>
    </section>

<section class="about">

   <div class="row">
       <div class="content">
           <h3>Ukraine</h3>
         <p style="font-size: large">Ukraine is a country in Eastern Europe. It is the second-largest European country, covering approximately 600,000 square kilometres ,and has a population of around 40 million people. It is bordered by Russia to the east and northeast. it is the country being invaded by Russia. its populations is also still fighting hard to not allow it.
           </p>
         <a href="https://en.wikipedia.org/wiki/Ukraine" class="btn">Learn More</a>
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
         <p style="font-size: large">Russia is a transcontinental country spanning Eastern Europe and Northern Asia. It is the largest country in the world by area, covering over 17,125,191 square kilometres, and encompassing one-eighth of Earth's inhabitable landmass. Russia is the invader of Ukraine in this conflict, and its president Vladimir Puting is on the main causes of such invasion to start. 
           </p>
         <a href="https://en.wikipedia.org/wiki/Russia" class="btn">Learn More</a>
      </div>
      <div class="image">
         <img src="images/russia.png" alt="">
      </div>

      

   </div>

</section>
    
 <section class="about">

   <div class="row">
       <div class="content">
           
           <h3>How it Started</h3>
           <p style="font-size: large">To simply put it, the conflict has been brewing for a while. The westerners in Russia's mind are trying to become good allies with Ukraine to have a strategic advantahe against them. Several incidents lead to the russians thinking this is true, especially Vladimir Puting. And so after a while it all exploded when putin announced said invasion will start. </p>
         <a href="https://www.youtube.com/watch?v=FQ4hvLqNfqo" class="btn">Learn More</a>
      </div>
      <div class="image">
         <img src="images/putin.jpg" alt="">
      </div>
       
      

   </div>

</section>
    <section class="about">

   <div class="row">
       <div class="content">
           <h3>How is it Going</h3>
         <p style="font-size: large"> The war till now is still on going, the Ukrainians dont seem to be giving up and the Russian Government is still adamant on going throught with it. to learn more about updates regarding the war</p>
         <a href="https://www.washingtonpost.com/world/2022/06/22/russia-ukraine-war-news-live-updates/" class="btn">Learn More</a>
           
      </div>
      <div class="image">
         <img src="images/tank.jpg" alt="" width="100px">
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