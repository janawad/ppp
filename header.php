<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
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

    <style>
	@media (min-width: 1280px) {
	header.type-1 .hamburger-icon{
		display:none;
	}
	}
	@media (min-width: 350px) and (max-width: 760px) {
	.hamburger-icon12{
	display:none;
	}
	}
	@media (min-width: 1280px) {
		.hamburger-icon12 .pp{margin-top:230px;}
	}
	</style>
	
	
    <!-- HEADER -->
    <header class="type-1">
        <div class="header-wrapper">
            <a id="logo" href="index.php"><img src="img/logo.png" alt="" /></a>
            <div class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
			<div class="hamburger-icon12">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
					<script>
					$(document).ready(function(){
						$("#more").click(function(){
							$("#aa").toggle();
						});
					});
					</script>
					<script>
					$(document).ready(function(){
						$("#more1").click(function(){
							$("#aa1").toggle();
						});
					});
					</script>
					<style>
					#aa, #aa1{
					display:none;
					}
					.pp li a{
					font-size:17px;
					line-height:35px;
					padding-left:15px;
					color:#C1220B;
					font-family:Candara;
					}
					.pp li a:hover{
					color:#000;
					}
					@media (min-width: 800px) and (max-width: 1280px) {
					  .pp li a{
					font-size:15px;
				    padding-left:13px;
					}  
					header.type-1{
					    width:105px;
					}
					
					}
					</style>
					
						<ul class="pp">
							<li><a href="index.php">Home</a></li>
							<li><a href="#" id="more">About us</a>  <i class="fa fa-caret-right" aria-hidden="true" style="color:#C1220B;"></i>
								<div class="toggle-menu"></div>
								<ul id="aa">
									<li><a href="about.php">&#183; Who We Are</a></li>
									<li><a href="services.php">&#183; Services</a></li>
								</ul>
							</li>
							<li><a href="#" id="more1">The venue</a>  <i class="fa fa-caret-right" aria-hidden="true" style="color:#C1220B;"></i>
								<div class="toggle-menu"></div>
								<ul id="aa1">
									<li><a href="princess_shrine.php">&#183; Shrine</a></li>
									<li><a href="princess_green.php">&#183; Green</a></li>
								</ul>
							</li>
							<li><a href="portfolio.php">Gallery</a>
							<li><a href="blogs.php">Blog</a></li>
							<li><a href="testimonial.php">Testimonial </a></li>
							<li><a href="client.php">Clientele</a></li>
							<li><a href="contact.php">Contact us</a></li>
						</ul>
					
				
            </div>
            <div class="follow style-1">
                <a class="" href="faq.php" style="font-size:17px;border-radius:0px;background:#fff;color:#C1220B;margin-left: 8px;">Faq</a>
				<a class="entry" href="https://www.facebook.com/princesspavilionbangalore/" target="_blank" style="top: 20px; left: -20px;"><i class="fa fa-facebook"></i></a>
                <a class="entry" href="https://www.instagram.com/princesspavilion01/" target="_blank" style="left: 20px;top:-15px;"><i class="fa fa-instagram"></i></a>
                
            </div>
		</div>
        <div class="navigation-wrapper">
            <nav>
                <ul>
					<li><a href="index.php">Home</a></li>
                    <li><a href="princess_shrine.php">The venue</a>
						<div class="toggle-menu"></div>
                        <ul>
                            <li><a href="princess_shrine.php">Shrine</a></li>
                            <li><a href="princess_green.php">Green</a></li>
                        </ul>
					</li>
					<li><a href="about.php">About us</a>
						<div class="toggle-menu"></div>
                        <ul>
                            <li><a href="about.php">Who We Are</a></li>
                            <li><a href="services.php">Services</a></li>
                        </ul>
					</li>
					<li><a href="blogs.php">Blog</a></li>
                    <li><a href="portfolio.php">Gallery</a></li>
                    <li><a href="testimonial.php">Testimonial </a></li>
                    <li><a href="client.php">Clientele</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </header>