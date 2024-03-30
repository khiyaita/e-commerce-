

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Accueil</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
   


<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>jusqu'à 50% de réduction</span>
            <h3>derniers smartphones</h3>
            <a href="shop.php" class="btn">acheter maintenant</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <span>jusqu'à 50% de réduction</span>
            <h3>dernières montres</h3>
            <a href="shop.php" class="btn">acheter maintenant</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>jusqu'à 50% de réduction</span>
            <h3>derniers casques</h3>
            <a href="shop.php" class="btn">acheter maintenant</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">acheter par catégorie</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=ordinateur portable" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>ordinateur portable</h3>
   </a>

   <a href="category.php?category=télévision" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>télévision</h3>
   </a>

   <a href="category.php?category=appareil photo" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>appareil photo</h3>
   </a>

   <a href="category.php?category=souris" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
     

 <h3>souris</h3>
   </a>

   <a href="category.php?category=réfrigérateur" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>réfrigérateur</h3>
   </a>

   <a href="category.php?category=machine à laver" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>machine à laver</h3>
   </a>

   <a href="category.php?category=smartphone" class="swiper-slide slide">
      <img src="images/icon-7.png" alt="">
      <h3>smartphone</h3>
   </a>

   <a href="category.php?category=montre" class="swiper-slide slide">
      <img src="images/icon-8.png" alt="">
      <h3>montre</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
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
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
