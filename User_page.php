<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Shoppie - Man summer collection</title>
  <meta name="title" content="Shoppie - Man summer collection">
  <meta name="description" content="This is an eCommerce html template made by codewithsadee">

  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/fonts/font.css">

  <link rel="stylesheet" href="./assets/css/style.css">

  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body>

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="132" height="27" alt="shoppie home">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="#h1" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="Portfolio.html" class="navbar-link">Portfolio</a>
          </li>

          <li>
            <a href="Blog.html" class="navbar-link">About-Us</a>
          </li>

          <li>
            <a href="#feature-label" class="navbar-link">Shop</a>
          </li>
          <li>
            <a href="delete.php" class="navbar-link">Delete</a>
          </li>

        </ul>

        <button class="cart-btn">
          <ion-icon name="bag" aria-hidden="true"></ion-icon>

          <span class="span">Cart (02)</span>
        </button>

        <a href="update.php" class="btn">Update</a>
      </nav>

      <button class="nav-open-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

      <div class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle title" id="h1">₹120.00</p>

            <h1 class="h1 hero-title title">Man summer <br> collection</h1>

            <p class="hero-text" >
              This is the factor that sets us apart from competition and allows us deliver a specialist business service
              team applies its ranging experience determining
            </p>

            <a href="#" class="btn btn-primary">
              <span class="span">Shop Now</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <div class="hero-banner">
            <figure class="img-holder" style="--width: 704; --height: 700;">
              <img src="./assets/images/hero-banner.png" width="704" height="700" alt="hero banner" class="img-cover">
            </figure>

            <img src="./assets/images/hero-shape-1.png" width="255" height="249" alt="shape" class="shape shape-1">
          </div>

          <img src="./assets/images/hero-shape-2.png" width="360" height="133" alt="shape" class="shape shape-2">

        </div>
      </div>

      <section class="section product" aria-label="product">
        <div class="container">

          <h2 class="h2 section-title title text-center">Explore new arrivals</h2>

          <ul class="product-list has-scrollbar">

            <li class="scrollbar-item">
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-1.png" width="448" height="470" loading="lazy"
                      alt="Short Sleeve Shirt" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">

                  <h3 class="h4 title">
                    <a href="#" class="card-title">Short Sleeve Shirt</a>
                  </h3>

                  <span class="price">₹170.00</span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-2.png" width="448" height="470" loading="lazy"
                      alt="Dead Sunglasses" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">

                  <h3 class="h4 title">
                    <a href="#" class="card-title">Dead Sunglasses</a>
                  </h3>

                  <span class="price">₹210.00</span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-3.png" width="448" height="470" loading="lazy"
                      alt="Studios Trouser" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">

                  <h3 class="h4 title">
                    <a href="#" class="card-title">Studios Trouser</a>
                  </h3>

                  <span class="price">₹90.00</span>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="section feature" aria-label="feature-label">
        <div class="container">

          <h2 class="h2 section-title title text-center" id="feature-label">Featured products</h2>

          <ul class="feature-list">

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-4.png" width="448" height="470" loading="lazy"
                      alt="Acne Baseball Cap" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Acne Baseball Cap</a>
                  </h3>

                  <span class="price">₹80.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-5.png" width="448" height="470" loading="lazy"
                      alt="Short Sleeve Shirt" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Short Sleeve Shirt</a>
                  </h3>

                  <span class="price">₹170.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-6.png" width="448" height="470" loading="lazy"
                      alt="Garcons Parfums" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Garcons Parfums</a>
                  </h3>

                  <span class="price">₹190.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-7.png" width="448" height="470" loading="lazy"
                      alt="Salomon Sneaker" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Salomon Sneaker</a>
                  </h3>

                  <span class="price">₹450.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-8.png" width="448" height="470" loading="lazy"
                      alt="Ribbed Beanie Hat" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Ribbed Beanie Hat</a>
                  </h3>

                  <span class="price">₹120.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/product-9.png" width="448" height="470" loading="lazy" alt="Acronym Khaki"
                      class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Acronym Khaki</a>
                  </h3>

                  <span class="price">₹220.00</span>
                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-secondary">View All Products</a>

        </div>
      </section>

      <section class="offer has-bg-image" style="background-image: url('./assets/images/offer-bg.png')">
        <div class="container">

          <div class="offer-card">

            <h2 class="title card-title">35% Off</h2>

            <p class="card-text">
              This is the main factor that sets us apart our competition and allows us deliver a specialist business
              consultancy service
            </p>

            <a href="#" class="btn btn-secondary">
              <span class="span">Shop Now</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </section>

    </article>
  </main>

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="132" height="27" loading="lazy" alt="shoppie home">
          </a>

          <p class="footer-text">
            Main factor that sets us apart competition allows deliver a specialist business consultancy service applies
            its ranging experience
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/umangorpadia21" class="social-link">
                <ion-icon name="logo-linkedin" ></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title title">Contact info</p>

            <address class="footer-text">
              Mumbai, Maharashtra <br>
              INDIA
            </address>
          </li>

          <li>
            <a href="mailto:info.shoppie@support.com" class="email">info.shoppie@support.com</a>
          </li>

          <li>
            <a href="tel:+00 123 456 789" class="call">+00 123 456 789</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title title">Subscribe newsletter</p>

          <input type="email" name="email_address" placeholder="Enter your email address" required autocomplete="off"
            class="input-field">

          <button class="btn btn-secondary">Subscribe</button>

        </div>

      </div>

      <div class="footer-bottom">

        <div class="wrapper">
          <div class="link-wrapper">

            <a href="#" class="footer-bottom-link">Portfolio</a>
            <a href="#" class="footer-bottom-link">Our Team</a>
            <a href="#" class="footer-bottom-link">Pricing Plan</a>
            <a href="#" class="footer-bottom-link">Services</a>
            <a href="#" class="footer-bottom-link">Contact Us</a>

          </div>

          <div class="link-wrapper">
            <a href="#" class="footer-bottom-link">Terms & Conditions</a>

            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </div>
        </div>

        <p class="copyright">
          &copy; 2022 umangorpadia, All Rights Reserved
        </p>

      </div>

      <img src="./assets/images/footer-shape-1.png" width="245" height="165" loading="lazy" alt="shape"
        class="shape shape-1">

      <img src="./assets/images/footer-shape-2.png" width="138" height="316" loading="lazy" alt="shape"
        class="shape shape-2">

      <img src="./assets/images/footer-shape-3.png" width="346" height="92" loading="lazy" alt="shape"
        class="shape shape-3">

    </div>
  </footer>

  <script src="./assets/js/script.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>