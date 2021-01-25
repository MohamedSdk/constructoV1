<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>constructo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Hora de apertura: (10.00-07.00)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="address_bar d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="address_menu d-flex justify-content-end">
                                <div class="single_address  d-flex">
                                    <div class="icon">
                                        <img src="img/icon/header-address.svg" alt="">
                                    </div>
                                    <div class="address_info">
                                        <h3>Dirección</h3>
                                        <p>C/Manacor 74, Petra, Mallorca</p>
                                    </div>
                                </div>
                                <div class="single_address d-flex">
                                    <div class="icon">
                                        <img src="img/icon/headset.svg" alt="">
                                    </div>
                                    <div class="address_info">
                                        <h3>Llámanos</h3>
                                        <p>+34 673 567 367</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="white_bg_bar">
                        <div class="row align-items-center">
                            <div class="col-12 d-lg-none">
                                <div class="logo ">
                                    <a href="#">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="">home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="project.php">PROYECTOS</a></li>
                                                                                        
                                            <!--<li><a href="#">PROYECTOS <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="project.html">project</a></li>
                                                        <li><a href="project_details.html">project details</a></li>
                                                </ul>
                                            </li>-->
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <div class="project_details_banner">

    </div>
   <!-- Start project details-->
   <!-- Start Service Gallery -->
   <?php  
   $service= $_GET['service'];
   xdebug_break();
   $dir = "img/gallery/".$service;
   xdebug_break();
   $file_display = array('jpg', 'jpeg', 'png', 'gif');
   ?>
   <div class="testimonial_area service-gallery_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                            <div class="section_title text-center mb-55">
                                    <h3><?php echo $service ?></h3>
                                    <br>
                                    <h3>Eche un vistazo a algunas fotos</h3>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                        <?php if(file_exists( $dir ) == false) : ?>
                <?php echo 'Directory \'', $dir, '\' not found!';?>
            <?php else : xdebug_break(); ?>
                <?php $dir_contents = scandir( $dir ); ?>
           
            <?php foreach($dir_contents as $file): ?>
                 <?php  $file_type = strtolower(end( explode('.', $file)));?>

                 <?php if(($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display))): ?>
                                 
				            <div class="single_carousel">
                                <div class="single_testmonial text-center">
                                    <div class="testmonial_author">
                                        <div class="thumb">
                                        <img src="<?php echo $dir ?>/<?php echo $file ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
				 
                 <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>


                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- End Service Gallery -->
<div class="project_details_info">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="border_1px">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="links">
                                            <ul>
                                                <li>
                                                    <a href="#"> <i class="fa fa-facebook"></i>Facebook </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-twitter"></i>Twitter </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fa fa-pinterest-p"></i>Pinterest </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 </div>
   <!-- End project details-->
    <!-- End project details-->
   
    <!-- contact_us_start  -->
    <div class="contact_us overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="contact_text">
                        <h3>Are you looking for a Construction
                            and Industrial Experts?</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="contact_btn">
                        <a class="boxed-btn3" href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact_us_end -->

    <!-- footer_start  -->
    <footer class="footer">
        <div class="download_brochure">
            <div class="container">
                <div class="bordered_1px">
                        <div class="row">
                                <div class="col-lg-6 col-md-6">
                                        <div class="footer_logo">
                                                <a href="#">
                                                    <img src="img/footer_logo.png" alt="">
                                                </a>
                                            </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="download_btn">
                                        <a href="#"> <img src="img/icon/down.svg" alt=""> Download Brochure</a>
                                    </div>
                                </div>
                            </div>
                </div>
                
            </div>
        </div>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Nosotros
                            </h3>
                            <p>C/Manacor 46, Petra <br> Mallorca <br>
                                <a href="#">+34 367 826 2567</a> <br>
                                <a href="#">contact@carpenter.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Popular Searches
                            </h3>
                            <ul>
                                <li><a href="#">Apartment for rent </a></li>
                                <li><a href="#">Office for rent</a></li>
                                <li><a href="#"> Apartment for sale</a></li>
                                <li><a href="#"> Luxuries</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2 offset-xl-1 offset-lg-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#"> Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Mohamed Saddik</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
  <!-- Modal -->
  <!--<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="serch_form">
                <input type="text" placeholder="search" >
                <button type="submit">search</button>
            </div>
          </div>
        </div>
      </div>-->
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }

        });
    </script>
</body>

</html>