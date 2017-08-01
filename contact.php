<?php
include('header.php');
?>

<div class="contact">
    <section class="page-title">
		<div class="container-fluid">
			<div class="row">
				<h1>Contact us</h1>
			</div>
		</div>	
	</section>
	
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="content-full-width">
						<div class="container">
							<div class="row">
                                <div class="col-md-6 col-md-offset-1">
                                    <h2>Kindly contact us by completing the form below</h2>
                                </div>
							    <div class="col-md-3 col-md-offset-1">
							        <h2 class="text-left">Contact</h2>
							        
							        <ul class="list-unstyled list-inline footer-contact-details">
                            
                                         <li>
                                            <div class="box text-center"><img src="img/phone-26x23.svg" width="26px" height="23px"></div>
                                             <div class="contact-detail">21/27 697474   /   21809249</div> 
                                         </li>

                                          <li>
                                             <div class="box text-center"><img src="img/mobile-14x23.svg" width="14px" height="23px"></div>
                                             <div class="contact-detail">99493216   /   99492909</div> 
                                         </li>

                                          <li>
                                             <div class="box text-center"><img src="img/email-26x23.svg" width="26px" height="23px"></div>
                                             <div class="contact-detail">info@timecare.com.mt</div> 
                                         </li>
                                         <li>
                                            <div class="box text-center"><img src="img/address-24x23.svg" width="24px" height="24px"></div>
                                            <div class="contact-detail">260, Sisters Street,<br>Tarxien<br>TXN1048<br>Malta</div>
                                         </li>
                                         
                                         
                                         <div id="googleMap1" style="width:16.4375em; height:10.1875em;"></div>
                                         <script>
                                            function myMap() {
                                                var uluru = {lat: 35.893683, lng: 14.473956};
                                                var map = new google.maps.Map(document.getElementById('googleMap1'), {
                                                  zoom: 15,
                                                  center: uluru
                                                });
                                                var marker = new google.maps.Marker({
                                                  position: uluru,
                                                  map: map
                                                });
                                                
                                         }
                                             </script>
                                         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG_USvvPI8tHcHJzMrqmwtkKsjMZQTtG0
&callback=myMap"></script>
                             
                                    </ul>
                                    
                                         <a class="fb-btn" href="">
                                             <img src="img/facebook-black.svg" width="32px" height="32px">
                                             <div class="contact-detail">Follow us on Facebook!</div>
                                         </a>
							    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
</div>

<?php
include('footer.php');
?>