<?php
	require "admin/clasess/home.class.php";
	$homeObj = new home();
	
?>
<?php include_once "header.php" ?>

    <div id="content-block">
		<div class="fixed-background" style="background-image: url(img/slider/extra.jpg);">
            <div class="banner-shortcode">
                <div class="banner-frame border-image" style="border-image-source: url(img/background-3_.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="align">
                                <h1 class="h1 light">Testimonials</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<div class="container">
            
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
			
			<div class="row">
                <div class="col-md-12 text-center">
                    <article class="sa">
                        <h3> Testimonials</h3>
                        <!--<p>Three reasons to host you weddings at the Princess Pavilion Grounds:</p>-->
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            <div class="swiper-entry">
                <div class="swiper-button-prev visible-lg"></div>
                <div class="swiper-button-next visible-lg"></div>
                <div class="swiper-container" data-space="30">
                    <div class="swiper-wrapper">
					<?php 
						$getTestimonial_detail = $homeObj->getTestimonial();
						foreach($getTestimonial_detail as $getTestimonial_detail_arr){
					?>
                        <div class="swiper-slide">
                            <div class="row vertical-aligned-columns">
                                <div class="col-sm-7 col-xs-b30 col-sm-b0">
                                    <div class="thumbnail-shortcode-6">
                                        <div class="content">
                                            <div class="layer-1 border border-image" style="border-image-source: url(img/thumbnail-65.jpg);"></div>
                                            <div class="layer-2 background" style="background-image: url(<?php echo $getTestimonial_detail_arr['testimonials_image'];?>);"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="sa">
                                        <!--<h3>Beautiful Landscape</h3>-->
                                        <p><?php echo $getTestimonial_detail_arr['testimonials_desc'];?></p>
                                        <!--<a class="button style-2" href="#">read more</a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php }
							?>
                        
						
						
						
						
                    </div>
                    <div class="swiper-pagination relative-pagination hidden-lg"></div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include_once "footer.php" ?>
    </div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/global.js"></script>

    <script src="js/isotope.pkgd.min.js"></script>

</body>
</html>
