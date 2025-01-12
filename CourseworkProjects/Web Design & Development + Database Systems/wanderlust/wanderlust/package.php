<?php 
require_once "conn.php";

if (!isAuth()) {
	header("Location: login.php");
	exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Wanderlust - Travel agancy</title>
 <!---favicon-->
 <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

 <!--- custom css link-->
 <link rel="stylesheet" href="./assets/css/style.css">

 <!---google font link-->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link
   href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
   rel="stylesheet">
</head>
<body id="top">

  

 <!---HEADER -->

 <header class="header" data-header>

<div class="overlay" data-overlay></div>

<div class="header-top">
  <div class="container">

    <a href="tel:02133398" class="helpline-box">

      <div class="icon-box">
        <ion-icon name="call-outline"></ion-icon>
      </div>

      <div class="wrapper">
        <p class="helpline-title">For Further Inquires :</p>

        <p class="helpline-number">021-333-981</p>
      </div>

    </a>
    </div>
  </div>
</div>
<div class="header-bottom">
  <div class="container">
    <ul class="social-list">
      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>
      <li>
      <a href="https://www.youtube.com/embed/GqqveQqcQUo" class="social-link">
          <ion-icon name="logo-youtube"></ion-icon>
        </a>
      </li>
    </ul>
    <nav class="navbar" data-navbar>
      <div class="navbar-top">

        <a href="#" class="logo">
          <img src="./assets/images/logo.png" alt="Wande logo">
        </a>
        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>
      <ul class="navbar-list">
        <li>
          <a href="index.php" class="navbar-link" data-nav-link>home</a>
        </li>
        <li>
          <a href="destination.php" class="navbar-link" data-nav-link>destination</a>
        </li>
        <li>
          <a href="package.php" class="navbar-link" data-nav-link>packages</a>
        </li>
      </ul>
</nav>
  </div>
</div>
</header>
<main>
<article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Let's Book Your Destination Now</h2>

          <p class="hero-text">
            Discover Your Adventure with Wanderlust
          </p>

        </div>
      </section>

       <!--PACKAGE-->

       <section class="package" id="package">
        <div class="container">
          <p class="section-subtitle">Popular Packeges</p>
          <h2 class="h2 section-title">Checkout Our Packeges</h2>
          <p class="section-text">
            Embrace wanderlust and explore captivating destinations.
          </p>

          <ul class="package-list">
            <li>
              <div class="package-card">
                <figure class="card-banner">
                  <img src="./assets/images/packageWaerebo.png" alt="Wae Rebo Village" loading="lazy">
                </figure>

         <!--Package 1-->
         <div class="card-content">
              <h3 class="h3 card-title">Wae Rebo Village</h3>
              <p class="card-text">
                Escape to Wae Rebo Village and discover a hidden paradise. 
                Immerse yourself in nature, embrace the rich culture, and create unforgettable memories!
              </p>
              <ul class="card-meta-list">
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="time"></ion-icon>
                    <p class="text">5D/4N</p>
                  </div>
                </li>
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="people"></ion-icon>
                    <p class="text">pax: 8</p>
                  </div>
                </li>
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="location"></ion-icon>
                    <p class="text">East Nusa Tenggara</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-price">
              <div class="wrapper">
                <p class="reviews">132 reviews</p>
                <div class="card-rating">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>
              </div>
              <p class="price">
                3.500.000
                <span>/ per person</span>
              </p>
              <a href="booking.php">
                <button class="btn btn-secondary">See More</button>
               </a>
            </div>
          </div>
        </li>

        <!--Package 2-->
        <li>
          <div class="package-card">
            <figure class="card-banner">
              <img src="./assets/images/packageDiving.png" alt="Diving in Nusa Penida Bali" loading="lazy">
            </figure>
            <div class="card-content">
              <h3 class="h3 card-title">Diving in Nusa Penida</h3>
              <p class="card-text">
                Swim alongside majestic manta rays, encounter graceful sea turtles, and be mesmerized by the colorful tropical fish. Whether you're a beginner or an experienced diver, 
                Nusa Penida offers an unforgettable diving adventure. Join us and dive into the beauty of Nusa Penida!"
              </p>

              <ul class="card-meta-list">
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="time"></ion-icon>
                    <p class="text">3D/2N</p>
                  </div>
                </li>

                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="people"></ion-icon>
                    <p class="text">pax: 6</p>
                  </div>
                </li>
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="location"></ion-icon>
                    <p class="text">Bali</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-price">
              <div class="wrapper">
                <p class="reviews">20 reviews</p>
                <div class="card-rating">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>
              </div>
              <p class="price">
                7.750.000
                <span> </span>
              </p>
              <a href="booking.php">
                <button class="btn btn-secondary">See More</button>
               </a>
            </div>
          </div>
        </li>

        <!--Package 3-->
        <li>
          <div class="package-card">
            <figure class="card-banner">
              <img src="./assets/images/packageRajaAmpat.png" alt="Raja Ampat" loading="lazy">
            </figure>
            <div class="card-content">
              <h3 class="h3 card-title">Raja Ampat</h3>
              <p class="card-text">
                Embark on an extraordinary journey to Raja Ampat, a tropical paradise like no other. 
                Immerse yourself in the breathtaking beauty of crystal-clear turquoise waters,
                pristine white-sand beaches, and vibrant coral reefs teeming with marine life.
              </p>
              <ul class="card-meta-list">
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="time"></ion-icon>
                    <p class="text">7D/6N</p>
                  </div>
                </li>
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="people"></ion-icon>
                    <p class="text">pax: 10</p>
                  </div>
                </li>
                <li class="card-meta-item">
                  <div class="meta-box">
                    <ion-icon name="location"></ion-icon>
                    <p class="text">Papua</p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-price">
              <div class="wrapper">
                <p class="reviews">32 reviews</p>
                <div class="card-rating">
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                  <ion-icon name="star"></ion-icon>
                </div>
              </div>
              <p class="price">
                23.500.000
                <span></span>
              </p>
              <a href="booking.php">
                <button class="btn btn-secondary">See More</button>
               </a>
            </div>
          </div>
        </li>

            <!--Package 4-->
              <li>
                <div class="package-card">
                  <figure class="card-banner">
                    <img src="./assets/images/packageBromo.png" alt="Mt.Bromo" loading="lazy">
                  </figure>
                  <div class="card-content">
                    <h3 class="h3 card-title">Mt. Bromo</h3>
                    <p class="card-text">
                    Embark on an unforgettable adventure to witness the breathtaking beauty of Mount Bromo.
                    </p>
                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="time"></ion-icon>
                          <p class="text">4D/3N</p>
                        </div>
                      </li>
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="people"></ion-icon>
                          <p class="text">pax: 7</p>
                        </div>
                      </li>
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="location"></ion-icon>
                          <p class="text">Malang</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="card-price">
                    <div class="wrapper">
                      <p class="reviews">62 reviews</p>
                      <div class="card-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </div>
                    <p class="price">
                      2.000.000
                      <span></span>
                    </p>
                    <a href="deskripsi.php?id=6">
                        <button class="btn btn-secondary">See More</button>
                       </a>
                  </div>
                </div>
              </li>
        </ul>
        </div>
      </section>
  <!---FOOTER-->
  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="./assets/images/wanderlust2.svg" alt="Tourly logo">
          </a>
          <p class="footer-text">
          Wanderlust, your gateway to unforgettable adventures in Indonesia! Let our experienced guides take you on a journey of discovery, where you can indulge in thrilling outdoor activities, savor delicious local cuisine, and create lifelong memories. 
          </p>
        </div>
        <div class="footer-contact">
          <h4 class="contact-title">Contact Us</h4>
          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>
          <ul>
            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>
              <a href="tel:021-333-981" class="contact-link">021-333-981</a>
            </li>
            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>
              <a href="mailto:wanderlustid@gmail.com" class="contact-link">wanderlustid@gmail.com</a>
            </li>
            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>
              <address>Kelapa Dua, Gading Serpong</address>
            </li>
          </ul>
        </div>
        <div class="footer-form">
          <p class="form-text">
            Subscribe our newsletter for more update & news !!
          </p>
          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>
            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2023 <a href="">Web Design Development</a>. All rights reserved
        </p>
        <ul class="footer-bottom-list">
          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>
          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>
          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>
  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

