<!DOCTYPE html>
@@include('./head.html')

  <body id="reservation__page">
		
		<!-- Info Section
    ================================================== -->
		<div class="section__info">
			@@include('./top.html')

    <!-- CONTENT
      ================================================== -->

    <!-- section home -->
    <section class="section__home">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-12">
    	    	<div class="welcome__content">
							<h1 class="welcome_content__title">Réservation</h1>
    					<p class="welcome_content__desc">Contactez-nous pour les réservations</p>
    				</div> <!-- .welcome__content -->
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
			<div class="home__bg"></div>
    </section> <!-- / .section home -->

    <!-- section reservation -->
    <section class="section__reservation">
    	<div class="container">
    	  <div class="row">
    	    <div class="col-sm-5 col-sm-push-7 col-md-4 col-md-push-8">
    	    	<div class="booking__details-body">
    	    		<p class="subheading">Détails de réservation</p>
    	    		<h2 class="section__heading">Aucune chambre sélectionnée</h2>
    	    		<figure class="room__details">
								<img src="http://placehold.it/1024x768" class="img-responsive" alt="...">
								<figcaption>
									<h3>Chambre</h3>
									<div class="room__price">
										$0 <small>/ soir</small>
									</div>
									<p class="room__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis mollitia voluptas vero vel eligendi sint.</p>
								</figcaption>
							</figure> <!-- / .room__details -->
							<ul class="details-info">
                <li>
                  <label>Check in</label>
                  <p>2017-04-09</p>
                </li>
                <li>
                  <label>Check out</label>
                  <p>2017-04-18</p>
                </li>
                <li>
                  <label>Adults</label>
                  <p>2 Person</p>
                </li>
                <li>
                  <label>Children</label>
                  <p>1 Chind</p>
                </li>
                <li>
                  <label>Nights</label>
                  <p>9 Nights</p>
                </li>
                <li>
                  <label>Services</label>
                  <p>$ 65</p>
                </li>
                <li class="total-price">
                  <label>Total price</label>
                  <p>$ 515</p>
                </li>
            </ul>
  	    		</div> <!-- .booking__details-body -->
  	    		<div class="info__body">
							<p class="info__title">Information</p>
							<ul class="info__content">
                <li>
                  <p class="info-text">Si vous avez des questions avec la réservation, contactez-nous.</p>
                </li>
	              <li>
	                <i class="icon ion-android-pin"></i>
	                <div class="info-content">
	                  <div class="title">Addresse</div>
	                  <div class="description">1365 Boulevard René-Lévesque Ouest, Québec, Canada, G1S-1W9</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-call"></i>
	                <div class="info-content">
	                  <div class="title">Téléphone / Téléc</div>
	                  <div class="description">1 (418) 527-3907 /<br />  1 (418) 369-8255</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-mail"></i>
	                <div class="info-content">
	                  <div class="title">E-mail</div>
	                  
	                </div>
					<div class="description">AubergeHotelVillaRoyale@gmail.com</div>
	              </li>
	            </ul> <!-- .info__content -->
  	    		</div> <!-- / .info__body -->
    	    </div>
    	    <div class="col-sm-7 col-sm-pull-5 col-md-8 col-md-pull-4">
    	    	<div class="reservation__form-body">
    	    		<p class="subheading">Formulaire de reservation</p>
    	    		<h2 class="section__heading">Informations personnelles</h2>
    	    		<p class="section__subheading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla ea doloremque tenetur quidem odit repellat omnis beatae obcaecati tempora.</p>

							<!-- Alert message -->
              <div class="alert" id="form_reservation" role="alert"></div>

              <!-- Please carefully read the README.pdf file in order to setup the PHP reservation form properly -->

              <form id="reservation-form_sendemail" class="reservation__form" data-animate-in="animateUp">
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="check-in" class="sr-only">Arrival date</label>
	                  <input type="date" name="check-in" class="form-control" id="check-in" value="2017-04-09">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="check-out" class="sr-only">Departure date</label>
	                  <input type="date" name="check-out" class="form-control" id="check-out" value="2017-04-18">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="form-adults" class="sr-only">Adults</label>
	                  <select class="form-control" name="form-adults" id="form-adults">
                      <option value="1" selected="">Adults</option>
                      <option value="2">1 Adult</option>
                      <option value="3">2 Adults</option>
                      <option value="4">3 Adults</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	              	<div class="form-group">
	                  <label for="form-children" class="sr-only">Children</label>
	                  <select class="form-control" name="form-children" id="form-children">
                      <option value="1" selected="">Children</option>
                      <option value="2">1 Child</option>
                      <option value="3">2 Children</option>
                      <option value="4">3 Children</option>
                  	</select>
	                  <span class="help-block"></span>
	                </div>
	              </div>
              	<div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="first-name" class="sr-only">First name</label>
	                  <input type="text" name="first-name" class="form-control" id="first-name" placeholder="First Name">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
              		<div class="form-group">
	                  <label for="last-name" class="sr-only">Last name</label>
	                  <input type="text" name="last-name" class="form-control" id="last-name" placeholder="Last Name">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="email" class="sr-only">Email</label>
	                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="phone" class="sr-only">Phone</label>
	                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone">
	                  <span class="help-block"></span>
	                </div>
	              </div>
	              <div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="address-line1" class="sr-only">Address line 1</label>
	                  <input type="text" name="address-line1" class="form-control" id="address-line1" placeholder="Address line 1">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="address-line2" class="sr-only">Address line 2</label>
	                  <input type="text" name="address-line2" class="form-control" id="address-line2" placeholder="Address line 2">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="state" class="sr-only">State / Region</label>
	                  <input type="text" name="state" class="form-control" id="state" placeholder="State / Region">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="city" class="sr-only">City</label>
	                  <input type="text" name="city" class="form-control" id="city" placeholder="City">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="country" class="sr-only">Country</label>
	                  <input type="text" name="country" class="form-control" id="country" placeholder="Country">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12 col-md-6">
	                <div class="form-group">
	                  <label for="zip-code" class="sr-only">Zip Code</label>
	                  <input type="text" name="zip-code" class="form-control" id="zip-code" placeholder="Zip code">
	                  <span class="help-block"></span>
	                </div>
              	</div>
              	<div class="col-sm-12">
	                <div class="form-group">
	                  <label for="requirements" class="sr-only">Special requirements</label>
	                  <textarea name="requirements" class="form-control" rows="8" id="requirements" placeholder="Special requirements"></textarea>
	                  <span class="help-block"></span>
	                </div>
              	</div>
               	<div class="col-sm-12">
               		<p>
               			<input type="checkbox" name="checkbox"> I have read and accept <a href="#" class="conditions">the terms and conditions.</a>
               		</p>
               		<button type="submit" class="btn btn-booking">Book now by email</button>
               	</div>
              </form> <!-- .reservation__form -->
            </div> <!-- .reservation__form-body -->
          </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section reservation -->

		<!-- section footer -->
    @@include('./footer.html')

    <!-- 
    ================================================== -->

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
		<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->

  </body>
</html>