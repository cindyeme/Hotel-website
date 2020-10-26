<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Cynthia Hotel Template" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cy-Hotels</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="icofont/icofont.min.css" />
    <link rel="stylesheet" href="css/elegant-icons.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="Source/venobox/venobox.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <!-- <link rel="stylesheet" href="Source/aos/aos.css" /> -->
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <b
              >CY <br />
              Hotel</b
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Preloader End -->

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
      <div class="container d-flex">
        <div class="contact-info mr-auto">
          <i class="icofont-phone"></i> +23413 557 0186
          <span class="d-none d-lg-inline-block"
            ><i class="icofont-email icofont-rotate-180"></i>
            cynthiahotelsng@gmail.com</span
          >
        </div>
        <div class="direction">
          <span><a href="#">Get Direction</a></span>
        </div>
      </div>
    </div>

    <!-- =============== Header ================ -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container">
        <div
          class="header-container d-flex align-items-center"
          style="border-radius: 50px"
        >
          <div class="logo mr-auto" style="border-radius: 50px">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1 class="text-light"><a href="index.html"><span>Cy Hotel</span></a></h1> -->
            <a href="index.php"
              ><img
                src="./img/my_img/hotelTem logo.png"
                alt="logo"
                class="img-fluid"
            /></a>
          </div>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about-us.php">About Us</a></li>
              <li><a href="services.php">Services</a></li>
              <li><a href="rooms.php">Rooms</a></li>
              <li class="drop-down">
                <a href="">Pages</a>
                <ul>
                  <li><a href="spa.php">Spa</a></li>
                  <!-- <li class="drop-down">
                    <a href="#">Room Details</a>
                    <ul>
                      <li><a href="deluxe.php">Deluxe Rooms</a></li>
                      <li><a href="family.php">Family Rooms</a></li>
                      <li><a href="suite.php">Suite Rooms</a></li>
                      <li><a href="premium.php">Premium Rooms</a></li>
                    </ul>
                  </li> -->
                  <li><a href="kitchen.php">Kitchen</a></li>
                  <li><a href="rentals.php">Rentals</a></li>
                </ul>
              </li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="contact.php">Contact Us</a></li>

              <li class="get-started"><a href="index.php">Book Now</a></li>
            </ul>
          </nav>
          <!-- .nav-menu -->
        </div>
        <!-- End Header Container -->
      </div>
    </header>
    <!-- End Header -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="hero-text">
              <h1>CYNTHIA HOTELS</h1>
              <p>
                We are the best hotel booking site, including recommendations
                for international travel and for finding low-priced hotel rooms.
              </p>
              <a href="#" class="primary-btn">Discover Now</a>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
            <div class="room_booking">
              <div class="booking-form">
                <h4 class="pb-2">Book A Room Here</h4>
                <form action="#" method="POST">
                  <div class="fullname check-date">
                    <label for="fullname">Full name: </label>
                    <input type="text" class="name-input" id="fullname" />
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="check-date">
                    <label for="date-in">Check In:</label>
                    <input type="text" class="date-input" id="date-in" />
                    <i class="icon_calendar"></i>
                  </div>
                  <div class="check-date">
                    <label for="date-out">Check Out:</label>
                    <input type="text" class="date-input" id="date-out" />
                    <i class="icon_calendar"></i>
                  </div>
                  <div class="select-option">
                    <label for="guest">Guests:</label>
                    <div class="d-flex justify-content-between">
                      <select id="guest">
                        <option value="">Adults</option>
                        <option value="">2 Adults</option>
                        <option value="">4 Adults</option>
                        <option value="">5 Adults</option>
                      </select>
                      <select id="guest">
                        <option value="">Children</option>
                        <option value="">None</option>
                        <option value="">A child</option>
                        <option value="">2 children</option>
                        <option value="">3 children</option>
                        <option value="">4 children</option>
                        <option value="">5 children</option>
                      </select>
                    </div>
                  </div>
                  <div class="select-option">
                    <label for="room">Number of Rooms:</label>
                    <select id="room">
                      <option value="">1 Room</option>
                      <option value="">2 Rooms</option>
                      <option value="">3 Rooms</option>
                      <option value="">4 Rooms</option>
                      <option value="">5 Rooms</option>
                    </select>
                  </div>
                  <button type="submit">
                    <a href="#">check availability</a>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/slide-3.jpg"></div>
        <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
        <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section id="about_us" class="about sect-after">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-left pb-4">
              <h2 class="pb-2">About</h2>
              <p>Learn More About Us</p>
            </div>
          </div>

          <div
            class="row about-content"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="col-xl-5 col-lg-5">
              <div class="img_box position-relative">
                <div class="about-img mb-120">
                  <img
                    src="./img/about/about_img.jpeg"
                    class="about-img1"
                    alt=""
                  />
                </div>
                <div class="ex">
                  <div class="service-experience heartbeat">
                    <h4>05 Years of Service<br />Experience</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7">
              <div class="about-caption">
                <h3 class="pb-4">Know Us Today.</h3>
                <div class="content caption-details">
                  <p class="pera-dtails">
                    Do you know that Lorem ipsum dolor sit amet, consectetur
                    adipisic- ing elit, sed do eiusmod tempor inc. And we have
                    been existing Lorem ipsum dolor sit, amet consectetur
                    adipisicing elit. Fugit dolor amet illo quia nulla ratione
                    mollitia ipsa reprehenderit minima cumque tenetur asperiores
                    distinctio, at impedit modi, enim accusantium laboriosam
                    quod?
                  </p>
                  <ul>
                    <li>
                      <i class="icofont-check-circled"></i> Ullamco laboris nisi
                      ut aliquip ex ea commodo consequat.
                    </li>
                    <li>
                      <i class="icofont-check-circled"></i> Duis aute irure
                      dolor in reprehenderit in voluptate velit.
                    </li>
                    <li>
                      <i class="icofont-check-circled"></i> Ullamco laboris nisi
                      ut aliquip ex ea commodo consequat. Duis aute irure dolor
                      in reprehenderit in voluptate trideta storacalaperda
                      mastiro dolore eu fugiat nulla pariatur.
                    </li>
                  </ul>
                  <p class="pb-3">
                    We are lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud.
                  </p>
                  <a href="#" class="btn more-btn"
                    >Read More <i class="fa fa-angle-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section  -->

    <section id="discover-us" class="discover-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-left pb-5">
              <h2 class="pb-2">Discover Our Services</h2>
              <p>We Do Offer Awesome Services</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-lg-4 d-flex align-items-stretch"
            data-aos="fade-right"
          >
            <div class="content">
              <div class="content_para">
                <h3>Our Best Services</h3>
                <p>
                  We offer lorem ipsum dolor sit amet, consectetur adipiscing
                  elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua. Duis aute irure dolor in reprehenderit
                  Asperiores dolores sed et.
                </p>
                <p>We consider all___________</p>
                <ul class="p-0 m-0">
                  <li class="list-unstyled">
                    <i class="icon_check_alt2"></i> Business Travelers
                  </li>
                  <li class="list-unstyled">
                    <i class="icon_check_alt2"></i> Vacationers & Holiday Makers
                  </li>
                  <li class="list-unstyled">
                    <i class="icon_check_alt2"></i> Weekend Travelers
                  </li>
                  <li class="list-unstyled">
                    <i class="icon_check_alt2"></i> Millennial Travelers
                  </li>
                  <li class="list-unstyled">
                    <i class="icon_check_alt2"></i> Family Travelers
                  </li>
                  <li class="list-unstyled">
                    <i class="icon_check_alt2"></i> Honeymooners
                  </li>
                </ul>
                <div class="text-center clearfix mt-5">
                  <a href="#" class="btn more-btn" style="font-size: 0.9rem"
                    >Learn More <i class="fa fa-angle-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div
                  class="col-xl-4 d-flex align-items-stretch mb-3"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="flaticon-012-cocktail"></i>
                    <h4>Bar & Drink</h4>
                    <p>
                      Consequuntur sunt aut quasi enim aliquam quae harum
                      pariatur laboris nisi ut aliquip
                    </p>
                  </div>
                </div>
                <div
                  class="col-xl-4 d-flex align-items-stretch mb-3"
                  data-aos="zoom-in"
                  data-aos-delay="200"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="flaticon-033-dinner"></i>
                    <h4>Catering Services</h4>
                    <p>
                      Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt
                    </p>
                  </div>
                </div>
                <div
                  class="col-xl-4 d-flex align-items-stretch mb-3"
                  data-aos="zoom-in"
                  data-aos-delay="300"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="flaticon-001-luggage"></i>
                    <h4>Luggage Forwarding</h4>
                    <p>
                      Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                      maiores omnis facere
                    </p>
                  </div>
                </div>
                <div
                  class="col-xl-4 d-flex align-items-stretch"
                  data-aos="zoom-in"
                  data-aos-delay="300"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="flaticon-024-towel"></i>
                    <h4>Laundry</h4>
                    <p>
                      Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                      maiores omnis facere
                    </p>
                  </div>
                </div>
                <div
                  class="col-xl-4 d-flex align-items-stretch"
                  data-aos="zoom-in"
                  data-aos-delay="300"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="flaticon-043-room-service"></i>
                    <h4>Room Services</h4>
                    <p>
                      Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                      maiores omnis facere
                    </p>
                  </div>
                </div>
                <div
                  class="col-xl-4 d-flex align-items-stretch"
                  data-aos="zoom-in"
                  data-aos-delay="300"
                >
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="flaticon-036-parking"></i>
                    <h4>Travel Plan</h4>
                    <p>
                      Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut
                      maiores omnis facere
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End .content-->
          </div>
        </div>
      </div>
    </section>
    <!-- End Discover Us Section -->

    <!-- Services Section End -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features sect-after">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-6 col-6">
            <div class="icon-box">
              <i class="flaticon-002-breakfast" style="font-size: 0.8rem"></i>
              <h3><a href="">All-Day Breakfasts</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="icon-box">
              <i class="flaticon-007-swimming-pool"></i>
              <h3><a href="">Swimming Pool</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="flaticon-018-iron"></i>
              <h3><a href="">Rental Clothing</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="flaticon-026-bed"></i>
              <h3><a href="">Babysitting</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="flaticon-034-camera"></i>
              <h3><a href="">Photo opportunities</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="flaticon-029-wifi"></i>
              <h3><a href="">Free Wifi</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="flaticon-044-clock-1"></i>
              <h3><a href="#">Pick-up / Drop-off</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="flaticon-025-pillow"></i>
              <h3><a href="">Pillow Chocolates</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="flaticon-023-hair-dryer"></i>
              <h3><a href="">Beauty Services</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="flaticon-050-bellboy"></i>
              <h3><a href="">Fitness Experiences</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="flaticon-036-parking"></i>
              <h3><a href="">Transport</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="flaticon-033-dinner"></i>
              <h3><a href="">Parties</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-left pb-5">
              <h2>Gallery</h2>
              <p>Some photos of our hotel rooms</p>
            </div>
          </div>
        </div>
        <div class="hp-room-items">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div
                class="hp-room-item set_bg shadow-lg"
                data-setbg="img/room/room-1.jpeg"
              >
                <div
                  class="card-img-overlay"
                  style="background: rgba(0, 0, 0, 0.4)"
                ></div>
                <div class="hr-text">
                  <h3>Premium Room</h3>
                  <h2>199$<span> / night</span></h2>
                  <a
                    href="#"
                    class="primary-btn pt-3"
                    style="font-size: 0.8rem; font-weight: 400 ;"
                    >More Details</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div
                class="hp-room-item set_bg shadow-lg"
                data-setbg="img/room/room-2.jpeg"
                style="object-fit: cover"
              >
                <div
                  class="card-img-overlay"
                  style="background: rgba(0, 0, 0, 0.4)"
                ></div>
                <div class="hr-text">
                  <h3>Double Room</h3>
                  <h2>199$<span> / night</span></h2>
                  <a
                    href="#"
                    class="primary-btn pt-3"
                    style="font-size: 0.8rem; font-weight: 400 ;"
                    >More Details</a
                  >
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div
                class="hp-room-item set_bg shadow-lg"
                data-setbg="img/room/room-3.jpg"
                style="object-fit: cover"
              >
                <div
                  class="card-img-overlay"
                  style="background: rgba(0, 0, 0, 0.4)"
                ></div>
                <div class="hr-text">
                  <h3>Single Room</h3>
                  <h2>199$<span> / night</span></h2>
                  <a
                    href="#"
                    class="primary-btn pt-3"
                    style="font-size: 0.8rem; font-weight: 400 ;"
                    >More Details</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div
                class="hp-room-item set_bg shadow-lg"
                data-setbg="img/room/room-4.jpg"
                style="object-fit: cover"
              >
                <div
                  class="card-img-overlay"
                  style="background: rgba(0, 0, 0, 0.4)"
                ></div>
                <div class="hr-text">
                  <h3>Family Room</h3>
                  <h2>199$<span> / night</span></h2>
                  <a
                    href="#"
                    class="primary-btn pt-3"
                    style="font-size: 0.8rem; font-weight: 400 ;"
                    >More Details</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 displayNone">
              <div
                class="hp-room-item set_bg shadow-lg"
                data-setbg="img/room/room-5.jpg"
                style="object-fit: cover"
              >
                <div
                  class="card-img-overlay"
                  style="background: rgba(0, 0, 0, 0.4)"
                ></div>
                <div class="hr-text">
                  <h3>VIP Room</h3>
                  <h2>199$<span> / night</span></h2>
                  <a
                    href="#"
                    class="primary-btn pt-3"
                    style="font-size: 0.8rem; font-weight: 400 ;"
                    >More Details</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 displayNone">
              <div
                class="hp-room-item set_bg shadow-lg"
                data-setbg="img/room/room-6.jpeg"
                style="object-fit: cover"
              >
                <div
                  class="card-img-overlay"
                  style="background: rgba(0, 0, 0, 0.4)"
                ></div>
                <div class="hr-text">
                  <h3>Lovers Room</h3>
                  <h2>199$<span> / night</span></h2>
                  <a
                    href="#"
                    class="primary-btn pt-3"
                    style="font-size: 0.8rem; font-weight: 400 ;"
                    >More Details</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 displayNone">
              <div
                class="hp-room-item set_bg shadow-lg"
                data-setbg="img/room/room-8.jpg"
                style="object-fit: cover"
              >
                <div
                  class="card-img-overlay"
                  style="background: rgba(0, 0, 0, 0.4)"
                ></div>
                <div class="hr-text">
                  <h3>Standard Room</h3>
                  <h2>199$<span> / night</span></h2>
                  <a
                    href="#"
                    class="primary-btn pt-3"
                    style="font-size: 0.8rem; font-weight: 400 ;"
                    >More Details</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 displayNone">
              <div
                class="hp-room-item set_bg shadow-lg"
                data-setbg="img/room/room-9.jpg"
                style="object-fit: cover"
              >
                <div
                  class="card-img-overlay"
                  style="background: rgba(0, 0, 0, 0.4)"
                ></div>
                <div class="hr-text">
                  <h3>Suite Room</h3>
                  <h2>199$<span> / night</span></h2>
                  <a
                    href="#"
                    class="primary-btn pt-3"
                    style="font-size: 0.8rem; font-weight: 400 ;"
                    >More Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="ftco-section testimony-section">
      <div class="overlay"></div>
      <div class="container">
        <div class="row pb-5">
          <div class="col-lg-12">
            <div class="section-title text-left pb-5">
              <h2 class="pb-2">Testimonials</h2>
              <p class="text-capitalize">Happy clients and their feedbacks</p>
            </div>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div
              id="owl-carousel"
              class="carousel-testimony owl-carousel owl-theme"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="item">
                <div class="testimony-wrap d-md-flex">
                  <div
                    class="user-img"
                    style="background-image: url(img/testimonial/person_3.jpg)"
                  ></div>
                  <div class="text pl-md-4">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Cynthia Ngozi</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-md-flex">
                  <div
                    class="user-img"
                    style="background-image: url(./img/testimonial/staff-4.jpg)"
                  ></div>
                  <div class="text pl-md-4">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Legend Oscar</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-md-flex">
                  <div
                    class="user-img"
                    style="background-image: url(./img/testimonial/staff-1.jpg)"
                  ></div>
                  <div class="text pl-md-4">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Mark Smith</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-md-flex">
                  <div
                    class="user-img"
                    style="background-image: url(./img/testimonial/staff-2.jpg)"
                  ></div>
                  <div class="text pl-md-4">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">Kyle Meyer</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-md-flex">
                  <div
                    class="user-img"
                    style="background-image: url(./img/testimonial/staff-3.jpg)"
                  ></div>
                  <div class="text pl-md-4">
                    <span
                      class="quote d-flex align-items-center justify-content-center"
                    >
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts.
                    </p>
                    <p class="name">John Doe</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-left pb-5">
              <h2>Contact</h2>
              <p>Contact Us</p>
            </div>
          </div>
        </div>
        <div data-aos="fade-up">
          <iframe
            style="border: 0; width: 100%; height: 350px"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-4 order-lg-2">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Sunday:<br />
                  6:00 AM - 6:00 PM
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>cynthiahotelsng@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+2345 4334 62345</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0 order-lg-1">
            <form
              action="forms/contact.php"
              method="post"
              role="form"
              class="php-email-form"
            >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 4 chars"
                  />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    data-rule="email"
                    data-msg="Please enter a valid email"
                  />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="Subject"
                  data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject"
                />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="8"
                  data-rule="required"
                  data-msg="Please write something for us"
                  placeholder="Message"
                ></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your message has been sent. Thank you!
                </div>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
      <div class="container">
        <div class="footer-text">
          <div class="row m-auto">
            <div class="col-lg-3 col-md-6">
              <div class="ft-about">
                <div class="logo pb-3">
                  <a href="#" class="">
                    <img
                      src="./img/my_img/hotelTem logo.png"
                      class="img-fluid"
                      alt=""
                    />
                  </a>
                </div>
                <p>
                  We inspire and reach millions of travelers<br />
                  across 90 local websites
                </p>
                <div class="fa-social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-medium"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="ft-contact">
                <h6>Contact Us</h6>
                <ul>
                  <li><i class="fa fa-phone"></i> +234 345 67890</li>
                  <li><i class="fa fa-envelope"></i> cynthiahotelsng.com</li>
                  <li>
                    <i class="fa fa-map-marker"></i> 856 Cordia Extension Apt.
                    356, Lake, United State
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="ft-quick-links">
                <h6>Quick Links</h6>
                <div class="link d-md-flex text-white">
                  <ul>
                    <li class="list-unstyled">
                      <a href="about-us.php">
                        <i class="fa fa-angle-right"></i>About Us
                      </a>
                    </li>
                    <li class="list-unstyled">
                      <a href="services.php">
                        <i class="fa fa-angle-right"></i>Services
                      </a>
                    </li>
                    <li class="list-unstyled">
                      <a href="rooms.php"> <i class="fa fa-angle-right"></i>Rooms </a>
                    </li>
                    <li class="list-unstyled">
                      <a href="blog.php"> <i class="fa fa-angle-right"></i>Blog </a>
                    </li>
                  </ul>
                  <ul>
                    <li class="list-unstyled">
                      <a href="spa.php"> <i class="fa fa-angle-right"></i>Spa </a>
                    </li>
                    <li class="list-unstyled">
                      <a href="kitchen.php"> <i class="fa fa-angle-right"></i>Kitchen </a>
                    </li>
                    <li class="list-unstyled">
                      <a href="rentals.php"> <i class="fa fa-angle-right"></i>Rentals </a>
                    </li>
                    <li class="list-unstyled">
                      <a href="contact.php">
                        <i class="fa fa-angle-right"></i>Contact Us
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="ft-newslatter">
                <h6>New latest</h6>
                <p>Get the latest updates and offers.</p>
                <form action="#" class="fn-form">
                  <input type="text" placeholder="Email" />
                  <button type="submit"><i class="fa fa-send"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-option">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <ul>
                <li><a href="#">Book A Room</a></li>
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Environmental Policy</a></li>
              </ul>
            </div>
            <div class="col-lg-5">
              <div class="co-text">
                <p class="text-white">
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved |
                  <i class="fa fa-heart" aria-hidden="true"></i> by
                  <a href="#" target="_blank">Cynthia E Ngozi</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- back-to-top -->
    <a href="#" class="back-to-top"><i class="icofont-arrow-up"></i></a>

    <!-- Search model Begin -->
    <!-- <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div> -->
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="source/venobox/venobox.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="Source/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="Source/isotope/isotope-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- <script src="source/aos/aos.js"></script> -->
    <!-- custom js -->
    <script src="js/main.js"></script>
  </body>
</html>
