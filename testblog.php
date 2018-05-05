
<?php
	require "admin/clasess/home.class.php";
	$homeObj = new home();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.extension.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="img/favicon.png" />
  	<title>Princess Pavillion - Princess Shrine</title>
</head>
<body>

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <!-- HEADER -->
	<style>
		#logo img {
		left: 50%;
		max-height: 350%;
		max-width: 350%;
		position: absolute;
		top: 73%;
		transform: translateX(-50%) translateY(-50%);
		}
	</style>
    <header class="type-3 transparent">
        <div class="header-wrapper">
            <a id="logo" href="index.html"><img src="img/logo-1.png" alt="" /></a>
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="follow style-1">
                <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
        <div class="navigation-wrapper">
            <nav>
                <ul>
					<li><a href="index.html">Home</a></li>
                    <li><a href="princess_shrine.html">The venue</a>
						<div class="toggle-menu"></div>
                        <ul>
                            <li><a href="princess_shrine.html">Shrine</a></li>
                            <li><a href="princess_green.html">Green</a></li>
                        </ul>
					</li>
					<li><a href="about.html">About us</a>
						<div class="toggle-menu"></div>
                        <ul>
                            <li><a href="services.html">Services</a></li>
                        </ul>
					</li>
                    <li><a href="portfolio.html">Gallery</a></li>
                    <li><a href="facilities.html">Facilities</a></li>
                    <li><a href="testimonial.html">Testimonial </a>
						<div class="toggle-menu"></div>
                        <ul>
                            <li><a href="blogs.php">Blog</a></li>
							<li><a href="faq.html">Faq</a></li>
                        </ul>
					</li>
                    <li><a href="client.html">Clientele</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div id="content-block">
		<div class="fixed-background" style="background-image: url(img/slider/extra.jpg);">
            <div class="banner-shortcode">
                <div class="banner-frame border-image" style="border-image-source: url(img/background-3_.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align">
                                <h1 class="h1 light">Bring out the wild style in you at your wedding!</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="empty-space col-xs-b40 col-sm-b80"></div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3>Our Blog</h3>
                        <p>Its summer once again and the streets of Bangalore are filled with abundant flowers in full bloom painting the city in mesmerizing tones of reds, pinks, yellows, oranges and purples. These plants start blooming in winter and are laden with full blooming flowers by summer. Since these flowers are pretty and abundantly available in the city, they turn out to be cost-effective. These blooms are perfect for a summer wedding. Here are a few lovely wild flowers which can be used as the décor for Indian weddings</p>
                    </article>
                    <div class="empty-space col-xs-b35 col-sm-b70"></div>
                </div>
            </div>
			<div class="empty-space col-xs-b30 col-sm-b60"></div>

						<div class="tab-entry visible">
                            
							<?php 
								$getAlltestimonial_detail = $homeObj->getAlltestimonial();
								foreach($getAlltestimonial_detail as $getAlltestimonial_detail_arr){
							?>	
                            <div class="empty-space col-xs-b35 col-md-b70"></div>

                            <div class="left-right-entry clearfix">
                                <div class="preview-wrapper">
                                    <img class="preview" src="<?php echo $getAlltestimonial_detail_arr['testimonials_image'];?>" alt="" />
                                </div>
                                <div class="description">
                                    <div class="h5"><?php echo $getAlltestimonial_detail_arr['blog_name'];?></div>
                                    <div class="empty-space col-xs-b15"></div>
                                    <div class="sa small dark"><?php echo $getAlltestimonial_detail_arr['blog_desc'];?></div>
                                    <div class="empty-space col-xs-b15"></div>
                                    <!--<div class="h5">Nulla sed arcu ipsum</div>-->
                                    <!--<div class="empty-space col-xs-b15"></div>
                                    <div class="sa small dark"><?php echo $getAlltestimonial_detail_arr['blog_desc'];?></div>-->
                                </div>
                            </div>
							<?php }
							?>
                        </div>
						
						
						
						
						
						
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
    
        </div>

        <!-- FOOTER -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xs-text-center col-md-text-left">
                        <div class="copyright sa small">&copy; 2017 All rights reserved. Development by <a href="http://www.macle.co.in" target="_blank"><b>Macle Grafics Pvt. Ltd.</b></a>.</div>  
                        <div class="col-xs-b15 visible-xs visible-sm"></div>
                    </div>
                    <div class="col-md-6 col-xs-text-center col-md-text-right">
                        <div class="follow style-1">
                            <a class="entry" href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a class="entry" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="entry" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a class="entry" href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    

    <div class="phone-marker visible-xs"></div><div class="tablet-marker visible-sm"></div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/global.js"></script>

</body>
</html>
