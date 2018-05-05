<?php
	require "admin/clasess/home.class.php";
	$homeObj = new home();
	
?>
<?php include_once "header.php" ?>

    <div id="content-block">

        <div class="container-fluid">

            <div class="empty-space col-xs-b40 col-sm-b80"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <article class="sa">
                        <h3 style="text-align:center;">Look At What We Have Done</h3>
                    </article>
                    <div class="empty-space col-xs-b25 col-sm-b50"></div>
                </div>
            </div>
            

            <div class="sorting-container portfolio-4">
                <div class="grid-sizer w50"></div>
                <?php 
								$getAllgallery_detail = $homeObj->getAllgallery();
								foreach($getAllgallery_detail as $getAllgallery_detail_arr){
							?>
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/1.jpg">
                            <img src="<?php echo $getAllgallery_detail_arr['testimonials_image'];?>" alt="" title="anil"/>
                            <img src="<?php echo $getAllgallery_detail_arr['testimonials_image'];?>" alt="" title="anil"/>
                        </a>
                    </div>
                </div>
                <?php }
							?>
                
                
            </div>
        </div>


        <!-- FOOTER -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xs-text-center col-md-offset-3">
                        <div class="copyright sa small">&copy; 2017 All rights reserved. Development by <a href="http://www.macle.co.in" target="_blank"><b>Macle Grafics Pvt. Ltd.</b></a>.</div>  
                        <div class="col-xs-b15 visible-xs visible-sm"></div>
                    </div>
                    
                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/global.js"></script>

    <script src="js/isotope.pkgd.min.js"></script>

    <!-- lightbox -->
    <link href="css/simplelightbox.css" rel="stylesheet" type="text/css" />
    <script src="js/simple-lightbox.min.js"></script>

</body>
</html>
