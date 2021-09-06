<?php include('./include/db.php');
   ?>
<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Rouiha Ayoub</title>
      <meta content="je suis Développeur Full Stack" name="description">
      <meta content="web development,php development" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/icons8-computer-support-64.png" rel="icon">
      <link href="assets/img/icons8-computer-support-64.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
      <link href="assets/vendor/aos/aos.css" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
      <style>
         #hero {
         background: url(assets/img/164632.jpg);
         }
      </style>
   </head>
   <body>
      <!-- ======= Mobile nav toggle button ======= -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
      <!-- ======= Header ======= -->
      <header id="header">
         <div class="d-flex flex-column">
            <div class="profile">
               <img src="assets/img/0P9A5405.jpg" alt="" class="img-fluid rounded-circle">
               <h1 class="text-light"><a href="#">Rouiha Ayoub</a></h1>
               <div class="social-links mt-3 text-center">
                  <a href="https://www.facebook.com/profile.php?id=100021806631388" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/ayoub_rouiha9/" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/rouiha-ayoub-2505ba193/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  <a href="https://github.com/BlackDiamond-UX" class="github"><i class="bx bxl-github"></i></a>
               </div>
            </div>
            <nav class="nav-menu">
               <ul>
                  <li class=""><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
                  <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                  <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                  <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
                  <li><a href="http://localhost/Fill_Rouge/admin" target="_blank"><i class="bx bx-lock"></i> <span>Login</span></a></li>
                  <a href="assets\cv\Nouveau CV ROUIHA AYOUB.pdf"class="btn btn-primary">Download Cv</a>
               </ul>
            </nav>
            <!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
         </div>
      </header>
      <!-- End Header -->
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
         <div class="hero-container" data-aos="fade-in">
            <h1>Rouiha Ayoub</h1>
            <p>I'm <span class="typed" data-typed-items="Developpeur Full Stack"></span></p>
         </div>
      </section>
      <!-- End Hero -->
      <main id="main">
         <!-- ======= About Section ======= -->
         <section id="about" class="about">
            <div class="container">
               <div class="section-title">
                  <h2>About&Skills</h2>
                  <p>Je suis une personne ambitieuse qui a développé une approche mature et responsable de toute tâche que j'entreprends basé de la situation à laquelle j'y suis confronté. En tant que diplômé avec deux ans d'expérience dans le développement web, j'ai acquis un excellent niveau en gestion de projet avec la méthode agile. Je me suis aussi habitué à travailler en équipe afin d'atteindre un certain objectif avec excellence.</p>
               </div>
               <div class="row">
                  <div class="col-lg-4" data-aos="fade-right">
                     <img src="assets/img/0P9A5405.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                     <h3>UI/UX Designer & Développeur Full Stack</h3>
                     <p class="font-italic">
                        Je m'intéresse au domaine technique et à la programmation et à tout ce qui est nouveau dans la technologie. Je travaille également dans la maintenance d'ordinateurs et de téléphones. J'aime aussi faire de la programmation et de la modification de logiciels
                     </p>
                     <div>
                        <ul class="row">
                           <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> 22 August, 1995</li>
                           <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Email :</strong>  rouiha594@gmail.com></li>
                           <li class="col-lg-5"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> +212638458545</li>
                        </ul>
                     </div>
                     <p>
                        titulaire d'un baccalauréat, division économie et d'un diplôme de comptable contractuel, et je poursuis mes études dans une école de programmation et d'informatique.
                     </p>
                  </div>
               </div>
            </div>
         </section>
         <section id="skills" class="skills section-bg">
            <div class="container">
               <div class="row skills-content">
                  <div class="row col-lg-12" data-aos="fade-up">
                     <?php
                        $query3 = "SELECT * FROM skills";
                        $runquery3= mysqli_query($db,$query3);
                        while($data3=mysqli_fetch_array($runquery3)){
                        ?>
                     <div class="progress col-lg-6">
                        <span class="skill"><?=$data3['skill']?> <i class="val"><?=$data3['score']?>%</i></span>
                        <div class="progress-bar-wrap">
                           <div class="progress-bar" role="progressbar" aria-valuenow="<?=$data3['score']?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                     </div>
                     <?php
                        }
                                            ?>
                  </div>
               </div>
            </div>
         </section>
        <!-- End About Section -->
         <!-- ======= Facts Section ======= -->
         <!-- ======= Skills Section ======= -->
         <section id="portfolio" class="portfolio section-bg">
            <div class="container">
               <div class="section-title">
                  <h2>Portfolio</h2>
               </div>
               <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                  <?php
                     $query5 = "SELECT * FROM portfolio";
                     $runquery5= mysqli_query($db,$query5);
                     while($data5=mysqli_fetch_array($runquery5)){
                     ?>
                  <div class="col-lg-4 col-md-6 portfolio-item">
                     <div class="portfolio-wrap">
                        <img src="assets/img/<?=$data5['projectpic']?>" class="img-fluid" alt="">
                        <div class="portfolio-links" title="<?=$data5['projectname']?>">
                           <a href="assets/img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                           <a href="<?=$data5['projectlink']?>" target="_blank" title="Visit <?=$data5['projectname']?>"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <?php
                     }
                                         ?>
               </div>
            </div>
         </section>
         <!-- End Portfolio Section -->
         <!-- ======= Contact Section ======= -->
         <section id="contact" class="contact">
            <div class="container">
               <div class="section-title">
                  <h2>Contact</h2>
               </div>
               <div class="row" data-aos="fade-in">
                  <div class="col-lg-5 d-flex align-items-stretch">
                     <div class="info">
                        <div class="address">
                           <i class="icofont-google-map"></i>
                           <h4>Location:</h4>
                           <p>Quartier Agendiss Numero 443 Youssoufia</p>
                        </div>
                        <div class="email">
                           <i class="icofont-envelope"></i>
                           <h4>Email:</h4>
                           <p><a href="mailto:rouiha594@gmail.com">rouiha594@gmail.com</a></p>
                        </div>
                        <div class="phone">
                           <i class="icofont-phone"></i>
                           <h4>Call:</h4>
                           <p><a href="tel:+212638458545">+212638458545</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                     <form action="include/message.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                           <div class="form-group col-md-6">
                              <label for="name">Your Name</label>
                              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="name">Your Email</label>
                              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="name">Subject</label>
                           <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                           <div class="validate"></div>
                        </div>
                        <div class="form-group">
                           <label for="name">Message</label>
                           <textarea class="form-control" name="message" id="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                           <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                           <div class="loading">Loading</div>
                           <div class="bg-success error-message"></div>
                           <div class="sent-message"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Contact Section -->
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <footer id="footer">
         <div class="container">
            <div class="credits">
               Developed by Rouiha Ayoub</a>
            </div>
         </div>
      </footer>
      <!-- End  Footer -->
      <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
      <!-- Vendor JS Files -->
      <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="assets/vendor/counterup/counterup.min.js"></script>
      <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="assets/vendor/venobox/venobox.min.js"></script>
      <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="assets/vendor/typed.js/typed.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>