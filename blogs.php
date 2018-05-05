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
								$getblog_detail = $homeObj->getblog();
								foreach($getblog_detail as $getblog_detail_arr){
							?>	
                            <div class="empty-space col-xs-b35 col-md-b70"></div>

                            <div class="left-right-entry clearfix">
                                <div class="preview-wrapper">
                                    <img class="preview" src="<?php echo $getblog_detail_arr['blog_image'];?>" alt="" />
                                </div>
                                <div class="description">
                                    <div class="h5"><?php echo $getblog_detail_arr['blog_title'];?></div>
                                    <div class="empty-space col-xs-b15"></div>
                                    <div class="sa small dark" style="font-size:16px;"><?php echo $getblog_detail_arr['blog_desc'];?></div>
                                    <div class="empty-space col-xs-b15"></div>
                                    <!--<div class="h5">Nulla sed arcu ipsum</div>-->
                                    <!--<div class="empty-space col-xs-b15"></div>
                                    <div class="sa small dark"><?php echo $getblog_detail_arr['blog_desc'];?></div>-->
                                </div>
                            </div>
							<?php }
							?>
                        </div>
						
						
						
						
						
						
            <div class="empty-space col-xs-b45 col-sm-b90"></div>
    
        </div>

        <!-- FOOTER -->
        <?php include_once "footer.php" ?>
    </div>

    

    <div class="phone-marker visible-xs"></div><div class="tablet-marker visible-sm"></div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/global.js"></script>

</body>
</html>
