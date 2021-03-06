<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <title>Stein and Sons</title>
        <meta name="description" content="HTML5 & CSS3">
        <meta name="keywords" content="HTML5, CSS3, Theme,bootstrap3,clean design"> 
        <!--bootstrap3 css-->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--ion icon fonts css-->
        <link href="assets/icons/css/ionicons.css" rel="stylesheet">
        <!--custom css-->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!--google  font family-->  
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400italic' rel='stylesheet' type='text/css'>
        <!--flex slider css-->
        <link href="assets/css/flexslider.css" rel="stylesheet">
        <!--animated css-->
        <link href="assets/css/animate.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

      <?php
include('header.php');
?>

        <section id="slider-sec" class="slider-reg">
            <div class="main-flex-slider">
                <ul class="slides">
                    <li>
                        <figure>

                            <img src="assets/img/img-1.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay ">
                                <div class="slider-text animated fadeInDown">
                                    <h1>Easy customization theme</h1>
                                    <p>
                                        Bizwrap theme comes with easy customization
                                    </p>
                                    <p class="slide-btn"><a href="#" class="btn btn-white btn-lg">Purchase Now</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/img/img-2.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay">
                                <div class="slider-text">
                                    <h1>clean and modern design</h1>
                                    <p>
                                        Bizwrap is a Useful theme that you can use for your Business.
                                    </p>
                                    <p class="slide-btn"><a href="#" class="btn btn-white btn-lg">View Portfolio</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img src="assets/img/img-3.jpg" class="img-responsive" alt="slider-img-1">
                            <figcaption class="slider-overlay">
                                <div class="slider-text">
                                    <h1>Perfect for Small Projects</h1>
                                    <p>
                                        Bizwrap mainly design for small business projects.
                                    </p>
                                    <p class="slide-btn"><a href="#" class="btn btn-white btn-lg">Contact us</a></p>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
            </div>
        </section><!--main flex slider end-->
        <div class="space-50"></div>
        <div class="container">
            <div class="row intro-row">
                <div class="col-md-12 text-center wow animated fadeInUp">
                    <h2>Bizwrap built for Minimal business Projects</h2>
                    <h3 class="subtitle">With Clean and Modern Design</h3>
                </div>
                <div class="space-70"></div>
                <div class=" col-sm-4">
                    <div class="services-box">
                        <i class="ion-laptop"></i>
                        <h1>Responsive design</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisl risus, porta sit amet dui eget...
                        </p>
                    </div>
                </div><!--services box-->
                <div class=" col-sm-4">
                    <div class="services-box">
                        <i class="ion-ios-color-wand-outline"></i>
                        <h1>Creative ideas</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisl risus, porta sit amet dui eget...
                        </p>
                    </div>
                </div><!--services box-->
                <div class="col-sm-4">
                    <div class="services-box">
                        <i class="ion-social-twitter-outline"></i>
                        <h1>Bootstrap3</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisl risus, porta sit amet dui eget...
                        </p>
                    </div>
                </div><!--services box-->
            </div><!--row end-->
        </div><!--intro with services end-->
        <div class="space-70"></div><div class="space-30"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading-sec">Recent work</h3>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-4 col-sm-6 margin-btm-40">
                    <div class="portfolio-sec">
                        <div class="portfolio-thumnail">
                            <a href="portfolio-single.html">
                                <img src="assets/img/work/work-1.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="portfolio-desc text-center">
                            <h4 class="portfolio-post-title">portfolio item title here</h4>
                            <span class="portfolio-post-cat">Branding</span>
                            <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                        </div>
                    </div>
                </div><!--portfolio item -->
                <div class="col-md-4 col-sm-6 margin-btm-40">
                    <div class="portfolio-sec">
                        <div class="portfolio-thumnail">
                            <a href="portfolio-single.html">
                                <img src="assets/img/work/work-2.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="portfolio-desc text-center">
                            <h4 class="portfolio-post-title">portfolio item title here</h4>
                            <span class="portfolio-post-cat">Branding</span>
                            <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                        </div>
                    </div>
                </div><!--portfolio item -->
                <div class="col-md-4 col-sm-6 margin-btm-40">
                    <div class="portfolio-sec">
                        <div class="portfolio-thumnail">
                            <a href="portfolio-single.html">
                                <img src="assets/img/work/work-3.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="portfolio-desc text-center">
                            <h4 class="portfolio-post-title">portfolio item title here</h4>
                            <span class="portfolio-post-cat">Branding</span>
                            <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                        </div>
                    </div>
                </div><!--portfolio item -->


                <div class="col-md-4 col-sm-6 margin-btm-40">
                    <div class="portfolio-sec">
                        <div class="portfolio-thumnail">
                            <a href="portfolio-single.html">
                                <img src="assets/img/work/work-4.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="portfolio-desc text-center">
                            <h4 class="portfolio-post-title">portfolio item title here</h4>
                            <span class="portfolio-post-cat">Branding</span>
                            <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                        </div>
                    </div>
                </div><!--portfolio item -->
                <div class="col-md-4 col-sm-6 margin-btm-40">
                    <div class="portfolio-sec">
                        <div class="portfolio-thumnail">
                            <a href="portfolio-single.html">
                                <img src="assets/img/work/work-5.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="portfolio-desc text-center">
                            <h4 class="portfolio-post-title">portfolio item title here</h4>
                            <span class="portfolio-post-cat">Branding</span>
                            <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                        </div>
                    </div>
                </div><!--portfolio item -->
                <div class="col-md-4 col-sm-6 margin-btm-40">
                    <div class="portfolio-sec">
                        <div class="portfolio-thumnail">
                            <a href="portfolio-single.html">
                                <img src="assets/img/work/work-6.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="portfolio-desc text-center">
                            <h4 class="portfolio-post-title">portfolio item title here</h4>
                            <span class="portfolio-post-cat">Branding</span>
                            <h4><a href="portfolio-single.html" class="btn theme-btn-default btn-lg">More detail</a></h4>
                        </div>
                    </div>
                </div><!--portfolio item -->
            </div><!--row portfolio item-->
        </div><!--recent work container end-->
        <div class="space-70"></div>
        <section id="content-region-1" class="padding-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 features">
                        <h3>Our services</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. Praesent gravida dignissim felis, id sagittis mauris rutrum non. Nullam pretium id sem ut hendrerit.
                        </p>
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-laptop"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">100% Responsive layout</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. 
                                </p>
                            </div>
                        </div><!--services list-->
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-ios-barcode-outline"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">Clean code</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. 
                                </p>
                            </div>
                        </div><!--services list-->
                        <div class="space-30"></div>
                        <div class="row">
                            <div class="col-md-3 services-icon">
                                <i class="ion-compose"></i>
                            </div>
                            <div class="col-md-9 services-text">
                                <h4 class="heading-mini">Easy customization</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut ipsum mauris. Fusce condimentum mollis eros vitae facilisis. 
                                </p>
                            </div>
                        </div><!--services list-->


                    </div>
                    <div class="col-md-5">
                        <img src="assets/img/ipad.png" class="img-responsive" alt="">
                    </div>
                </div>

            </div><!--container-->
        </section><!--features end-->
        
		<!--testimonials begin -->

        <section id="content-region-2" class="padding-40 parallax-1">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="testimonials">
                            <ul class="slides">
                                <li>
                                    <p class="testi-text">“In behalf of our family, we would like to thank you for the wonderful job you did during our loss.  I can’t thank you enough for your kindness and thoughtfulness.”<p>
                                        <span class="testi-person">Family of J. Fernandes</span>
                                </li>
                                <li>
                                    <p class="testi-text">“Thank you so much for taking care of our family. It’s service like you demonstrated that brings families back and creates goodwill in the community.”<p>
                                        <span class="testi-person">Family of K. Yamasaki</span>
                                </li>
                                <li>
                                    <p class="testi-text">"I really just want to thank these amazing people, especially Philip, for their help during such a difficult time for me. This is a really special place ran by very special people. Thank you guys so much from the bottom of my heart."<p>
                                        <span class="testi-person">S. Hu</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section> <!--testimonials section end here-->
        
        <div class="space-70"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="heading-sec">Latest news</h3>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-4 col-sm-6 margin-btm-20">
                    <div class="news-sec">
                        <div class="news-thumnail">
                            <a href="blog-post.html">
                                <img src="assets/img/blog/blog-1.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="news-desc">
                            <h3 class="blog-post-title"><a href="blog-post.html" class="hover-color">Lorem ipsum dollor sit amet</a></h3>
                            <span class="news-post-cat">On 26 may 2014 | sports</span>
                            <p>
                                aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                            </p>
                        </div>
                    </div>
                </div><!--latest news items-->
                <div class="col-md-4 col-sm-6 margin-btm-20">
                    <div class="news-sec">
                        <div class="news-thumnail">
                            <a href="blog-post.html">
                                <img src="assets/img/blog/blog-2.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="news-desc">
                            <h3 class="blog-post-title"><a href="blog-post.html" class="hover-color">Lorem ipsum dollor sit amet</a></h3>
                            <span class="news-post-cat">On 26 may 2014 | sports</span>
                            <p>
                                aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                            </p>
                        </div>
                    </div>
                </div><!--latest news items-->
                <div class="col-md-4 col-sm-6 margin-btm-20">
                    <div class="news-sec">
                        <div class="news-thumnail">
                            <a href="blog-post.html">
                                <img src="assets/img/blog/blog-4.jpg" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="news-desc">
                            <h3 class="blog-post-title"><a href="blog-post.html" class="hover-color">Lorem ipsum dollor sit amet</a></h3>
                            <span class="news-post-cat">On 26 may 2014 | sports</span>
                            <p>
                                aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
                            </p>
                        </div>
                    </div>
                </div><!--latest news items-->
            </div><!--row end-->
        </div><!--container recent news end-->
        
     <!--   <div class="newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h3>Get latest news from us</h3>
                        <p>
                            Subscribe to our newsletter
                        </p>
                    </div>
                </div>
                -->
                <!--row-->
<!--
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 text-center">
                        <form method="post" action="#" class="form-subscribe">
                            <input type="text" name="email" placeholder="Email Id..." class="form-control">
                            <button type="submit" name="submit" class="btn theme-btn-color btn-block">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      <div class="cta-bg">
            <div class="container text-center">
                <h3>Simple and Minimal Design
                    <a href="#" class="btn btn-lg btn-white btn-radius">Purchase Now</a>
                </h3>
            </div>
        </div>
        -->


                            <?php
include('footer.php');
?>


        <!--scripts-->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script type='text/javascript' src='assets/js/jquery.placeholder.min.js'></script>
        <script src="assets/js/jquery.sticky.js" type="text/javascript"></script>
        <script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <script src="assets/js/parallax.min.js" type="text/javascript"></script>
        <script src="assets/js/wow.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js" type="text/javascript"></script>
        <script src="assets/js/mailchimp-custom.js" type="text/javascript"></script>
    </body>
</html>
