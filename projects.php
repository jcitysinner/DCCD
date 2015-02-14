<?php include('header.php') ?>
		<div id="hero">
			<div>
				<p>HIV and AIDS is a growing concern for the Dominican Republic. More than 52,000 Dominicans live with this virus, more than 5,000 of whom are children under the age of 5.</p>
				<a class="button" href="[DONATE LINK HERE]">Donate</a>
				<a class="button" href="volunteer.html">Volunteer</a>
			</div>
		</div>
		<div id="about">
			<h2>DCCD Project Overview</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at elementum justo. Duis at viverra orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus egestas, est porta sollicitudin rhoncus, tellus  laoreet enim, ut malesuada purus augue.</p>
		</div>
		<div id="car-buttons">
			<div id="car-button-1" class="car-button">
				<img src="images/agriculture.png">
				<p>AGRICULTURE</p>
			</div>
			<div id="car-button-2" class="car-button">
				<img src="images/education.png">
				<p>EDUCATION</p>
			</div>
			<div id="car-button-3" class="car-button">
				<img src="images/health.png">
				<p>HEALTH</p>
			</div>
			<div id="car-button-4" class="car-button">
				<img src="images/housing.png">
				<p>HOUSING</p>
			</div>
			<div id="car-button-5" class="car-button">
				<img src="images/water.png">
				<p>WATER</p>
			</div>
		</div>
	</div>
	<div id="car" class="fullwidth">
		<div class="container">
			<div id="owl-car" class="owl-carousel owl-theme">
			 
			  <div id="slide-1" class="item">
			  	<div class="leftCol">
			  		<img src="http://placehold.it/350x350">
			  	</div>
			  	<div class="rightCol">
			  		<h3>Agriculture Projects</h3>
			  		<p>The Dominican Republic and Haiti have a long and difficult history in agricultural production, especially the production of sugar cane for the French and Spanish empires. The DCCD is critical of food aid, thus we support projects and public programs that improve the capacity of the local economy and supports social justice initiatives in access to land, education and training that are working to improve the situation of many Dominicans and Haitians who work in and beyond the sugar industry. </p>
			  		<a href="#">Read More <span> > </span></a>
			  	</div>
			  </div>
			  <div id="slide-2" class="item">
			  	<div class="leftCol">
			  		<img src="http://placehold.it/350x350">
			  	</div>
			  	<div class="rightCol">
			  		<h3>Education Projects</h3>
			  		<p>The DCCD believes that education and social justice are the avenues towards a better world. While education is a fundamental human right, in many communities the barriers of poverty which restrict access to transportation, materials and time away from work limit many people from finishing elementary or high school, and attending college or university.  </p>
			  		<a href="#">Read More <span> > </span></a>
			  	</div>
			  </div>
			  <div id="slide-3" class="item">
			  	<div class="leftCol">
			  		<img src="http://placehold.it/350x350">
			  	</div>
			  	<div class="rightCol">
			  		<h3>Health Projects</h3>
			  		<p>The DCCD believes that everyone has the right to health care. In the bateyes of the Dominican Republic, the infrastructure to support health care is often unavailable and transportation costs are a serious barrier for people to seek preventative medicine and treatment for even common health problems. </p>
			  		<a href="#">Read More <span> > </span></a>
			  	</div>
			  </div>
			  <div id="slide-4" class="item">
			  	<div class="leftCol">
			  		<img src="http://placehold.it/350x350">
			  	</div>
			  	<div class="rightCol">
			  		<h3>Housing Projects</h3>
			  		<p>The DCCD believes that everyone has the right to an adequate standard of living, which includes adequate and safe housing. In many bateye communities in the Dominican Republic, people have not had the means or opportunity to buy and maintain their own houses, or have access to land.</p>
			  		<a href="#">Read More <span> > </span></a>
			  	</div>
			  </div>
			  <div id="slide-5" class="item">
			  	<div class="leftCol">
			  		<img src="http://placehold.it/350x350">
			  	</div>
			  	<div class="rightCol">
			  		<h3>Water Projects</h3>
			  		<p>Water is a fundamental human right, and access to clean and safe water should be top priority.  Unfortunately in many communities in the Dominican Republic and the world - including Canada – basic services are not provided, the infrastructure is not maintained, or the services are privatised and only available to those who can pay.</p>
			  		<a href="#">Read More <span> > </span></a>
			  	</div>
			  </div>
			 
			</div>
		</div>
	</div>

	<div class="container">

		<div id="botNav">
			<a href="#"><span>&lt;</span> about</a>
			<a href="#">volunteer <span>&gt;</span></a>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
 
	  $("#owl-car").owlCarousel({
	 
	      navigation : true, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	  var owl = $(".owl-carousel").data('owlCarousel');
	  $("#car-button-1").click(function(){
	  	owl.goTo(0);
	  })
	  $("#car-button-2").click(function(){
	  	owl.goTo(1);
	  })
	  $("#car-button-3").click(function(){
	  	owl.goTo(2);
	  })
	  $("#car-button-4").click(function(){
	  	owl.goTo(3);
	  })
	  $("#car-button-5").click(function(){
	  	owl.goTo(4);
	  })

	 
	});
	</script>
	<script type="text/javascript" src="js/jquery.sidr.min.js"></script>

<?php include('footer.php') ?>

	