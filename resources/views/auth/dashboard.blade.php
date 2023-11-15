@extends('auth.layouts')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <header id="header">
        <div class="overlay overlay-lg">
          <img src="./img/shapes/square.png" class="shape square" alt="" />
          <img src="./img/shapes/circle.png" class="shape circle" alt="" />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle1"
            alt=""
          />
          <img
            src="./img/shapes/half-circle.png"
            class="shape half-circle2"
            alt=""
          />
          <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
          <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
          <img src="./img/shapes/letters.png" class="letters" alt="" />
          <img src="./img/shapes/points1.png" class="points points1" alt="" />
        </div>

        <nav>
          <div class="container">
            <div class="logo">
              <img src="./img/logo.png" alt="" />
            </div>

            <div class="links">
              <ul>
                <li>
                  <a href="#header">Home</a>
                </li>
                <li>
                  <a href="#services">Services</a>
                </li>
                <li>
                  <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                  <a href="#about">About</a>
                </li>
                <li>
                  <a href="#testimonials">Testimonials</a>
                </li>
                <li>
                  <a href="#contact">Contact</a>
                </li>
                <li>
                  <a href="#hireme">Hire me</a>
                </li>
                <li>
                  <a href="{{ route('gallery.index') }}" >Gallery</a>
                </li>
              </ul>
            </div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </nav>

        <div class="header-content">
          <div class="container grid-2">
            <div class="column-1">
              <h1 class="header-title">Resanti Dwi Cahyani</h1>
              <p class="text">
                Hello, I'm Resanti, web design and developer.
              </p>
              <a href="#" class="btn">Download CV</a>
            </div>

            <div class="column-2 image">
              <img
                src="./img/shapes/points2.png"
                class="points points2"
                alt=""
              />
              <img src="img/fotoresa2.png" class="img-element z-index" alt="" />
            </div>
          </div>
        </div>
      </header>

      <section class="services section" id="services">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="What I Do">Services</h3>
            <p class="text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias,
              vero?
            </p>
          </div>

          <div class="cards">
            <div class="card-wrap">
              <img
                src="./img/shapes/points3.png"
                class="points points1 points-sq"
                alt=""
              />
              <div class="card" data-card="UI/UX">
                <div class="card-content z-index">
                  <img src="./img/design-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Design</h3>
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
                    est suscipit itaque?
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <div class="card" data-card="Code">
                <div class="card-content z-index">
                  <img src="./img/code-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">Web Development</h3>
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolores suscipit nobis dolore?
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="card-wrap">
              <img
                src="./img/shapes/points3.png"
                class="points points2 points-sq"
                alt=""
              />
              <div class="card" data-card="App">
                <div class="card-content z-index">
                  <img src="./img/app-icon.png" class="icon" alt="" />
                  <h3 class="title-sm">App Development</h3>
                  <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptatum hic veniam nihil.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="portfolio section" id="portfolio">
        <div class="background-bg">
          <div class="overlay overlay-sm">
            <img
              src="./img/shapes/half-circle.png"
              class="shape half-circle1"
              alt=""
            />
            <img
              src="./img/shapes/half-circle.png"
              class="shape half-circle2"
              alt=""
            />
            <img src="./img/shapes/square.png" class="shape square" alt="" />
            <img src="./img/shapes/wave.png" class="shape wave" alt="" />
            <img src="./img/shapes/circle.png" class="shape circle" alt="" />
            <img
              src="./img/shapes/triangle.png"
              class="shape triangle"
              alt=""
            />
            <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          </div>
        </div>

        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="My works">Portfolio</h3>
          </div>

          <div class="section-body">
            <div class="filter">
              <button class="filter-btn active" data-filter="*">All</button>
              <button class="filter-btn" data-filter=".ui">UI/UX</button>
              <button class="filter-btn" data-filter=".webdev">Web Dev</button>
              <button class="filter-btn" data-filter=".appdev">
                Mobile App
              </button>
              <button class="filter-btn" data-filter=".logo-design">
                Logo Design
              </button>
            </div>

            <div class="grid">
              <div class="grid-item logo-design">
                <div class="gallery-image">
                  <img src="./img/portfolio/port1.jpg" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Logo Design</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item webdev">
                <div class="gallery-image">
                  <img src="./img/portfolio/port2.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Web Development</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item ui webdev">
                <div class="gallery-image">
                  <img src="./img/portfolio/port3.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Web Design</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item ui">
                <div class="gallery-image">
                  <img src="./img/portfolio/port4.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>UI / UX Design</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item logo-design">
                <div class="gallery-image">
                  <img src="./img/portfolio/port5.jpg" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Logo Design</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item appdev">
                <div class="gallery-image">
                  <img src="./img/portfolio/port6.jpg" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>App Development</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item logo-design">
                <div class="gallery-image">
                  <img src="./img/portfolio/port7.jpg" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Logo Design</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item appdev ui">
                <div class="gallery-image">
                  <img src="./img/portfolio/port8.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>App Development</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item ui webdev">
                <div class="gallery-image">
                  <img src="./img/portfolio/port9.png" alt="" />
                  <div class="img-overlay">
                    <div class="plus"></div>
                    <div class="img-description">
                      <h3>Web Design</h3>
                      <h5>View Demo</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="more-folio">
              <a href="#" class="btn">More Folio</a>
            </div>
          </div>
        </div>
      </section>

      <section class="about section" id="about">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Who Am I">About me</h3>
          </div>

          <div class="section-body grid-2">
            <div class="column-1">
              <h3 class="title-sm">Hello, I'm Resanti</h3>
              <p class="text">
                Seorang mahasiswa Perangkat Lunak yang mencoba menggali lebih dalam dunia website. 
                Dengan bermodalkan kemampuan yang terus bertambah, maka akan ku terjang semua rintangan. 
              </p>
              <div class="skills">
                <div class="skill html">
                  <h3 class="skill-title">HTML</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="90%"></div>
                  </div>
                </div>
                <div class="skill css">
                  <h3 class="skill-title">CSS</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="70%"></div>
                  </div>
                </div>
                <div class="skill js">
                  <h3 class="skill-title">JavaScript</h3>
                  <div class="skill-bar">
                    <div class="skill-progress" data-progress="80%"></div>
                  </div>
                </div>
              </div>
              <a href="#" class="btn">Read more</a>
            </div>

            <div class="column-2 image">
              <img src="./img/shapes/points4.png" class="points" alt="" />
              <img src="./img/about.png" class="z-index" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="records">
        <div class="overlay overlay-sm">
          <img src="./img/shapes/square.png" alt="" class="shape square1" />
          <img src="./img/shapes/square.png" alt="" class="shape square2" />
          <img src="./img/shapes/circle.png" alt="" class="shape circle" />
          <img
            src="./img/shapes/half-circle.png"
            alt=""
            class="shape half-circle"
          />
          <img src="./img/shapes/wave.png" alt="" class="shape wave wave1" />
          <img src="./img/shapes/wave.png" alt="" class="shape wave wave2" />
          <img src="./img/shapes/x.png" alt="" class="shape xshape" />
          <img src="./img/shapes/triangle.png" alt="" class="shape triangle" />
        </div>

        <div class="container">
          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="1">0</h2>
              <h4 class="sub-title">Projects</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle active">
              <h2 class="number" data-num="0">0</h2>
              <h4 class="sub-title">Happy Clients</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="0">0</h2>
              <h4 class="sub-title">Work Hour</h4>
            </div>
          </div>

          <div class="wrap">
            <div class="record-circle">
              <h2 class="number" data-num="0">0</h2>
              <h4 class="sub-title">Awards</h4>
            </div>
          </div>
        </div>
      </section>

      <section class="blog section">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="Last News">My blog</h3>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo,
              deserunt?
            </p>
          </div>

          <div class="blog-wrapper">
            <div class="blog-wrap">
              <img
                src="./img/shapes/points3.png"
                alt=""
                class="points points-sq"
              />

              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog1.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">March, 19 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum, dolor sit amet elit. rem poimus? Tempora
                    expedita eos autem! Lorem ipsum, dolor sit met.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="blog-wrap">
              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog2.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">August, 02 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum, dolor sit amet elit. Sint atque culpa repellat
                    sunt sit amet nobis! Lorem ipsum dolor sit amet.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>

            <div class="blog-wrap">
              <div class="blog-card">
                <div class="blog-image">
                  <img src="./img/blog3.png" alt="" />
                </div>

                <div class="blog-content">
                  <div class="blog-info">
                    <h5 class="blog-date">December, 12 2020</h5>
                    <h5 class="blog-user"><i class="fas fa-user"></i>Admin</h5>
                  </div>
                  <h3 class="title-sm">This is a short title</h3>
                  <p class="blog-text">
                    Lorem ipsum dolor sit, amet elit. enim numquam, laborum
                    earum? Lorem ipsum dolor sit amet.
                  </p>
                  <a href="#" class="btn small">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials section" id="testimonials">
        <div class="container">
          <div class="section-header">
            <h3 class="title" data-title="What People Say">Testimonials</h3>
          </div>

          <div class="testi-content grid-2">
            <div class="column-1 reviews">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Laudantium adipisci veniam debitis quas, sapiente
                      repellendus mollitia. Laboriosam labore voluptate quos?
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Matias Butt</h3>
                      <h5 class="review-job">Photographer, Paris</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Fugiat voluptate consequatur aut tenetur fugit error
                      molestiae quaerat ex odio rem?
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Romeo Herbert</h3>
                      <h5 class="review-job">CEO, Munich</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Cupiditate voluptatum enim nemo quod amet dolorum aliquam,
                      sapiente omnis eaque consectetur.
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Jack Costa</h3>
                      <h5 class="review-job">Director of THR, London</h5>
                    </div>
                  </div>

                  <div class="swiper-slide review">
                    <i class="fas fa-quote-left quote"></i>
                    <div class="rate">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>

                    <p class="review-text">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Perspiciatis ab incidunt, dicta quam inventore ipsum
                      dolor. Consectetur nam incidunt error!
                    </p>

                    <div class="review-info">
                      <h3 class="review-name">Reiss Mccartney</h3>
                      <h5 class="review-job">Engineer, San Francisco</h5>
                    </div>
                  </div>
                </div>

                <div class="review-nav swiper-button-prev">
                  <i class="fas fa-long-arrow-alt-left"></i>
                </div>
                <div class="review-nav swiper-button-next">
                  <i class="fas fa-long-arrow-alt-right"></i>
                </div>
              </div>
            </div>

            <div class="column-2 image">
              <img src="./img/testi.png" alt="" class="img-element" />
            </div>
          </div>
        </div>
      </section>

      <section class="contact" id="contact">
        <div class="container">
          <div class="contact-box">
            <div class="contact-info">
              <h3 class="title">Get in touch</h3>
              <div class="information-wrap">
                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <p class="info-text">Kulon Progo, Yogyakarta</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-paper-plane"></i>
                  </div>
                  <p class="info-text">resantidwicahyani@mail.ugm.ac.id</p>
                </div>

                <div class="information">
                  <div class="contact-icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <p class="info-text">0895621135983</p>
                </div>
              </div>
            </div>

            <div class="contact-form">
              <h3 class="title">Contact me</h3>
              <div class="row">
                <input
                  type="text"
                  class="contact-input"
                  placeholder="First Name"
                />
                <input
                  type="text"
                  class="contact-input"
                  placeholder="Last Name"
                />
              </div>

              <div class="row">
                <input type="text" class="contact-input" placeholder="Phone" />
                <input type="email" class="contact-input" placeholder="Email" />
              </div>

              <div class="row">
                <textarea
                  name="message"
                  class="contact-input textarea"
                  placeholder="Message"
                ></textarea>
              </div>
              <a href="#" class="btn">Send</a>
            </div>
          </div>
        </div>
      </section>

      <section class="hireme" id="hireme">
        <div class="container">
          <h3 class="title">Let's talk about a project</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio,
            culpa. Commodi suscipit animi officia dignissimos unde, ipsum fugiat
            consequuntur, fugit ratione vel aperiam, similique distinctio
            mollitia repellendus quasi rem vero!
          </p>
          <a href="#" class="btn">Hire me</a>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="grid-4">
          <div class="grid-4-col footer-about">
            <h3 class="title-sm">About</h3>
            <p class="text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
              officiis quo officia quia?
            </p>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Links</h3>
            <ul>
              <li>
                <a href="#services">Services</a>
              </li>
              <li>
                <a href="#portfolio">Portfolio</a>
              </li>
              <li>
                <a href="#about">About</a>
              </li>
              <li>
                <a href="#testimonials">Testimonials</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>

          <div class="grid-4-col footer-links">
            <h3 class="title-sm">Services</h3>
            <ul>
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">Web Dev</a>
              </li>
              <li>
                <a href="#">App Design</a>
              </li>
              <li>
                <a href="#">Marketing</a>
              </li>
              <li>
                <a href="#">UI Design</a>
              </li>
            </ul>
          </div>

          <div class="grid-4-col footer-newstletter">
            <h3 class="title-sm">Subscribe</h3>
            <p class="text">
              Lorem ipsum dolor, sit amet ipsum dolor sit amet.
            </p>
            <div class="footer-input-wrap">
              <input type="email" class="footer-input" placeholder="Email" />
              <a href="#" class="input-arrow">
                <i class="fas fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="bottom-footer">
          <div class="copyright">
            <p class="text">
              Copyright&copy;2023 All rights reserved | Made by
              <span class="split-text" data-text="FORUM"><a
                href="https://dopedevelopers.com/" > Dope developers </a></span>
             
            </p>
          </div>

          <div class="followme-wrap">
            <div class="followme">
              <h3>Follow me</h3>
              <span class="footer-line"></span>
              <div class="social-media">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>

            <div class="back-btn-wrap">
              <a href="#" class="back-btn">
                <i class="fas fa-chevron-up"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
  </body>
</html>


@endsection