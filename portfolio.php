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
                
				<!--- cmg to database --->
				<?php 
					$getannouncement_detail = $homeObj->getannouncement();
					foreach($getannouncement_detail as $getannouncement_detail_arr){
				?>
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/1.jpg">
                            <img src="<?php echo $getannouncement_detail_arr['announcement_image'];?>" alt="<?php echo $getannouncement_detail_arr['announcement_title'];?>"/>
                            <img src="<?php echo $getannouncement_detail_arr['announcement_image'];?>" alt="<?php echo $getannouncement_detail_arr['announcement_title'];?>" />
                        </a>
                    </div>
                </div>
                <?php }
				?>
				<!--- end cmg to database --->
				
				

                <div class="sorting-item w50 filter-2">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/photographer6.jpg">
                            <img src="img/gallery/photographer6.jpg" alt="" />
                            <img src="img/gallery/photographer6.jpg" alt="" />
                        </a>
                    </div>
                </div>

                

                <div class="sorting-item w50 filter-4">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/photographer4.jpg">
                            <img src="img/gallery/photographer4.jpg" alt="" />
                            <img src="img/gallery/photographer4.jpg" alt="" />
                        </a>
                    </div>
                </div>

                <div class="sorting-item w50 filter-5">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/photographer3.jpg">
                            <img src="img/gallery/photographer3.jpg" alt="" />
                            <img src="img/gallery/photographer3.jpg" alt="" />
                        </a>
                     </div>
                </div>

                <div class="sorting-item w50 filter-2">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/photographer1.jpg">
                            <img src="img/gallery/photographer1.jpg" alt="" />
                            <img src="img/gallery/photographer1.jpg" alt="" />
                        </a>
                     </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/3.jpg">
                            <img src="img/gallery/3.jpg" alt="" />
                            <img src="img/gallery/3.jpg" alt="" />
                        </a>
                        <!--<div class="h6 title"><span class="ht-2"><a href="#">Gallery 1</a></span></div>
                        <div class="sl">Graphic Design / Illustration</div>-->
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/4.jpg">
                            <img src="img/gallery/4.jpg" alt="" />
                            <img src="img/gallery/4.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/5.jpg">
                            <img src="img/gallery/5.jpg" alt="" />
                            <img src="img/gallery/5.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/6.jpg">
                            <img src="img/gallery/6.jpg" alt="" />
                            <img src="img/gallery/6.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/7.jpg">
                            <img src="img/gallery/7.jpg" alt="" />
                            <img src="img/gallery/7.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/8.jpg">
                            <img src="img/gallery/8.jpg" alt="" />
                            <img src="img/gallery/8.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/9.jpg">
                            <img src="img/gallery/9.jpg" alt="" />
                            <img src="img/gallery/9.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/10.jpg">
                            <img src="img/gallery/10.jpg" alt="" />
                            <img src="img/gallery/10.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/11.jpg">
                            <img src="img/gallery/11.jpg" alt="" />
                            <img src="img/gallery/11.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/12.jpg">
                            <img src="img/gallery/12.jpg" alt="" />
                            <img src="img/gallery/12.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/13.jpg">
                            <img src="img/gallery/13.jpg" alt="" />
                            <img src="img/gallery/13.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/14.jpg">
                            <img src="img/gallery/14.jpg" alt="" />
                            <img src="img/gallery/14.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/15.jpg">
                            <img src="img/gallery/15.jpg" alt="" />
                            <img src="img/gallery/15.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/16.jpg">
                            <img src="img/gallery/16.jpg" alt="" />
                            <img src="img/gallery/16.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/17.jpg">
                            <img src="img/gallery/17.jpg" alt="" />
                            <img src="img/gallery/17.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/18.jpg">
                            <img src="img/gallery/18.jpg" alt="" />
                            <img src="img/gallery/18.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/19.jpg">
                            <img src="img/gallery/19.jpg" alt="" />
                            <img src="img/gallery/19.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/20.jpg">
                            <img src="img/gallery/20.jpg" alt="" />
                            <img src="img/gallery/20.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/21.jpg">
                            <img src="img/gallery/21.jpg" alt="" />
                            <img src="img/gallery/21.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/22.jpg">
                            <img src="img/gallery/22.jpg" alt="" />
                            <img src="img/gallery/22.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/23.jpg">
                            <img src="img/gallery/23.jpg" alt="" />
                            <img src="img/gallery/23.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/24.jpg">
                            <img src="img/gallery/24.jpg" alt="" />
                            <img src="img/gallery/24.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/25.jpg">
                            <img src="img/gallery/25.jpg" alt="" />
                            <img src="img/gallery/25.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/26.jpg">
                            <img src="img/gallery/26.jpg" alt="" />
                            <img src="img/gallery/26.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/27.jpg">
                            <img src="img/gallery/27.jpg" alt="" />
                            <img src="img/gallery/27.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/28.jpg">
                            <img src="img/gallery/28.jpg" alt="" />
                            <img src="img/gallery/28.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/29.jpg">
                            <img src="img/gallery/29.jpg" alt="" />
                            <img src="img/gallery/29.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/30.jpg">
                            <img src="img/gallery/30.jpg" alt="" />
                            <img src="img/gallery/30.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/31.jpg">
                            <img src="img/gallery/31.jpg" alt="" />
                            <img src="img/gallery/31.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/32.jpg">
                            <img src="img/gallery/32.jpg" alt="" />
                            <img src="img/gallery/32.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/33.jpg">
                            <img src="img/gallery/33.jpg" alt="" />
                            <img src="img/gallery/33.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/34.jpg">
                            <img src="img/gallery/34.jpg" alt="" />
                            <img src="img/gallery/34.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/35.jpg">
                            <img src="img/gallery/35.jpg" alt="" />
                            <img src="img/gallery/35.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/36.jpg">
                            <img src="img/gallery/36.jpg" alt="" />
                            <img src="img/gallery/36.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/37.jpg">
                            <img src="img/gallery/37.jpg" alt="" />
                            <img src="img/gallery/37.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/38.jpg">
                            <img src="img/gallery/38.jpg" alt="" />
                            <img src="img/gallery/38.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/39.jpg">
                            <img src="img/gallery/39.jpg" alt="" />
                            <img src="img/gallery/39.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/40.jpg">
                            <img src="img/gallery/40.jpg" alt="" />
                            <img src="img/gallery/40.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/41.jpg">
                            <img src="img/gallery/41.jpg" alt="" />
                            <img src="img/gallery/41.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/42.jpg">
                            <img src="img/gallery/42.jpg" alt="" />
                            <img src="img/gallery/42.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/44.jpg">
                            <img src="img/gallery/44.jpg" alt="" />
                            <img src="img/gallery/44.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/46.jpg">
                            <img src="img/gallery/46.jpg" alt="" />
                            <img src="img/gallery/46.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/47.jpg">
                            <img src="img/gallery/47.jpg" alt="" />
                            <img src="img/gallery/47.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/48.jpg">
                            <img src="img/gallery/48.jpg" alt="" />
                            <img src="img/gallery/48.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/49.jpg">
                            <img src="img/gallery/49.jpg" alt="" />
                            <img src="img/gallery/49.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/50.jpg">
                            <img src="img/gallery/50.jpg" alt="" />
                            <img src="img/gallery/50.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/51.jpg">
                            <img src="img/gallery/51.jpg" alt="" />
                            <img src="img/gallery/51.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/52.jpg">
                            <img src="img/gallery/52.jpg" alt="" />
                            <img src="img/gallery/52.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/53.jpg">
                            <img src="img/gallery/53.jpg" alt="" />
                            <img src="img/gallery/53.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/54.jpg">
                            <img src="img/gallery/54.jpg" alt="" />
                            <img src="img/gallery/54.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/55.jpg">
                            <img src="img/gallery/55.jpg" alt="" />
                            <img src="img/gallery/55.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/56.jpg">
                            <img src="img/gallery/56.jpg" alt="" />
                            <img src="img/gallery/56.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/57.jpg">
                            <img src="img/gallery/57.jpg" alt="" />
                            <img src="img/gallery/57.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/58.jpg">
                            <img src="img/gallery/58.jpg" alt="" />
                            <img src="img/gallery/58.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
               
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/61.jpg">
                            <img src="img/gallery/61.jpg" alt="" />
                            <img src="img/gallery/61.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
                <div class="sorting-item w50 filter-1">
                    <div class="portfolio-preview-4">
                        <a class="mouseover-1 lightbox" href="img/gallery/62.jpg">
                            <img src="img/gallery/62.jpg" alt="" />
                            <img src="img/gallery/62.jpg" alt="" />
                        </a>
                    </div>
                </div>
                
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
