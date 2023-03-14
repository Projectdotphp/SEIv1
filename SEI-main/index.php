<!DOCTYPE html>
<html lang="en">

<head>
  <title>SEI - Carcare System</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicon -->
  <link href="./favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="./lib/animate/animate.min.css" rel="stylesheet">
  <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="./css/style.css" rel="stylesheet">
  <link href="./css/image.css " rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

    <!-- Topbar Start -->
<div  class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small ><a href="https://goo.gl/maps/k8DVuLoMgBU4X9Wp9" style="text-decoration: none;" target="_blank">6-9 Sanwachou Chuo-ku Niigata City Japan</a></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-envelope text-primary me-2"></small>
                <small><a href="mailto:sei.informationph@gmail.com" style="text-decoration: none;" target="_blank">sei.informationph@gmail.com</a></small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small  class="fa fa-phone-alt text-primary me-2"></small>
                <small><a href="tel:+81-(0)252417300" style="text-decoration: none;" target="_blank">+81-(0)252417300</a></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center " style="margin-right: 40px;">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a  class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>


    <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light  sticky-top p-0">
    <a href="./pages/home.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img class="logo" src="./img/3.png" width="150" height="39" alt="">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right: 50px;">
        
        <div class="navbar-nav ms-auto p-4 p-lg-0" >
            
            <a href="./pages/home.php" class="nav-item nav-link fw-bold">Home</a>
            <!-- Dromdowns -->
            <div class="nav-item fw-bold dropdown">
                <a href="#" class="nav-link fw-bold" data-bs-toggle="dropdown">About</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="./pages/about.php" class="dropdown-item fw-bold">About Product</a>
                    <a href="./pages/company" class="dropdown-item fw-bold">About Company</a>
                    <a class="dropdown-item "id="myid"></a>
                </div>
            </div>
            <a href="./pages/service.php" class="nav-item nav-link fw-bold">Services</a>
            <a href="./pages/product.php" class="nav-item nav-link fw-bold">Products</a>
            <a href="./pages/media.php" class="nav-item nav-link fw-bold">Media</a>
            <a href="./pages/contact.php" class="nav-item nav-link  fw-bold">Contact</a>
            <span id="contact-text" class="nav-item nav-link d-lg-none d-inline-flex align-items-center">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>6-9 Sanwachou Chuo-ku Niigata City Japan</small>
            </span>
            <span id="contact-text" class="nav-item nav-link d-lg-none d-inline-flex align-items-center">
                <small class="far fa-envelope text-primary me-2"></small>
                <small>sei.informationph@gmail.com</small>
            </span>
            <span id="contact-text" class="nav-item nav-link d-lg-none d-inline-flex align-items-center">
                <small  class="fa fa-phone-alt text-primary me-2  fw-bold"></small>
                <small class="">+81-(0)252417300</small> 
            </span>
            <span id="socials-text" class="nav-item nav-link d-lg-none d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </span>
            
        </div>
    </div>
</nav>
    <style>
    /* Features Section */
#features{
    padding: 7% 15%;
    background-color: white;
    position: relative;
    z-index: 1;
}
.feature-box{
    text-align: center;
    padding: 5%;
}
.icon{
    color:#1409dfbe;
    margin-bottom: 1rem;
}
.icon:hover{
    color: #1208E0;;
}

</style>


    

<!-- Carousel -->
<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2"></button>
    </div>
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">  
    <div class="carousel-item active" >
      <video class="w-100" autoplay loop muted>
        <source src="./img/carousel-bg-3.mp4" type="video/mp4">
      </video>
        <div class="carousel-caption d-flex align-items-center">
            <div  class="container">
              <div class="row align-items-center justify-content-center justify-content-lg-start">
                <div class="col-10 col-lg-7 text-center text-lg-start">
                    
                </div>
              </div>
            </div>
      </div>
    </div>
    <div class="carousel-item">
        <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
      
        <div class="carousel-caption d-flex align-items-center">
          <div  class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-start">
              <div class="col-10 col-lg-7 text-center text-lg-start">
                <p class="h5 fw-bold section-text animated slideInDown text-uppercase" style="letter-spacing: 0.3rem;">Expert Car Protection</p>
                <div class="col-lg-8 d-none d-lg-flex animated zoomIn">
                  <img class="img-fluid" src="./img/3.png" alt="">
                </div>
                <p class="section-text animated slideInDown">
                  SEI's expert car coating service provides ultimate protection for your ride. 
                  <br>Trust the experts today!
                </p>
                <a href="./about" class="btn btn-secondary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
    </div>
  </div>
    <div class="carousel-item">
        <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
      
        <div class="carousel-caption d-flex align-items-center">
          <div  class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-start">
              <div class="col-10 col-lg-7 text-center text-lg-start">
                  <p class="fw-bold section-text animated slideInDown text-uppercase" style="letter-spacing: 0.3rem;">Confidently coated premium cars.</p>
                  <div class="col-lg-8 d-none d-lg-flex animated zoomIn">
                    <img class="img-fluid" src="./img/3.png" alt="">
                  </div>
                  <p class="section-text animated slideInDown">
                    Protect your car with SEI's premium coating services and enjoy confident driving. Trust SEI!
                    </p>
                  <a href="./about" class="btn btn-secondary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
            </div>
          </div>
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center">
            <h1 class="mb-5 fw-bold text-uppercase text-secondary" style="margin-top: 50px; letter-spacing: 0.2em; font-weight: bolder;">Why should you choose us</h1>
          </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-medal fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3  fw-bold">Reputation</h5>
                            <p>We gave you a quality work and satisfaction with our work.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-building-circle-check fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3 fw-bold">Experience and Expertise</h5>
                            <p>As a experience business for many years we gave you a satisfactory</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3  fw-bold">Range of Services</h5>
                            <p>We gave a wide range of services for your car</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="d-flex bg-light py-5 px-4">
                      <i class="fa fa-arrow-alt-circle-up fa-3x text-primary flex-shrink-0"></i>
                      <div class="ps-4">
                          <h5 class="mb-3  fw-bold">High-quality Services</h5>
                          <p>We provided top-notch quality services for your vehicle.</p>
                          
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="d-flex bg-light py-5 px-4">
                      <i class="fa fa-money-bill fa-3x text-primary flex-shrink-0"></i>
                      <div class="ps-4">
                          <h5 class="mb-3  fw-bold">Convenience</h5>
                          <p>We protects your vehicle's paint from damage caused by UV rays, debris, and other environmental factors, ultimately extending its lifespan and maintaining its value.</p>
                          
                      </div>
                      
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="d-flex bg-light py-5 px-4">
                      <i class="fa fa-check-circle fa-3x text-primary flex-shrink-0"></i>
                      <div class="ps-4">
                        <h5 class="mb-3 fw-bold">Pricing</h5>
                        <p>We offer excellent service and competitive pricing for your vehicle.</p>
                        
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
    <!-- Service End -->

    


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/media22.jpg" style="object-fit: cover;" alt="">
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold text-uppercase text-secondary" style="letter-spacing: 0.1em; font-weight: bolder;">Who are we?</h2>
                    <p class="mb-4" style="text-size-adjust: 100px;">
                      SEI is a Japanese company that values honesty and offers a high-quality glass coating product. 
                      We believe that there have been misunderstandings about glass coatings due to construction errors and are eager to collaborate and share their knowledge and technology. 
                      Our shop is located in Niigata, which faces severe weather conditions, and their product is made in Japan and has undergone extensive testing. 
                      We are developing a website to increase the visibility and appeal of their product to a global audience, 
                      which will provide comprehensive information on how to purchase the product.
                      <br><br>In addition with our commitment to honesty and quality, SEI also prioritizes customer satisfaction and offers excellent customer service. 
                      Our website will feature a customer support section where users can easily contact them for any questions or concerns regarding their product.
                    </p>
                    
                    <a href="./pages/about.php" class="btn btn-primary py-3 px-5  fw-bold">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container"></div>
        <div class="row ">
          <div class="col-sm-6 ">
        
            <div class="ratio ratio-16x9">
              <iframe  src="https://www.youtube.com/embed/gpBUg3pZN6c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/fs_8klCrhHE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-calendar-alt fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2  fw-bold" data-toggle="counter-up" >30</h2>
                    <p class="text-white mb-0 fw-bold">Years of Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2 fw-bold" data-toggle="counter-up">90</h2>
                    <p class="text-white mb-0 fw-bold">Expert Workers</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2 fw-bold" data-toggle="counter-up">1000</h2>
                    <p class="text-white mb-0 fw-bold">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2 fw-bold" data-toggle="counter-up">1500</h2>
                    <p class="text-white mb-0 fw-bold">Projects completed</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->
  <!-- Product Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h1 class="mb-5 fw-bold text-uppercase text-secondary" style="margin-top: 50px; letter-spacing: 0.2em; font-weight: bolder;">new arrival</h1>
      </div>
        <div class="container py-5">
          <div class="row">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
              <div class="card" style="border-radius: 15px;">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="./img/PR1.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                  <a href="#!"><div class="mask"></div></a>
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="text-dark fw-bold">SEI 3031</h4>
                      <p class="">The SEI 3000 series is a construction material that requires temperature management during curing, 
                        prohibits water contact, and recommends hand application rather than using a spray gun. 
                        The use of SEI 3000 series as a topcoat is effective for water repellency and water stain prevention during cold weather conditions. 
                        For more detailed information, click the button down bellow<br><br><br><br></p>
                        
                       
                    </div>
                    <div>
                      <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                    <a href="./pages/3031.php" class="h4 animated slideInDown fw-bold" style="text-decoration: none;">More details<i class="fa fa-arrow-right ms-3"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
              <div class="card" style="border-radius: 15px;">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="./img/PR2.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                  <a href="#!"><div class="mask"></div></a>
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="text-dark fw-bold">SEI 3001</h4>
                      <p class="">SEI 3001 is a high-quality glass coating protection with excellent crack resistance, flexibility, and hardness. 
                        It is a 4-functional group oligomer that is highly resistant to UV rays, heat, oil, water, and chemicals. 
                        The coating surface is anti-fouling and can easily be washed away with water. It has optimized curing speed and is easy to handle with alcohol-based solvents. 
                        It is highly durable and has a long life cycle due to its strong adhesion to the coating surface.</p>
                    </div>
                    <div>
                      <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                    <a href="./pages/3001.php" class="h4 animated slideInDown fw-bold" style="text-decoration: none;">More details<i class="fa fa-arrow-right ms-3"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-2">
              <div class="card" style="border-radius: 15px;">
                <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="./img/PR3.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"alt="" />
                  <a href="#!"><div class="mask"></div></a>
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h4 class="text-dark fw-bold">SEI T21</h4>
                      <p class="">It is a solvent-free coupling technology that provides surface protection with a smooth finish, flexibility, and crack resistance. 
                        The coating forms a strong bond with painted surfaces, making it easy to wash off dirt and stains. 
                        It offers long-term protection against UV rays, heat, water, and chemicals, and has a gentle solvent that is kind to the environment. 
                        The optimized curing rate ensures comfortable workability, and it reaches a hardness of 2H after 24 hours and 7H after 7 days.</p>
                    </div>
                    <div>
                      <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                    <a href="./pages/T21.php" class="h4 animated slideInDown fw-bold" style="text-decoration: none;">More details<i class="fa fa-arrow-right ms-3"></i></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- Product Start -->
      

 <!-- Contact Start -->
 <div class="container-xxl py-5">
  <div class="container">
    <div class="text-center">
      <h1 class="mb-5 fw-bold text-uppercase text-secondary" style="margin-top: 50px; letter-spacing: 0.2em; font-weight: bolder;">Connect with us</h1>
    </div>
      <div class="row g-4">
          <div class="col-12">
              <div class="row gy-4">
                  <div class="col-md-4">
                      <div class="bg-light d-flex flex-column justify-content-center p-4">
                          <h5 class="text-uppercase  fw-bold"><i class="fa fa-contact-card text-primary me-2"></i>Contact Number</h5>
                          <p class="m-0"><a href="tel:+81-(0)252417300" style="text-decoration: none;" target="_blank">+81-(0)252417300</a></p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="bg-light d-flex flex-column justify-content-center p-4">
                          <h5 class="text-uppercase fw-bold"><i class="fa fa-envelope-open text-primary me-2"></i>Email Address</h5>
                          <p class="m-0"><a  href="mailto:sei.informationph@gmail.com" style="text-decoration: none;" target="_blank">sei.informationph@gmail.com</a></p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="bg-light d-flex flex-column justify-content-center p-4">
                          <h5 class="text-uppercase fw-bold"><i class="fa fa-location-arrow text-primary me-2"></i>Location</h5>
                          <p class="m-0"><a href="https://goo.gl/maps/k8DVuLoMgBU4X9Wp9" style="text-decoration: none;" target="_blank">Japan, 〒950-0081 Niigata, Chuo Ward, Sanwacho, 6−9 イリオス新潟</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
            <iframe class="position-relative rounded w-100 h-100"
            src="https://my.atlistmaps.com/map/7e51b773-2be7-404b-98d9-457a6b4f0c53?share=true" 
            allow="geolocation" frameborder="0" scrolling="no" allowfullscreen></iframe>
          </div>
          <div class="col-md-6">
              <div class="wow fadeInUp" data-wow-delay="0.2s">
                  <p class="mb-4">Please enter your question in the box below and we will get back to you as soon as possible </p>
                  <form>
                      <div class="row g-3">
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                  <label for="name">Your Name</label>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-floating">
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                  <label for="email">Your Email</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-floating">
                                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" name="subject" required>
                                  <label for="subject">Subject</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="form-floating">
                                  <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px" required></textarea>
                                  <label for="message">Message</label>
                              </div>
                          </div>
                          <div class="col-12">
                              <button class="btn btn-primary w-100 py-3  fw-bold" type="submit" onclick="sendMail()">Send Message</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Contact End -->


<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-4">
          <div class="col-lg-8 col-md-6">
              <h6 class="text-primary text-uppercase  fw-bold">Call To Action</h6>
              <h1 class="mb-4 fw-bold">Have Any Pre Booking Question?</h1>
              <p class="mb-0">If you have any questions or concerns, please don't hesitate to call us using the number provided</p>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                  <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+81-(0)252417300</h3>
                  <a href="tel:+81-(0)252417300" style="text-decoration: none;" class="btn btn-secondary py-3 px-5  fw-bold">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
              </div>
          </div>
      </div>
    </div>
</div>
</body>
    <!-- footer -->
    <!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
<div class="container py-5">
    <div class="row">
        <div class="col">
            <h4 class="text-light mb-4 fw-bold">Address</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>6-9 Sanwachou Chuo-ku Niigata City Japan</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+81-(0)252417300</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>sei.informationph@gmail.com</p>
            <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="col">
            <h4 class="text-light mb-4 fw-bold">Opening Hours</h4>
            <h6 class="text-light">Monday - Friday:</h6>
            <p class="mb-4">08:00 AM - 6:00 PM</p>
            <h6 class="text-light">Saturday - Sunday:</h6>
            <p class="mb-0">09:00 AM - 12:00 PM</p>
        </div>
        <div class="col">
            <h4 class="text-light mb-4 fw-bold">Qr Code</h4>
            <img src="img/qrcode.png" alt="Qr Code" width="200px">
            <div class="position-relative mx-auto" style="max-width: 400px;">
            </div>
        </div>
    </div>
</div>
<div class="row" style="text-align: center;"> 
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <p class="copyright">2023 SEI - Carcare System. All rights reserved</p>
    </div>                
</div>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
     <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/wow/wow.min.js"></script>
    <script src="./lib/easing/easing.min.js"></script>
    <script src="./lib/waypoints/waypoints.min.js"></script>
    <script src="./lib/counterup/counterup.min.js"></script>
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./lib/tempusdominus/js/moment.min.js"></script>
    <script src="./lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="./js/main.js"></script>
    <script src="./js/media.js"></script>
    
</body>

</html>
