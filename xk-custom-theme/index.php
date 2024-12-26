<?php 
      // echo get_template_directory_uri();
      // bloginfo('template_directiory');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edylinn: Software Development Company for Brighter Digital Future</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header-footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/edylinn-white-logo.svg" alt="Edylinn Logo" class="img-fluid"></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">About 1</a></li>
                                      <li><a class="dropdown-item" href="#">About 2</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">About 3</a></li>
                                    </ul>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Solutions
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Technologies
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                            </ul>
                            <div class="header-last-bx">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Lets Talk</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.svg" alt="Search Icon" class="img-fluid">
                                        </a>
                                    </li>
                                    <li>
                                        <div class="lang-bx">
                                            <span>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/world-icon.svg" alt="World Icon" class="img-fluid">
                                            </span>
                                            <span>EN</span>
                                            <span>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottom-arrow.svg" alt="Bottom Arrow Icon" class="img-fluid">
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="banner-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="banner-txt-bx">
                        <h1 class="main-heading">Every Part of Your IT<br/> Ecosystem. <span class="color-blue">Taken Care Of</span></h1>
                        <p class="default-para">Complete management of your cloud or on-premises<br/> infrastructure and applications:</p>
                        <a class="standard-btn" href="javascript:void(0)">Let’s Connect</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="solutions-slider-bx">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-12">
                        <div class="swiper solutionsSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="solutions-btn">Enterprise Apps</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="solutions-btn">ERP</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="solutions-btn">CRM</a>
                                </div>

                                  <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="solutions-btn">HR Software</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="solutions-btn">Mobile Apps</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="solutions-btn">E-Commerce</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="solutions-btn">Web Portals</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="solutions-btn">Data Analytics</a>
                                </div>
                            </div>
                           
                            </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next solutionsSwiper-button-next"></div>
            <div class="swiper-button-prev solutionsSwiper-button-prev"></div>
        </div>
    </section>

    <section class="why-us-and-client-sec">
        <div class="why-us-sec">
          <div class="container">
              <div class="row justify-content-between">
                  <div class="col-12 col-md-5">
                      <div class="why-us-txt">
                        <div class="heading-wrap">
                          <h2 class="main-heading">Why <span class="color-blue">Us?</span></h2>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heading-line.svg" alt="Heading border" class="heading-line">
                        </div>
                          <p class="default-para">Edylinn Technlogies is delivering innovative solutions for over three years.</p>
                      </div>
                  </div>
                  <div class="col-12 col-md-6">
                      <div class="row why-us-stats">
                        <div class="col-12 col-md-6 ps-0">
                          <div class="why-us-content-bx">
                            <h4 class="default-heading">384<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-us-plus.png" alt="Plus icon" class="img-fluid"></span></h4>
                            <p class="why-us-para">Projects Delivered</p>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 pe-0">
                          <div class="why-us-content-bx">
                            <h4 class="default-heading">30<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-us-plus.png" alt="Plus icon" class="img-fluid"></span></h4>
                            <p class="why-us-para">Developers</p>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 ps-0">
                          <div class="why-us-content-bx">
                            <h4 class="default-heading">8839<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-us-plus.png" alt="Plus icon" class="img-fluid"></span></h4>
                            <p class="why-us-para">Hours Worked</p>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 pe-0">
                          <div class="why-us-content-bx">
                            <h4 class="default-heading">15<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/why-us-plus.png" alt="Plus icon" class="img-fluid"></span></h4>
                            <p class="why-us-para">Global Footprints</p>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
            
          </div>
        </div>
        <div class="client-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-xxl-10">
                        <div class="clients-txt-bx">
                          <div class="heading-wrap">
                            <h2 class="main-heading text-center">Our <span class="color-blue">Clients</span></h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heading-line.svg" alt="Heading border" class="heading-line">
                          </div>
                            <p class="default-para text-center">We rethink business growth for you through our collective<br/> experience with strategic partner ecosystem.</p>
                        </div>
                        <div class="clients-slider-bx">
                            <div class="swiper clientsSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-bx">
                                            <div class="client-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-1.png" alt="Client Image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next clientsSwiper-button-next"></div>
            <div class="swiper-button-prev clientsSwiper-button-prev"></div>
            </div>
        </div>
    </section>


    <section class="offering-and-tech-sec">
        <div class="offering-sec">
          <div class="container">
              <div class="row offering-row">
                  <div class="col-12 col-md-12">
                      <div class="offering-txt-bx">
                          <div class="heading-wrap">
                            <h2 class="main-heading text-center">Our <span class="color-blue">Offering</span></h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heading-line.svg" alt="Heading border" class="heading-line" style="width: 350px;">
                          </div>
                          <p class="default-para text-center">We rethink business growth for you through our collective<br/> experience with strategic partner ecosystem.</p>
                      </div>
                      <div class="offering-slider">
                        <div class="swiper offeringSwiper">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                                 <div class="swiper-slide">
                              <div class="xk-offer-bx">
                                <div class="offer-left-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offer-icon-1.svg" alt="SEO Booster Image" class="img-fluid">
                                  <h5>SEO Booster</h5>
                                </div>
                                <div class="offer-right-bx">
                                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top-right-arrow.png" alt="arrow Image" class="img-fluid">
                                </div>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        <div class="offer-pagination-bx">
                          <div class="swiper-pagination offering-pagination"></div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="techs-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12 p-0">
                        <div class="tech-txt-bx">
                          <div class="heading-wrap">
                            <h2 class="main-heading text-center">Techs  <span class="color-blue">We Use</span></h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heading-line.svg" alt="Heading border" class="heading-line" style="width: 350px;">
                          </div>
                            <p class="default-para text-center">500+ Team of Experts Skilled in 40+ Cutting-Edge Technologies</p>
                        </div>
                        <div class="tech-slider-bx">
                            <div class="marquee_container">
                                <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                                <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                                  <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                              </div>
                              <div class="marquee_container xk-marquee">
                                <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                                <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                                  <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                              </div>
                              <div class="marquee_container">
                                <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                                <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                                  <div class="marquee">
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                      <p>Web</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                      <p>Cloud</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                      <p>Shopify</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/react-icon.svg" alt="react Icon" class="img-fluid">
                                      <p>ReactJS</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/python-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Python</p>
                                    </div>
                                    <div class="tech-bx">
                                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fullstack-icon.svg" alt="Web Icon" class="img-fluid">
                                      <p>Full-stack</p>
                                    </div>
                                    <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-icon.svg" alt="web Icon" class="img-fluid">
                                        <p>Web</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cloud-icon.svg" alt="cloud Icon" class="img-fluid">
                                        <p>Cloud</p>
                                      </div>
                                      <div class="tech-bx">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify-icon.svg" alt="shopify Icon" class="img-fluid">
                                        <p>Shopify</p>
                                      </div>
                               
                                  </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="faqs-sec">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
              <div class="faqs-txt-bx">
                  <div class="heading-wrap">
                    <h2 class="main-heading text-center">Frequently Asked <span class="color-blue">Questions</span></h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heading-line.svg" alt="Heading border" class="heading-line" style="width: 350px;">
                  </div>
            </div>
            <div class="faqs-bx">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                      Can you cover end-to-end software delivery?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">At Edylinn Technologies, we pride ourselves on providing comprehensive end-to-end software delivery services. Our team of seasoned experts meticulously handles every phase of the software development lifecycle, from conceptualization and design to development.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Can I get it done really fast?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">At Edylinn Technologies, we pride ourselves on providing comprehensive end-to-end software delivery services. Our team of seasoned experts meticulously handles every phase of the software development lifecycle, from conceptualization and design to development.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      How much does it cost?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">At Edylinn Technologies, we pride ourselves on providing comprehensive end-to-end software delivery services. Our team of seasoned experts meticulously handles every phase of the software development lifecycle, from conceptualization and design to development.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                      What is your preferred development methodology?
                    </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">At Edylinn Technologies, we pride ourselves on providing comprehensive end-to-end software delivery services. Our team of seasoned experts meticulously handles every phase of the software development lifecycle, from conceptualization and design to development.</div>
                  </div>
                </div>
              </div>
              <p class="xk-accordion-para default-para">
                Didn’t find your answer? <a href="javascript:void(0)">Contact us here</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="customer-sec">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
            <div class="customer-txt-bx">
              <div class="heading-wrap">
                <h2 class="main-heading text-center">Our Customers <span class="color-blue">Say</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heading-line.svg" alt="Heading border" class="heading-line" style="width: 350px;">
              </div>
            </div>
         
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-11 col-md-12 p-0">
            <div class="customer-slider-sec">
              <div class="swiper customerSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="customer-bx">
                      <div class="xk-customer-top-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-1.svg" alt="customer image" class="img-fluid">
                        <div class="customer-details-bx">
                          <p class="customer-name">Naeem Shahzad</p>
                          <p class="customer-company">Edylinn</p>
                        </div>
                      </div>
                      <div class="xk-customer-bottom-bx">
                          <p class="customer-review">Edylinn is being used for my project, and the team has been very helpful. thanks, are there any new Tools you've tried this week?</p>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-stars.svg" alt="customers stars" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="customer-bx">
                      <div class="xk-customer-top-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-1.svg" alt="customer image" class="img-fluid">
                        <div class="customer-details-bx">
                          <p class="customer-name">M.Huzaifa Khan</p>
                          <p class="customer-company">Edylinn</p>
                        </div>
                      </div>
                      <div class="xk-customer-bottom-bx">
                          <p class="customer-review">Edylinn is being used for my project, and the team has been very helpful. thanks, are there any new Tools you've tried this week?</p>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-stars.svg" alt="customers stars" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="customer-bx">
                      <div class="xk-customer-top-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-1.svg" alt="customer image" class="img-fluid">
                        <div class="customer-details-bx">
                          <p class="customer-name">M.Huzaifa Khan</p>
                          <p class="customer-company">Edylinn</p>
                        </div>
                      </div>
                      <div class="xk-customer-bottom-bx">
                          <p class="customer-review">Edylinn is being used for my project, and the team has been very helpful. thanks, are there any new Tools you've tried this week?</p>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-stars.svg" alt="customers stars" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="customer-bx">
                      <div class="xk-customer-top-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-1.svg" alt="customer image" class="img-fluid">
                        <div class="customer-details-bx">
                          <p class="customer-name">Naeem Shahzad</p>
                          <p class="customer-company">Edylinn</p>
                        </div>
                      </div>
                      <div class="xk-customer-bottom-bx">
                          <p class="customer-review">Edylinn is being used for my project, and the team has been very helpful. thanks, are there any new Tools you've tried this week?</p>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-stars.svg" alt="customers stars" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="customer-bx">
                      <div class="xk-customer-top-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-1.svg" alt="customer image" class="img-fluid">
                        <div class="customer-details-bx">
                          <p class="customer-name">M.Huzaifa Khan</p>
                          <p class="customer-company">Edylinn</p>
                        </div>
                      </div>
                      <div class="xk-customer-bottom-bx">
                          <p class="customer-review">Edylinn is being used for my project, and the team has been very helpful. thanks, are there any new Tools you've tried this week?</p>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-stars.svg" alt="customers stars" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="customer-bx">
                      <div class="xk-customer-top-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-1.svg" alt="customer image" class="img-fluid">
                        <div class="customer-details-bx">
                          <p class="customer-name">Naeem Shahzad</p>
                          <p class="customer-company">Edylinn</p>
                        </div>
                      </div>
                      <div class="xk-customer-bottom-bx">
                          <p class="customer-review">Edylinn is being used for my project, and the team has been very helpful. thanks, are there any new Tools you've tried this week?</p>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-stars.svg" alt="customers stars" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="customer-bx">
                      <div class="xk-customer-top-bx">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-1.svg" alt="customer image" class="img-fluid">
                        <div class="customer-details-bx">
                          <p class="customer-name">Naeem Shahzad</p>
                          <p class="customer-company">Edylinn</p>
                        </div>
                      </div>
                      <div class="xk-customer-bottom-bx">
                          <p class="customer-review">Edylinn is being used for my project, and the team has been very helpful. thanks, are there any new Tools you've tried this week?</p>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-stars.svg" alt="customers stars" class="img-fluid">
                      </div>
                    </div>
                  </div>

                </div>
                <div class="xk-cus-pagination-bx">
                  <div class="swiper-pagination customer-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="consultation-sec">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10">
            <div class="consultation-txt-bx">
              <div class="heading-wrap">
                <h2 class="main-heading text-center">Need a <span class="color-blue">Consultation?</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/heading-line.svg" alt="Heading border" class="heading-line" style="width: 350px;">
              </div>
            </div>
            <div class="xk-consult-form mt-5">
              <form class="row g-3 gx-md-5">
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputName" placeholder="John Doe">
                    <label for="floatingInputName">Name</label>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInputEmail" placeholder="name@gmail.com">
                    <label for="floatingInputEmail">E-Mail Address</label>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputCompany" placeholder="Edylinn">
                    <label for="floatingInputCompany">Company Name</label>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputPhone" placeholder="+923458893874">
                    <label for="floatingInputPhone">Phone No.</label>
                  </div>
                </div>
                <div class="col-12 col-md-12">
                  <div class="form-floating mb-5">
                    <textarea class="form-control" style="height: 100px" placeholder="Leave a message here" id="floatingTextareaMsg"></textarea>
                    <label for="floatingTextareaMsg">Message</label>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <a class="standard-btn" href="javascript:void(0)">Let’s Connect</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer>
      <div class="footer-bg">
        <div class="footer-bg-img">
        <div class="container">
          <div class="row xk-footer-top-row">
            <div class="col-12 col-md-4  xk-footer-col">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edylinn-white-logo.svg" alt="Edylinn logo" class="img-fluid">
              <ul class="xk-footer-list">
                <li><a href="javascript:void(0)">About Us</a></li>
                <li><a href="javascript:void(0)">Become Agent</a></li>
                <li><a href="javascript:void(0)">Careers</a></li>
                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                <li><a href="javascript:void(0)">Terms Of Use</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-4 xk-footer-col">
              <h6>Location:</h6>
              <p>167-A, G-1 Johar Town, Lahore</p>
              <h6>Call Us:</h6>
              <p>CA: <a href="tel:+17059980862">+1 (705) 998-0862</a></p>
              <p>PK: <a href="tel:+923040118000">+92 (304) 011-8000</a></p>
              <h6>Email:</h6>
              <p><a href="mailto:info@edylinn.com">info@edylinn.com</a></p>
            </div>
            <div class="col-12 col-md-4 xk-footer-col">
              <h6>FIND US ON:</h6>
              <div class="social-icon-main-div">
              <div class="fb-icon social-icon-bx">
                <a href="javascript:void(0)" class="social-icon-inner-bx">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M13 9H17.5L17 11H13V20H11V11H7V9H11V7.12777C11 5.34473 11.1857 4.69816 11.5343 4.04631C11.8829 3.39446 12.3945 2.88288 13.0463 2.53427C13.6982 2.18565 14.3447 2 16.1278 2C16.6498 2 17.1072 2.05 17.5 2.15V4H16.1278C14.8041 4 14.401 4.07784 13.9895 4.29789C13.6862 4.46011 13.4601 4.68619 13.2979 4.98951C13.0778 5.40096 13 5.80407 13 7.12777V9Z"></path></svg>
                </a>
              </div>
                <div class="insta-icon social-icon-bx">
              <a href="javascript:void(0)" class="social-icon-inner-bx">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 9C10.3436 9 9.00098 10.3431 9.00098 12C9.00098 13.6573 10.3441 15 12.001 15C13.6583 15 15.001 13.6569 15.001 12C15.001 10.3427 13.6579 9 12.001 9ZM12.001 7C14.7614 7 17.001 9.2371 17.001 12C17.001 14.7605 14.7639 17 12.001 17C9.24051 17 7.00098 14.7629 7.00098 12C7.00098 9.23953 9.23808 7 12.001 7ZM18.501 6.74915C18.501 7.43926 17.9402 7.99917 17.251 7.99917C16.5609 7.99917 16.001 7.4384 16.001 6.74915C16.001 6.0599 16.5617 5.5 17.251 5.5C17.9393 5.49913 18.501 6.0599 18.501 6.74915ZM12.001 4C9.5265 4 9.12318 4.00655 7.97227 4.0578C7.18815 4.09461 6.66253 4.20007 6.17416 4.38967C5.74016 4.55799 5.42709 4.75898 5.09352 5.09255C4.75867 5.4274 4.55804 5.73963 4.3904 6.17383C4.20036 6.66332 4.09493 7.18811 4.05878 7.97115C4.00703 9.0752 4.00098 9.46105 4.00098 12C4.00098 14.4745 4.00753 14.8778 4.05877 16.0286C4.0956 16.8124 4.2012 17.3388 4.39034 17.826C4.5591 18.2606 4.7605 18.5744 5.09246 18.9064C5.42863 19.2421 5.74179 19.4434 6.17187 19.6094C6.66619 19.8005 7.19148 19.9061 7.97212 19.9422C9.07618 19.9939 9.46203 20 12.001 20C14.4755 20 14.8788 19.9934 16.0296 19.9422C16.8117 19.9055 17.3385 19.7996 17.827 19.6106C18.2604 19.4423 18.5752 19.2402 18.9074 18.9085C19.2436 18.5718 19.4445 18.2594 19.6107 17.8283C19.8013 17.3358 19.9071 16.8098 19.9432 16.0289C19.9949 14.9248 20.001 14.5389 20.001 12C20.001 9.52552 19.9944 9.12221 19.9432 7.97137C19.9064 7.18906 19.8005 6.66149 19.6113 6.17318C19.4434 5.74038 19.2417 5.42635 18.9084 5.09255C18.573 4.75715 18.2616 4.55693 17.8271 4.38942C17.338 4.19954 16.8124 4.09396 16.0298 4.05781C14.9258 4.00605 14.5399 4 12.001 4ZM12.001 2C14.7176 2 15.0568 2.01 16.1235 2.06C17.1876 2.10917 17.9135 2.2775 18.551 2.525C19.2101 2.77917 19.7668 3.1225 20.3226 3.67833C20.8776 4.23417 21.221 4.7925 21.476 5.45C21.7226 6.08667 21.891 6.81333 21.941 7.8775C21.9885 8.94417 22.001 9.28333 22.001 12C22.001 14.7167 21.991 15.0558 21.941 16.1225C21.8918 17.1867 21.7226 17.9125 21.476 18.55C21.2218 19.2092 20.8776 19.7658 20.3226 20.3217C19.7668 20.8767 19.2076 21.22 18.551 21.475C17.9135 21.7217 17.1876 21.89 16.1235 21.94C15.0568 21.9875 14.7176 22 12.001 22C9.28431 22 8.94514 21.99 7.87848 21.94C6.81431 21.8908 6.08931 21.7217 5.45098 21.475C4.79264 21.2208 4.23514 20.8767 3.67931 20.3217C3.12348 19.7658 2.78098 19.2067 2.52598 18.55C2.27848 17.9125 2.11098 17.1867 2.06098 16.1225C2.01348 15.0558 2.00098 14.7167 2.00098 12C2.00098 9.28333 2.01098 8.94417 2.06098 7.8775C2.11014 6.8125 2.27848 6.0875 2.52598 5.45C2.78014 4.79167 3.12348 4.23417 3.67931 3.67833C4.23514 3.1225 4.79348 2.78 5.45098 2.525C6.08848 2.2775 6.81348 2.11 7.87848 2.06C8.94514 2.0125 9.28431 2 12.001 2Z"></path></svg>
              </a>
              </div>
                  <div class="x-icon social-icon-bx">
                    <a href="javascript:void(0)" class="social-icon-inner-bx">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M10.4883 14.651L15.25 21H22.25L14.3917 10.5223L20.9308 3H18.2808L13.1643 8.88578L8.75 3H1.75L9.26086 13.0145L2.31915 21H4.96917L10.4883 14.651ZM16.25 19L5.75 5H7.75L18.25 19H16.25Z"></path></svg>
                    </a>
                </div>
                    <div class="linkedin-icon social-icon-bx">
                      <a href="javascript:void(0)" class="social-icon-inner-bx">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 9.55005C12.9181 8.61327 14.1121 8 15.501 8C18.5385 8 21.001 10.4624 21.001 13.5V21H19.001V13.5C19.001 11.567 17.434 10 15.501 10C13.568 10 12.001 11.567 12.001 13.5V21H10.001V8.5H12.001V9.55005ZM5.00098 6.5C4.17255 6.5 3.50098 5.82843 3.50098 5C3.50098 4.17157 4.17255 3.5 5.00098 3.5C5.8294 3.5 6.50098 4.17157 6.50098 5C6.50098 5.82843 5.8294 6.5 5.00098 6.5ZM4.00098 8.5H6.00098V21H4.00098V8.5Z"></path></svg>
                      </a>
                  </div>
                  </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>