<?php
require_once "conn.php";

if (isAuth()) {
	header("Location: index2.php");
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
          <ion-icon name="logo-youtube"></ion-icon> </a>

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
       <a href="login.php" class="btn btn-primary">Login</a>
     </div>
   </div>
 </header>
 <main>
   <article>

      <!---HERO-->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Hello, Welcome to Wanderlust</h2>

          <p class="hero-text">
            "Discover the Beauty, Embrace the Adventure: Wanderlust - Your Ultimate Guide to Indonesian Destinations!"
          </p>
        </div>
      </section>

 <!--- DESTINATION -->

 <section class="popular" id="destination">
        <div class="container">
          <p class="section-subtitle">Uncover place</p>
          <h2 class="h2 section-title">Popular destination</h2>
          <p class="section-text">
            Embark on an Unforgettable Journey to Indonesia's Top Destinations
          </p>

          <ul class="popular-list">
           <li>
              <div class="popular-card">
                <figure class="card-img">
                  <img src="./assets/images/borobudur.png" alt="Candi Borobudur, Magelang" loading="lazy">
                </figure>
                <div class="card-content">
                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                  <p class="card-subtitle">
                    <a href="#">Magelang</a>
                  </p>
                  <h3 class="h3 card-title">
                    <a href="#">Borobudur Temple</a>
                  </h3>
                  <p class="card-text">
                    Capture the Tranquil Charm of Borobudur Temple.
                  </p>
                </div>
              </div>
            </li>

             <!--- DESTINATION 2 -->
            <li>
              <div class="popular-card">
                <figure class="card-img">
                  <img src="./assets/images/uluwatu.png" alt="Uluwatu, Bali" loading="lazy">
                </figure>
                <div class="card-content">
                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                  <p class="card-subtitle">
                    <a href="#">Bali</a>
                  </p>
                  <h3 class="h3 card-title">
                    <a href="#">Uluwatu Temple</a>
                  </h3>
                  <p class="card-text">
                    Discover the Breathtaking Beauty of Uluwatu.
                  </p>
                </div>
              </div>
            </li>

             <!--- DESTINATION 3 -->
            <li>
              <div class="popular-card">
                <figure class="card-img">
                  <img src="./assets/images/tanahlot.png" alt="Tanah Lot, Bali" loading="lazy">
                </figure>
                <div class="card-content">
                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <p class="card-subtitle">
                    <a href="#">Bali</a>
                  </p>
                  <h3 class="h3 card-title">
                    <a href="#">Tanah Lot</a>
                  </h3>
                  <p class="card-text">
                    Explore the Enchanting Beauty of Tanah Lot Bali.
                  </p>
                </div>
              </div>
            </li>
            <a href="destination.php">
                <button class="btn btn-secondary">See More</button>
               </a>
            </div>
          </div>
        </li>

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
          <a href="package.php">
            <button class="btn btn-primary">More Packages</button>
          </a>
        </li>
      </section>

  <!---Service-->
  <section class="services" id="services">
    <div class="container">
  
      <p class="section-subtitle">What We Offer</p>
  
      <h2 class="h2 section-title">Our Services</h2>
  
      <p class="section-text">
        Explore the range of services we provide to make your travel experience exceptional.
      </p>
  
      <ul class="services-list">
        <li>
          <div class="service-card">
            <ion-icon name="bed-outline" class="service-icon"></ion-icon>
            <h3 class="h3 service-title">Accommodation</h3>
            <p class="service-text">Our accommodation services provide the best convenience and comfort in your trip.</p>
          </div>
        </li>
        <li>
          <div class="service-card">
            <ion-icon name="car-outline" class="service-icon"></ion-icon>
            <h3 class="h3 service-title">Transportation</h3>
            <p class="service-text">Arrange transportation options for a smooth and convenient travel experience.</p>
          </div>
        </li>
        <li>
          <div class="service-card">
            <ion-icon name="restaurant-outline" class="service-icon"></ion-icon>
            <h3 class="h3 service-title">Dining</h3>
            <p class="service-text">Discover the best dining options and indulge in local and international cuisines.</p>
          </div>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <section class="team" id="team">
    <div class="container">
      <p class="section-subtitle">Meet</p>
      <h3 class="h3 section-title">Our Team</h3>
      <p class="section-text">
      Here, we will introduce our great and talented team members.
      </p>
      <div class="team-member">
        <div class="member-card">
          <img class="member-avatar" src="./assets/images/kenny.png" alt="Member Avatar">
          <div class="member-details">
            <h3 class="member-name">Kenny Lawson</h3>
            <p class="member-position">Founder</p>
          </div>
        </div>
        <div class="member-card">
          <img class="member-avatar" src="./assets/images/rhauma.png" alt="Member Avatar">
          <div class="member-details">
            <h3 class="member-name">Rhauma Syira</h3>
            <p class="member-position">Manager</p>
          </div>
      </div>
        <div class="member-card">
          <img class="member-avatar" src="./assets/images/deby.png" alt="Member Avatar">
          <div class="member-details">
            <h3 class="member-name">Deby Fitria</h3>
            <p class="member-position">HRD</p>
          </div>
        </div>
        <div class="member-card">
          <img class="member-avatar" src="./assets/images/sabrina.png" alt="Member Avatar">
          <div class="member-details">
            <h3 class="member-name">Sabrina Fajrul</h3>
            <p class="member-position">Travel Consultant</p>
          </div>
        </div>
        <div class="member-card">
          <img class="member-avatar" src="./assets/images/aurel.png" alt="Member Avatar">
          <div class="member-details">
            <h3 class="member-name">Almira Aurelia</h3>
            <p class="member-position">Public Relations</p>
          </div>
      </div>
    </section>
  </body>
  </html>
  

      <!--GALLERY-->
      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo from Traveler: Capturing Moments, Unveiling Stories</h2>

          <p class="section-text">
          Explore the world through the lens of a traveler's camera. Witness breathtaking landscapes, vibrant cultures, and unforgettable experiences. 
          Each photo tells a unique tale, inviting you to join the journey and create your own remarkable memories. 
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/1.png" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/2.png" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/3.png" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/4.png" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/5.png" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>

      <!--CTA-->
      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            <p class="section-text">
            Explore Indonesia's Wonders Now: Start Your Adventure with Wanderlust!
            </p>
          </div>

          <button class="btn btn-secondary">Contact Us !</button>

        </div>
      </section>

    </article>
  </main>

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