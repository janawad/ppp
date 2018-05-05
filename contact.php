<?php include_once "header.php" ?>

    <div id="content-block">

        <div class="container-fluid wide">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-lg-offset-1">
                    <div class="cell-view full-screen-height text-center">
                        <div class="empty-space col-xs-b30"></div>
                        <article class="sa">
                            <h3>Contact Us</h3>
                            <p>Princess Pavilion,<br>Princess Academy Opp.Bimal Hero Mekri circle,<br> Bellary road Bangalore – 80 Gate no. 9</p>
                        </article>
                        <div class="empty-space col-xs-b25 col-sm-b50"></div>
                        <div class="sa col-xs-b10">
                            <b>Tel.:</b> <a href="tel:080-23610016">080-23610016</a><br/>
                            <b>&nbsp;&nbsp;</b>&nbsp;&nbsp; <a href="tel:+91-9739432553">+91-9739432553</a><br/>
                        </div>
                        <div class="sa col-xs-b10">
                            <b>Email:</b> <a href="mailto:princesspavilion@gmail.com">princesspavilion@gmail.com</a>
                        </div>
						
                        
                        <div class="empty-space col-xs-b25 col-sm-b50"></div>
						
									
										<div class="jx-contact-form">
											<?php
												if(isset($_REQUEST['msg'])){
													if($_REQUEST['msg']="success"){
														$message="Thank you for applying";
														$color="green";
													}elseif($_REQUEST['msg']="error"){
														$message="Oh Oh! Something went wrong! Please try again.";
														$color="red";
													}
												}
											?>
											<h5 style="color:<?php echo $color;?>; text-align:center;"><?php echo $message; ?></h5><br>
						
											<form action="send_mail.php" id="contactForm" method="post">
												<div class="row">
													<div class="col-sm-6">
														<div class="simple-input-wrapper">
															<input class="simple-input" value="" type="text" placeholder="Name" name="name" required />
															<span></span>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="simple-input-wrapper">
															<input class="simple-input" value="" type="text" placeholder="Email" name="email" required/>
															<span></span>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="simple-input-wrapper">
															<input class="simple-input" value="" type="text" placeholder="Phone Number" name="number" required/>
															<span></span>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="simple-input-wrapper">
															<input class="simple-input" value="" type="text" placeholder="When is the event (DD/MM/YYYY)?" name="time" required/>
															<span></span>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="simple-input-wrapper">
															<!--<input class="simple-input" value="" type="text" placeholder="Event type" name="event_type" />-->
															<select class="simple-input" name="event_type" required>
																<option value="" disabled selected>Event Type</option>
																<option value="Marriage/reception">Marriage/reception</option>
																<option value="Marriage only">Marriage only</option>
																<option value="Reception only">Reception only</option>
																<option value="Engagement">Engagement</option>
																<option value="Sangeet/mehendi">Sangeet/mehendi</option>
																<option value="Naming ceremony">Naming ceremony</option>
																<option value="Birthday">Birthday</option>
																<option value="Corporate gathering">Corporate gathering</option>
																<option value="Exhibition">Exhibition</option>
																<option value="Training">Training</option>
																<option value="Others">Others	</option>
															</select>
															<span></span>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="simple-input-wrapper">
															<!--<input class="simple-input" value="" type="text" placeholder="Venue" name="venue" />
															<span></span>-->
															<select name="venue" class="simple-input" required>
																<option value="" disabled selected>Venue</option>
																<option value="Princess Shrine">Princess Shrine</option>
																<option value="Princess Green">Princess Green</option>
															</select>
															<span></span>
														</div>
													</div>
												</div>
												<div class="empty-space col-xs-b10"></div>
											    <div class="button">submit<input type="submit"/></div>
												
											</form>

										</div>
									
                       
                        <div class="empty-space col-xs-b30"></div>
                    </div>
                </div>
            </div>

            <!--<div class="map-inst style-1" id="map-canvas" data-lat="34.0151244" data-lng="-118.4729871" data-zoom="14"></div>
            <div class="addresses-block hidden" data-rel="map-canvas">
                <a class="marker" data-lat="34.0151244" data-lng="-118.4729871" data-string="1. Here is some address or email or phone or something else..."></a>
            </div>-->
            <br/><br/>
			<div class="map-inst style-1" style="top:10%;"><iframe width="100%" height="600" src="https://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=600&hl=ru&coord=13.004453,77.58380090000003&q=Princess%20Academy%20Opp.%20Bimal%20Hero%20Mekri%20circle%20Bellary%20road%20Bangalore%20%E2%80%93%2080+(Princess%20Pavilion)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br />
        </div>
                
		
		
        <!-- FOOTER -->
        <?php include_once "footer.php" ?>
    </div>

    

    <div class="phone-marker visible-xs"></div><div class="tablet-marker visible-sm"></div>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/global.js"></script>

    <!-- MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/map.js"></script>

    <!-- CONTACT -->
    <script src="js/contact.form.js"></script>

</body>
</html>
