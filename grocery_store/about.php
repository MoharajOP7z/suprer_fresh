<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Our store offers the unique opportunity to sell your fresh farm born product to farmer and gives a satisfying cost of product that satisfies their purchasing criteria.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>We provides groceries as well as meat, fish, dairy. We deliver the fresh products from farm to kitchen without the middle man.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="./images/group_photo/tei.jpeg" alt="">
         <p>Welcome to SUPPER FRESH Family. I'm Tridibesh Debnath. If you will get healthy & inexpensive daily basis sustenance, then this is your correct choice.So order anything's as early as possible according to your requirment.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tridibesh DebNath</h3>
      </div>

      <div class="box">
         <img src="./images/group_photo/smt.jpeg" alt="">
         <p>This online site so great guys , if u are looking for good, organic and fresh fruit don't think twice just placed your order here... There delivery service also great whithin 24 hours they deliver your item...
I love this and also recommend all of u guys </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sumit Podder</h3>
      </div>

      <div class="box">
         <img src="./images/group_photo/jeet 2.png" alt="">
         <p>Choose your favourite froots and fresh item directly your kitchen from   there . Eat good Live good.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jeet Mujumder</h3>
      </div>

      <div class="box">
         <img src="./images/group_photo/sum.jpeg" alt="">
         <p>If you have never shopped online, I would suggest you to take time and place an order with SUPER FRESH and see. You will not be disappointed with what they have to offer - Mr. Suman Ghosh</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr. Suman Ghosh</h3>
      </div>

      <div class="box">
         <img src="./images/group_photo/san.jpeg" alt="">
         <p>SUPER FRESH has developed a network of small farmers across India. We provided these farmers mentoring and direct access to the market, thus providing them better value for their produce and improving their curricullam.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sandipan Pradhan</h3>
      </div>

      <div class="box">
         <img src="./images/pic-1.png" alt="">
         <p>Do Your Best!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Elite Squart</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>