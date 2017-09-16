<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Auberge Maison Roy</title>

    <!-- CSS Plugins -->
    <link href="assets/plugins/lightbox/dist/css/lightbox.css" rel="stylesheet">
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/dist/assets/owl.theme.default.min.css">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="assets/css/theme.css">
    <!--endbuild-->

  </head>

  <body id="index__page">
		
		<!-- Info Section
    ================================================== -->
		<div class="section__info">
			
			<div class="container">
				<div class="section_info__body">
					<div class="info__column-left">
						<div class="section_info__contact hidden-xs">
							<p>
								<i class="icon ion-android-pin"></i> 1365 Boulevard René-Lévesque Ouest, Québec, Canada, G1S-1W9
							</p>	
						</div> <!-- .section_info__contact -->
						<div class="section_info__contact hidden-xs">
							<p>
								<i class="icon ion-android-call"></i> (418) 527-3907
							</p>	
						</div> <!-- .section_info__contact -->
					</div> <!-- .info__column-left -->
					<div class="info__column-right">
						<ul class="social__icons">
		          <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
		          <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
		          <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
		        </ul> <!-- .social__icons -->
		        <div class="dropdown lang-menu">
						  <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    Français
						    <i class="icon ion-chevron-down"></i>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						    <li><a href="#">Français</a></li>
						    <li><a href="#">Chinese</a></li>
						    <li><a href="#">Spanish</a></li>
							<li><a href="#">(translation functionality to be done in phase 2)</a></li>
						  </ul>
						<!-- .lang-menu -->
						<!-- </div> <form class="search-form hidden-xs" role="search">
						  <div class="form-group">
						    <input type="text" class="form-control" placeholder="Search">
						  </div>
						  <button type="submit" class="btn btn-default btn-search"><i class="icon ion-search"></i></button>
						</form> --> <!-- .search-form -->
		      </div> <!-- .info__column-right -->
				</div> <!-- .section_info__body -->
			</div> <!-- .container -->
		</div> <!-- .section__info -->

  	<!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-default">
      <div class="container">
    
        <!-- Header -->
        <div class="navbar-header">

          <!-- Collapse toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Logo -->
          <a class="navbar-brand" href="index.html">
            <h1 class="navbar-brand__logo">Maison Roy</h1>
            <p class="navbar-brand__sublogo">Auberge</p>
          </a>

        </div> <!-- / .navbar-header -->
    
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="index.html">Home</a></li>
            <li><a href="historique.html">Historique</a></li>
            <li><a href="rooms.html">Chambres</a></li>
	          </ul>
	        </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="reservation.html">Réservation</a></li>
            <li><a href="gallery-boxed.html">Galerie</a></li>
            <li><a href="contacts.html">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->
    </nav>

    <!-- CONTENT
      ================================================== -->

    <!-- section home -->
    <section class="section__home" id="section__home">
    	<div class="container">
    		<div class="row">
  	    	<div class="col-sm-12">
  	    		<div class="welcome__content">
							<h1 class="welcome_content__title">Maison Roy</h1>
							<p class="welcome_content__title-primary">Auberge</p>
	  					<p class="welcome_content__desc">Vous êtes chez-nous chez-vous!</p>
	  					<a href="#section__about" class="btn btn-reservation">Explorer</a>
		  			</div> <!-- .welcome__content -->
    	    </div>
	    	</div> <!-- / .row -->
    	</div> <!-- / .container -->
      <div class="home-parallax__bg" style="transform: translateY(0px);"></div>
    </section> <!-- / .section__home -->

    <!-- section availability -->
	<section class="section__availability"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-sm-12"> 

					<!-- Reservation form --> 
					<form class="reservation__form"> 
						<div class="form-group">
							<div class="form-group__inner"> 
								<label for="reservation__check-in">Date D'Arrivée</label>
								<input type="text" class="form-control date" id="reservation__check-in" value="24 December 2017"> 
							</div> <!-- / .form-group__inner --> 
						</div> <!-- / .form-group --> 
						<div class="form-group"> 
							<div class="form-group__inner"> 
								<label for="reservation__check-out">Date De Départ</label>
								<input type="text" class="form-control date" id="reservation__check-out" value="12 January 2018">
							</div> <!-- / .form-group__inner --> 
						</div> <!-- / .form-group --> 
						<div class="form-group"> 
							<div class="form-group__inner"> 
								<label for="reservation__adults">Adultes</label>
								<input type="text" id="reservation__adults">
								<div class="dropdown reservation-dropdown">
								  <button class="dropdown-toggle" type="button" id="adults-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    <span>1 Adulte(s)</span>
								    <i class="icon ion-chevron-down"></i>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="adults-dropdown">
								    <li><a href="#">1 Adulte</a></li>
								    <li><a href="#">2 Adultes</a></li>
								    <li><a href="#">3 Adultes</a></li>
								  </ul>
								</div> <!-- . -->
							</div> <!-- / .form-group__inner --> 
						</div> <!-- / .form-group --> 
						<div class="form-group"> 
							<div class="form-group__inner">
								<label for="reservation__children">Enfants</label>
								<input type="text" id="reservation__children">
								<div class="dropdown reservation-dropdown">
								  <button class="dropdown-toggle" type="button" id="children-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								    <span>1 Enfant</span>
								    <i class="icon ion-chevron-down"></i>
								  </button>
								  <ul class="dropdown-menu" aria-labelledby="children-dropdown">
								    <li><a href="#">1 Enfant</a></li>
								    <li><a href="#">2 Enfants</a></li>
								    <li><a href="#">3 Enfants</a></li>
								  </ul>
								</div> <!-- . -->
							</div> <!-- / .form-group__inner --> 
						</div> <!-- / .form-group -->  
					</form> <!-- / .reservation__form --> 

				</div> 
			</div> <!-- / .row -->
			<div class="row"> 
				<div class="col-xs-12">

					<!-- Reservation button --> 
					<div class="reservation__button">
						<button type="submit" class="btn btn-reservation">Contactez-nous pour connaître la disponibilité</button>
					</div> <!-- / .reservation__button -->  
					
				</div> 
			</div> <!-- / .row -->  
		</div> <!-- / .container --> 
	</section> <!-- .section__availability -->
	   
	<!-- section about -->
    <section class="section__about" id="section__about">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12"> 		  	
    				<h2 class="section__title">Bienvenue à<br /><strong>L'Auberge Maison Roy</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    			</div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container-fluid">
    		<div class="row">
		    	<div class="section_about__content">
		    	  <div class="col-md-6">
		    	  	<div class="about__pic">
		    				<img src="assets/img/quebec_night.jpg" class="img-responsive" alt="...">
		    			</div> <!-- / .about__pic -->
		    	  </div>
		    	  <div class="col-md-6">
			    	  <div class="about__desc">
			    	  	<p class="about_desc__subtitle">À propos de nous:</p>
			  				<h3 class="about_desc__title">Au coeur de la ville de Québec!</h3>
								<p class="about_desc__desc">L’Auberge Maison Roy est l’endroit tout indiqué pour votre séjour dans la vieille Capitale. À deux pas du parc des Bois-de-Coulonge, vous pourrez profiter de votre promenade jusqu’aux Plaines D’Abraham et découvrir l’histoire du champs de bataille et commencer votre excursion dans le Vieux Québec par la terrasse Dufferin surplombée du Château Frontenac.</p>
								<h4 class="about_desc__quote">L’Auberge Maison Roy vous offre 9 chambres à coucher confortables avec Salle-de bains privées, déjeuner $2.49, Internet sans fil, un grand stationnement réservé pour notre clientèle et un service attentionné à des prix compétitifs.<br /><br />
								Nous nous réjouissons déjà de votre présence.</h4>
								<a href="historique.html" class="btn btn-default">Apprendre encore plus</a>
			  			</div> <!-- / .about__desc -->
		    	  </div>
		    	</div> <!-- / .section_about__content -->
		    </div> <!-- / .row -->
    	</div>
	    
    </section> <!-- / .section__about -->
		
		<!-- section best-rooms -->
    <section class="section__best-rooms">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title">Nos <strong>Meilleures Chambres</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<!-- <p class="section__subtitle">Nos Chambres:</p> -->
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="best-rooms__content">
		    	<div class="row">
		    	  <div class="col-sm-6">
		    	  	<figure class="best-rooms__item">
	    	  			<img src="assets/img/chambre-205.jpg" class="img-responsive" alt="...">
								<figcaption>
									<h3>Chambre 205</h3>
									<div class="item__price">
										$119.95 / $89.95 <small>par nuit</small>
									</div>
									<p class="item__desc">Supérieure de luxe avec 1 grand lit King size.<br />Les prix varient selon la saison et le nombre d'occupants.</p>
									<a href="reservation.html" class="btn-book">Reserve maintenant <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
								</figcaption>
							</figure> <!-- / .best-rooms__item -->
		    	  </div>
		    	  <div class="col-sm-6">
		    	  	<figure class="best-rooms__item">
								<img src="assets/img/chambre-216.jpg" class="img-responsive" alt="...">
								<figcaption>
									<h3>Chambre 216</h3>
									<div class="item__price">
										$119.95 / $89.95 <small>par nuit</small>
									</div>
									<p class="item__desc">1 lit Queen size.<br /> Les prix varient selon la saison et le nombre d'occupants.</p>
									<a href="reservation.html" class="btn-book">Reserve maintenant <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
								</figcaption>
							</figure> <!-- / .best-rooms__item -->
		    	  </div>
		    	</div> <!-- / .row -->
		    	<div class="row">
		    	  <div class="col-sm-6">
		    	  	<figure class="best-rooms__item">
								<img src="assets/img/chambre-217.jpg" class="img-responsive" alt="...">
								<figcaption>
									<h3>Chambre 217</h3>
									<div class="item__price">
										$119.95 / $89.95 <small>par nuit</small>
									</div>
									<p class="item__desc">1 lit Queen size.<br /> Les prix varient selon la saison et le nombre d'occupants.</p>
									<a href="reservation.html" class="btn-book">Reserve maintenant <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
								</figcaption>
							</figure> <!-- / .best-rooms__item -->
		    	  </div>
		    	  <div class="col-sm-6">
			    	  <figure class="best-rooms__item">
								<img src="assets/img/chambre-206.jpg" class="img-responsive" alt="...">
								<figcaption>
									<h3>Chambre 206</h3>
									<div class="item__price">
										$129.95 / $89.95 <small>par nuit</small>
									</div>
									<p class="item__desc">Studio avec lit Queen size et lit sofa. <br /> Les prix varient selon la saison et le nombre d'occupants.</p>
									<a href="reservation.html" class="btn-book">Reserve maintenant <i class="icon ion-chevron-right"></i><i class="icon ion-chevron-right"></i></a>
								</figcaption>
							</figure> <!-- / .best-rooms__item -->
		    	  </div>
		    	</div> <!-- / .row -->
		    	<div class="row">
			    	<div class="col-xs-12">
			    		<div class="rooms__button">
			    			<a href="rooms-1.html" class="btn">Voir toutes les chambres</a>
			    		</div> <!-- / .rooms__button -->
			    	</div>
		    	</div> <!-- / .row -->
		    </div> <!-- / .best-rooms__content -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__best-rooms -->

    <!-- section services -->
    <section class="section__services">
    	<div class="container-fluid">
		    <div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Chambres de qualité</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc"></p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Ambiance chaleureuse</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc"></p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Prix compétitifs</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc"></p>
						</div> <!-- .services__item -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="services__item">
							<h2 class="services_item__title">Petit déjeuner $3.00</h2>
							<div class="services_item__divider">
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
								<i class="icon ion-android-star"></i>
							</div> <!-- .services_item__divider -->
							<p class="services_item__desc"></p>
						</div> <!-- .services__item -->
					</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__services -->

    <!-- section gallery -->
    <section class="section__gallery">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title">Our <strong>Gallery</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<!-- <p class="section__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti sit dicta quae natus quasi ratione quis id, tenetur atque blanditiis aperiam mollitia enim corporis ex praesentium reprehenderit.</p> -->
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container-fluid">
		    <div class="row">
		    	<div class="col-xs-12">
		    		<div id="gallery__carousel" class="owl-carousel owl-theme gallery__body">
		    			<div class="gallery__item">
	              <a href="assets/img/exterieur.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/exterieur-tn.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/home_bg.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/home_bg.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="assets/img/salle-de-bain.jpg" data-lightbox="gallery" data-title="Your caption">
	                <img src="assets/img/salle-de-bain-tn.jpg" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
	            <div class="gallery__item">
	              <a href="http://placehold.it/1920x1280" data-lightbox="gallery" data-title="Your caption">
	                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
	              </a>
	            </div> <!-- .gallery__item -->
		    		</div> <!-- .gallery__body -->
		    	</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__gallery -->

    <!-- section testimonials -->
    <section class="section__testimonials">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title"><strong>Testimonials</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    				<p class="section__subtitle testimonials__subtitle">Voici ce que certains de nos clients ont à dire à propos de nous! <br />
					<a href="https://www.booking.com/hotel/ca/auberge-maison-roy.fr.html#tab-reviews" style="color:white;">La page de vos commentaires Booking.com </a></p>
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container">
    		<div class="row">
					<div class="col-xs-12">
		    		<div id="testimonials__carousel" class="owl-carousel owl-theme testimonials__body">
		    			<div class="testimonials__wrapper">
		    				<div class="testimonials__item">
				    			<div class="testimonials__img">
				    				<img src="http://placehold.it/128x128" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Elena</h3>
		              	<p class="testimonials_caption__prof">(IT)</p>
		              	<p class="testimonials_caption__text">"camera abbastanza piccola. colazione sufficiente. la struttura e molto comoda per raggiungere con l'autobus il centro storico diQuébec. "</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
		    			</div><!-- .testimonials__wrapper -->
		    			<div class="testimonials__wrapper">
		            <div class="testimonials__item">
		              <div class="testimonials__img">
				    				<img src="http://placehold.it/128x128" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Augusta</h3>
		              	<p class="testimonials_caption__prof">(NL)</p>
		              	<p class="testimonials_caption__text">" Prima plek! Ontbijt was eenvoudig maar goed! Bijzonder aardige owner, best ver van downtown maar bus stopt min of meer voor de deur. Uitstekende verbinding. Prima plek. Enige minpuntje is gehorigheid. Wij lagen vroeg in bed, andere gasten kwamen later luidruchtig binnen, waardoor we wakker werden. Eigenaar verontschuldigde zich meerdere malen. Obtbijt maakte veel goed😊 "</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
							</div><!-- .testimonials__wrapper -->
		          <div class="testimonials__wrapper">
		            <div class="testimonials__item">
		              <div class="testimonials__img">
				    				<img src="http://placehold.it/128x128" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Angela</h3>
		              	<p class="testimonials_caption__prof">(CA)</p>
		              	<p class="testimonials_caption__text">"Great value for your money! The room was cozy and the beds were very comfortable. The manager/owner was super friendly and took the time to chat with us each day, answering all of our questions and giving us great advice about things to see and do. The location was also fantastic. In a quiet area just minutes from Old Quebec. Would definitely go back!"</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
	           	</div><!-- .testimonials__wrapper -->
	           	<div class="testimonials__wrapper">
		            <div class="testimonials__item">
		              <div class="testimonials__img">
				    				<img src="http://placehold.it/128x128" class="img-responsive" alt="...">
				    			</div>
		              <div class="testimonials__caption">
		              	<h3 class="testimonials_caption__name">Benjamin.breard</h3>
		              	<p class="testimonials_caption__prof">(FR)</p>
		              	<p class="testimonials_caption__text">"Petit hôtel très bien situé. Un changement de propriétaire a eu lieu et le personnel est en rodage mais montre une réelle volonté de bien faire avec l existant. Les équipements (sanitaires, climatisation, insonorisation) auraient besoin de rénovation."</p>
		              </div> <!-- .testimonials__caption -->
		            </div> <!-- .testimonials__item -->
	           	</div><!-- .testimonials__wrapper -->
	           	
	           	
		    		</div> <!-- .testimonials__body -->
		    	</div>
		    </div> <!-- / .row -->
	    </div> <!-- / .container -->
    </section> <!-- / .section__testimonials -->

    <!-- section Events -->
    <section class="section__events">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title">Nouvelles Locales <strong>& Événements</strong></h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-3 col-lg-push-9">
						<div class="news__title">
							<div>News</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">15</p>
                		<p class="item_date__mounth">March</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>News post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="index.html">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">18</p>
                		<p class="item_date__mounth">March</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>News post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 7 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="index.html">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-lg-pull-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">21</p>
                		<p class="item_date__mounth">March</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>News post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 9 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="index.html">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
	      </div> <!-- / .row -->
	      <div class="row">
	      	<div class="col-xs-12 hidden-xs col-sm-6 col-md-6 col-lg-3">
	      		<div class="events__title">
							<div>Events</div>
						</div>
	      	</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="events__item ">
							<div class="events-item__img">
                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">11</p>
                		<p class="item_date__mounth">April</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>Event post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 2 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="index.html">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">14</p>
                		<p class="item_date__mounth">April</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>Event post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 11 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="index.html">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
						<div class="events__item">
							<div class="events-item__img">
                <img src="http://placehold.it/1920x1280" class="img-responsive" alt="...">
              </div>
              <div class="events-item__body">
                <div class="events-item__header">
                	<div class="events-item__date">
                		<p class="item_date__nbr">16</p>
                		<p class="item_date__mounth">April</p>
                	</div> <!-- .events-item__date -->
                	<div class="events-item__content">
                		<div class="events-item__title">
		                  <h3>Event post title</h3>
		                </div>
		                <div class="events-item__info">
		                  <ul class="item-info__list">
		                    <li class="info-list__item"><i class="ion ion-android-person"></i> by John Doe</li>
		                    <li class="info-list__item"><i class="ion ion-android-chat" aria-hidden="true"></i> 8 Comments</li>
		                  </ul> <!-- .item-info__list -->
		                </div> <!-- .events-item__info -->
                	</div> <!-- .events-item__content -->
                </div> <!-- .events-item__header -->
                <div class="events-item__text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                </div> <!-- .events-item__text -->
                <div class="events-item__link">
                  <a href="index.html">Read More ➔</a>
                </div> <!-- .events-item__link -->
              </div> <!-- / .events-item__body -->
						</div> <!-- .events__item -->
					</div>
	      </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> <!-- / .section__events -->

		<!-- section Contacts -->
    <section class="section__contacts">
    	<div class="container">
    		<div class="row">
    		  <div class="col-sm-12"> 		  	
    				<h2 class="section__title"><strong>Contactez nous</strong> </h2>
    				<div class="divider">
    					<hr class="line1">
    					<hr class="line2">
    					<hr class="line1">
    				</div> <!-- / .divider -->
    		  </div>
    		</div> <!-- / .row -->
    	</div> <!-- / .container -->
      <div class="section_row">
        <div id="map"></div>
      </div> <!-- / .section_row -->
      <div class="container">
      	<div class="row">
	        <div class="col-sm-5">
						<div class="contacts__info">
							<p class="contacts_info__title">Informations</p>
							<ul class="contacts_info__content">
	              <li>
	                <i class="icon ion-android-pin"></i>
	                <div class="contact-info-content">
	                  <div class="title">Addresse</div>
	                  <div class="description">1365 Boulevard René-Lévesque Ouest, Québec, Canada, G1S-1W9

</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-call"></i>
	                <div class="contact-info-content">
	                  <div class="title">Téléphone / Cell</div>
	                  <div class="description">1 (418) 527-3907 /  1 (418) 369-8255</div>
	                </div>
	              </li>
	              <li>
	                <i class="icon ion-android-mail"></i>
	                <div class="contact-info-content">
	                  <div class="title">E-mail</div>
	                </div>
	                  <div class="description">AubergeHotelVillaRoyale@gmail.com</div>
	              </li>
	            </ul> <!-- .contacts_info__content -->
						</div> <!-- / .contacts__info -->
						<p class="subheading">Si vous avez des questions, n'hésitez pas à nous contacter.</p>
	        </div>
	        <div class="col-sm-7">
	        	<div class="section-contacts__form_body">
              

              <!-- Alert message -->
              <div class="alert" id="form_message" role="alert"></div>
							
							<p class="section-contacts__title">Contactez</p>

              <!-- Please carefully read the README file in order to setup the PHP contact form properly -->
              <form id="form_sendemail" class="contacts__form">
                <div class="form-group">
                  <label for="email">Addresse Email (Champs obligatoires)</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Entrer votre Email">
                  <span class="help-block"></span>
                </div>

                <div class="form-group">
                  <label for="name">Nom  (Champs obligatoires)</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Entrez votre nom complet">
                  <span class="help-block"></span>
                </div>

                <div class="form-group">
                  <label for="message">Message  (Champs obligatoires)</label>
                  <textarea name="message" class="form-control" rows="6" id="message" placeholder="Entrez votre message"></textarea>
                  <span class="help-block"></span>
                </div>
                <!-- reCAPTCHA -->
                <div class="form-group" id="form-captcha">
                  <div class="g-recaptcha" data-sitekey="6LcH1RcUAAAAACsvookS7-U-Hx48PioWoSCgsbH6"></div>
                  <span class="help-block"></span>
                </div>
                <!-- /reCAPTCHA -->
                <div class="btn-group">
                  <button type="submit" class="btn">
                    Envoyer le message
                  </button>
                </div>
              </form> <!-- .contacts__form -->
            </div> <!-- / .secction-contacts__form_body -->
	        </div>
	      </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section> <!-- / .section__contacts -->

		<!-- section footer -->
		
		    <footer class="section__footer">
    	<div class="container">
    		<div class="footer__body">
		  		<div class="row">
		  			<div class="col-xs-12 col-sm-4 col-sm-push-4">
		  				<div class="footer__item">
		  					<h2 class="brand__logo">Maison Roy</h2>
			          <p class="brand__sublogo">Auberge</p>
			          <ul class="social__icons">
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-twitter" aria-hidden="true"></i></a></li>
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-facebook" aria-hidden="true"></i></a></li>
				          <li class="social-icons__item"><a href="#"><i class="icon ion-social-googleplus" aria-hidden="true"></i></a></li>
				        </ul> <!-- .social__icons -->
		  				</div> <!-- .footer__item -->
		  		  </div>
		  		  <div class="col-xs-12 col-sm-4 col-sm-pull-4">
		  		  	<div class="footer__item">
		  					<h3 class="newsletter__title">Bulletin</h3>
								<p class="newsletter__subtitle">Abonnez-vous à notre newsletter par courrier électronique pour recevoir des mises à jour et des nouvelles.</p>

			  		  	<!-- Newsletter form -->
			          <form class="newsletter__form">
			            <div class="form-group">
			              <label for="newsletter__email" class="sr-only">Adresse e-mail</label>
			              <input type="email" class="form-control" id="newsletter__email" placeholder="Your email">
			            </div>
			            <a href="#" class="btn btn-default btn-newsletter"><i class="icon ion-paper-airplane"></i></a>
			          </form> <!-- .newsletter__form -->
		  				</div> <!-- .footer__item -->
		  		  </div>
		  		  <div class="col-xs-12 col-sm-4">
		  		  	<div class="footer__item">
		  					<ul class="footer__links">
			  					<li><a href="#">Historique</a></li>
			  					<li><a href="#">Politique de Confidentialité</a></li>
			  					<li><a href="#">Termes et Conditions</a></li>
								<li><a href="#">Plan du site</a></li>
			  				</ul> <!-- .footer__links -->
		  				</div> <!-- .footer__item -->
		  		  </div>
		  		</div> <!-- / .row -->
		  	</div> <!-- / .footer__body -->
		  	<div class="footer__copyright">
		  		<div class="row">
	    		  <div class="col-xs-12">
	    		  	<hr>
	            <p class="footer_copyright__text">&#169; 2017 Auberge Maison Roy. Tous les droits sont réservés.</p>
	    		  </div>
	    		</div> <!-- / .row -->	
		  	</div> <!-- / .footer__copyright -->
    		
    	</div> <!-- / .container -->
    </footer> <!-- .section__footer -->

    <!-- 
    ================================================== -->

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- JS Plugins -->
    <script src="assets/plugins/moment-develop/moment.js"></script>
    <script src="assets/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
		<script src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
		<script src="assets/plugins/contact-form/contact.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->
		<script src="assets/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&callback=initMap" async defer></script>

  </body>
</html>