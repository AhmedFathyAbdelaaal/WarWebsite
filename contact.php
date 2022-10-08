<?php

include 'includes/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if($select_message->rowCount() > 0){
      $message[] = 'already sent message!';
   }else{

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>
    Us
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
            
            <h3 style="color: black">Have Any Questions?
              </h3>
            <span style="color: black">Contact us now.
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
            
                We would Love to hear from you regarind any issues you may face.
            <br>Make sure your message is concise and correct so we can further help you.
            <br>Expect a replay withing 2-3 Working Days
        </h3>
        <br>
    </section>

<section class="contact">

   <form action="" method="post">
       <h3>Contact Me</h3>
      <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;" class="box">
      <textarea name="msg" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

</section>



<?php include 'includes/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>