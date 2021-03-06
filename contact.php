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
        <!--animated  css-->
        <link href="assets/css/animate.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
      <?php include('header.php'); ?>

        <section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                    Contact us
                </h3>
            </div>
        </section><!--page-tree end here-->
        <!--google map-->
        <div id="map-canvas"></div>
        <!--google map end-->
        <div class="space-70"></div>
        <div class="container">
            <div class="col-md-5">
                <h4 class="heading-mini">We’d Love to Hear From You</h4>
                <p>Get in touch using the contact details below:</p>
                <p>701 High St.</p>
                <p>Suite 210 </p>
                <p>Auburn, CA</p>
                <p>Phone: 916-541-6979</p>
                <p>Phone: 530-802-1718</p>
                <p>Fax: 530-820-39650</p>
                <p>Email: <a href="mailto:philip@steinandsons.com">philip@steinandsons.com</a></p>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <h4 class="heading-mini">Contact us</h4>
                <div class="my-contact-form">
                    <form name="sentMessage" id="contactForm" method="post" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">

                                        <input type="text" class="form-control" placeholder="Name*" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">                   
                                        <input type="email" class="form-control" placeholder="Email Address*" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block"></p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12">
                                <input type="text" class="form-control" placeholder="Subject" id="phone">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls">
                                <textarea rows="5" class="form-control" placeholder="Message*" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12 text-right" style="margin-top: -15px;">
                                <button type="submit" class="btn theme-btn-color btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!--contact page end-->
        <div class="space-70"></div>
        
  <?php include('footer.php'); ?>
  
             <!--scripts-->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/modernizr.custom.97074.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.sticky.js" type="text/javascript"></script>
        <script src="assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.mixitup.min.js" type="text/javascript"></script>
        <script src="assets/js/parallax.min.js" type="text/javascript"></script>
        <script src="assets/js/wow.min.js" type="text/javascript"></script>
         <script src="assets/js/jqBootstrapValidation.js" type="text/javascript"></script>
        <script src="assets/js/contact_me.js" type="text/javascript"></script>
        <script src="assets/js/app.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(38.9020762,-121.0681446);

                var mapOptions = {
                    zoom: 15,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: true,
                    draggable: true
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p style="line-height: 20px;"><strong>Stein and Sons</strong></p><p>701 High St, Suite 201, Auburn CA 95603</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
       

    </body>
</html>
