<?php

      include 'components/connect.php';

      if(isset($_COOKIE['user_id'])){
         $user_id = $_COOKIE['user_id'];
      }else{
         $user_id = '';
      }

      $select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
      $select_likes->execute([$user_id]);
      $total_likes = $select_likes->rowCount();

      $select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
      $select_comments->execute([$user_id]);
      $total_comments = $select_comments->rowCount();

      $select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
      $select_bookmark->execute([$user_id]);
      $total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>site salle de sport</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<!-- header section starts  -->
<header class="header fixed-top">

<div class="container">

   <div class="row align-items-center justify-content-between">

      <a href="#" class="logo"><span>SALLE-</span>SPORT</a>

      <nav class="nav">
         <a href="home.php">Acceuille</a>
         <a href="#">abonnement</a>
         <a href="about.php">liste des Partenaires </a>
         <a href="about.php">Page admin</a>
         <a href="login.php">Se connecter</a>

      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

   <div class="side-bar">
   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

  

</div>
<!--<?php
               $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
               $select_profile->execute([$user_id]);
               if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
            <img class="img" src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">

            <?php
               }else{
            ?>
            <?php
               }
         ?>
 -->


</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row align-items-center min-vh-100">

         <div class="col-md-6">
            <img src="images/home-img.png" class="w-100" alt="">
         </div>

         <div class="col-md-6 text-center text-md-left">
            <span>retour au gymnase</span>
            <h3>commencez dès aujourd'hui votre voyage de remise en forme</h3>
            <a href="#" class="link-btn">Commencez</a>
         </div>

      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center flex-wrap-reverse">

         <div class="col-md-6">
            <span>à propos de nous</span>
            <h3>Entraînement quotidien et rester actif à la maison</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus quae inventore molestiae accusamus facere ducimus, magni quidem cumque debitis sed beatae totam, culpa dolore voluptatum incidunt hic quia, mollitia fugit?</p>
            <ul>
               <li> <i class="far fa-check-square"></i> Comment soutenir votre système immunitaire </li>
               <li> <i class="far fa-check-square"></i>Un guide des défis de remise en forme et d'entraînement sur 30 jours</li>
               <li> <i class="far fa-check-square"></i>Guide pour soulager votre dos dans la salle de sport</li>
               <li> <i class="far fa-check-square"></i>Les bienfaits de l'exercice à domicile sur la santé mentale</li>
            </ul>
         </div>

         <div class="col-md-6">
            <img src="images/about-img.png" class="w-100" alt="">
         </div>   

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- counter section starts  -->

<section class="counter">

   <div class="container box-container">

      <div class="box">
         <h3>40+</h3>
         <p>cours en ligne</p>
      </div>

      <div class="box">
         <h3>320+</h3>
         <p>équipements de gym</p>
      </div>

      <div class="box">
         <h3>180+</h3>
         <p>instructeurs en ligne</p>
      </div>

      <div class="box">
         <h3>560+</h3>
         <p>des clients satisfaits</p>
      </div>

   </div>

</section>

<!-- counter section ends -->

<!-- courses section starts  -->

<section class="courses" id="courses">

   <div class="heading">
      <span>Nos cours</span>
      <h3>Nos derniers cours</h3>
   </div>

   <div class="box-container container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <div class="icons">
               <span> <i class="fas fa-calendar"></i> lundi au samedi </span>
               <span> <i class="fas fa-clock"></i> 2heures</span>
            </div>
            <h3>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression</h3>
            <a href="#" class="link-btn">en savoir plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>  lundi au samedi </span>
               <span> <i class="fas fa-clock"></i> 1 heure </span>
            </div>
            <h3>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression</h3>
            <a href="#" class="link-btn">en savoir plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <div class="icons">
               <span> <i class="fas fa-calendar"></i> lundi au samedi </span>
               <span> <i class="fas fa-clock"></i> 4 heures </span>
            </div>
            <h3>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression</h3>
            <a href="#" class="link-btn">en savoir plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-4.jpg" alt="">
         </div>
         <div class="content">
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>  lundi au samedi  </span>
               <span> <i class="fas fa-clock"></i> 1 heure </span>
            </div>
            <h3>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression</h3>
            <a href="#" class="link-btn">en savoir plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-5.jpg" alt="">
         </div>
         <div class="content">
            <div class="icons">
               <span> <i class="fas fa-calendar"></i>  lundi au samedi  </span>
               <span> <i class="fas fa-clock"></i>3 heures </span>
            </div>
            <h3>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression</h3>
            <a href="#" class="link-btn">en savoir plus</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-6.jpg" alt="">
         </div>
         <div class="content">
            <div class="icons">
               <span> <i class="fas fa-calendar"></i> lundi au samedi </span>
               <span> <i class="fas fa-clock"></i> 1 heure </span>
            </div>
            <h3>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression</h3>
            <a href="#" class="link-btn">en savoir plus</a>
         </div>
      </div>

   </div>

</section>

<!-- courses section ends -->

<!-- pricint section starts  -->

<section class="pricing" id="pricing">

   <div class="heading">
      <span>choisir un Tarif</span>
      <h3>trouver un plan parfait</h3>
   </div>

   <div class="box-container container">

      <div class="box">
         <h3>plan de base</h3>
         <div class="price">30e<span>/m</span></div>
         <a href="#" class="link-btn">choisir le plan</a>
         <div class="list">
            <p> <i class="fas fa-check"></i> formation personnelle </p>
            <p> <i class="fas fa-check"></i> cours par semaine </p>
            <p> <i class="fas fa-check"></i> accès à la salle de sport </p>
            <p> <i class="fas fa-times"></i> poudre de protide </p>
            <p> <i class="fas fa-times"></i> adhésion </p>
         </div>
      </div>

      <div class="box">
         <h3> adhésion premium </h3>
         <div class="price">60e<span>/m</span></div>
         <a href="#" class="link-btn">choisir le plan</a>
         <div class="list">
            <p> <i class="fas fa-check"></i> formation personnelle </p>
            <p> <i class="fas fa-check"></i> cours par semaine </p>
            <p> <i class="fas fa-check"></i> accès à la salle de sport </p>
            <p> <i class="fas fa-check"></i> poudre de protide </p>
            <p> <i class="fas fa-times"></i> adhésion </p>
         </div>
      </div>

      <div class="box">
         <h3>ultimate </h3>
         <div class="price">90e<span>/m</span></div>
         <a href="#" class="link-btn">choisir le plan</a>
         <div class="list">
            <p> <i class="fas fa-check"></i> formation personnelle </p>
            <p> <i class="fas fa-check"></i> cours par semaine </p>
            <p> <i class="fas fa-check"></i> accès à la salle de sport </p>
            <p> <i class="fas fa-check"></i> poudre de protide </p>
            <p> <i class="fas fa-check"></i> adhésion </p>
         </div>
      </div>

   </div>

</section>


<!-- pricint section ends -->

<!-- join us section starts  -->

<section class="join">

   <div class="container">

      <div class="row align-items-center">
         <div class="col-md-7">
            <img src="images/join-us-image.png" class="w-100" alt="">
         </div>
         <div class="col-md-5 text-center text-md-left">
            <span>rejoignez-nous maintenant</span>
            <h3>rejoignez-nous et obtenez jusqu'à 50 % de réduction</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error sint aut alias eligendi odit repudiandae laudantium voluptates quos officia quis?</p>
            <a href="#" class="link-btn">rejoindre maintenant</a>
         </div>
      </div>

   </div>

</section>

<!-- join us section ends -->

<!-- team section starts  -->

<section class="team" id="team">

   <div class="heading">
      <span>notre équipe</span>
      <h3>rencontrer l'équipe d'experts</h3>
   </div>

   <div class="box-container container">

      <div class="box">
         <img src="images/team-1.jpg" alt="">
         <div class="content">
            <span>entraîneur de gymnastique</span>
            <h3>entraineur</h3>
         </div>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-2.jpg" alt="">
         <div class="content">
            <span>entraîneur de gymnastique</span>
            <h3>entraineur</h3>
         </div>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <img src="images/team-3.jpg" alt="">
         <div class="content">
            <span>entraîneur de gymnastique</span>
            <h3>entraineur</h3>
         </div>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
      </div>

   </div>

</section>

<!-- team section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

   <div class="heading">
      <span>nos blogs</span>
      <h3>nos messages quotidiens</h3>
   </div>

   <div class="box-container container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <a href="#" class="link">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21 mai, 2022 </span>
               <span> <i class="fas fa-user"></i> par admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <a href="#" class="link">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21 mai, 2022 </span>
               <span> <i class="fas fa-user"></i> par admin </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <a href="#" class="link">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.</a>
            <div class="icons">
               <span> <i class="fas fa-calendar"></i> 21 mai, 2022 </span>
               <span> <i class="fas fa-user"></i> par admin </span>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- blogs section ends -->


<!-- footer section starts  -->
<section class="footer">

   <div class="box-container container">

      <div class="box">
         <h3>liens rapides</h3>
         <a href="#home"> <i class="fas fa-angle-right"></i> home</a>
         <a href="#about"> <i class="fas fa-angle-right"></i> about</a>
         <a href="#courses"> <i class="fas fa-angle-right"></i> courses</a>
         <a href="#pricing"> <i class="fas fa-angle-right"></i> pricing</a>
         <a href="#team"> <i class="fas fa-angle-right"></i> team</a>
         <a href="#blogs"> <i class="fas fa-angle-right"></i> blogs</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> 06 52 47 00 11  </a>
         <a href="#"> <i class="fas fa-phone"></i>  06 52 47 00 11 </a>
         <a href="#"> <i class="fas fa-envelope"></i> idrisakome98@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> oyonnax france 01100 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

      <div class="box">
         <h3>INFORMATION</h3>
         <p>s'abonner pour les dernières mises à jour</p>
         <form action="">
            <input type="email" name="" placeholder="entrer votre email" id="" class="email">
            <input type="submit" value="ENVOYEZ" class="link-btn">
         </form>
      </div>

   </div>

   <p class="credit"> CREER PAR <span>MR.IDRISSA KOME</span></p>

</section>
<!-- footer section ends -->







<!-- custom js file link     -->
<script src="js/scripts.js"></script>
   
</body>
</html>