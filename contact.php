<?php include('header.php') ?>
		<div id="hero">
			<div>
				<p>HIV and AIDS is a growing concern for the Dominican Republic. More than 52,000 Dominicans live with this virus, more than 5,000 of whom are children under the age of 5.</p>
				<a class="button" href="[DONATE LINK HERE]">Donate</a>
				<a class="button" href="volunteer.html">Volunteer</a>
			</div>
		</div>

		<div class='contactTop'>
			<h2>Contact</h2>
			<p class='contactLeft'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at elementum justo. Duis at viverra orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus egestas, est porta sollicitudin rhoncus, tellus  laoreet enim, ut malesuada purus augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at elementum justo. Duis at viverra orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus egestas, est porta sollicitudin rhoncus, tellus  laoreet enim, ut malesuada purus augue.</p>
			<iframe class='contactRight' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23352.598725260574!2d-79.23592920736492!3d42.97669709471096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d348259ea643e9%3A0x12f57b22cf78189e!2s29+Classic+Ave%2C+Welland%2C+ON+L3B+1P3!5e0!3m2!1sen!2sca!4v1423405310205" width="400" height="300" frameborder="0" style="border:0"></iframe>
			
		</div>

		<div id="volunteer" class="mainContent">
			
			<form id='mainContact' action='thankyou.php' method='post'>
				<h2>Send us a Message</h2>
				<div><label for="name">Name</label>
				<input type="text" name="name" placeholder="Name" required></div>
				<div><label for="email">Email</label>
				<input type="email" name="email" placeholder="Email" required></div>
				<div><label for="comments" class="comments">Comments</label>
				<textarea name="comments" placeholder="Comments" required></textarea></div>
				<input class="submit" type="submit" value="Send">
			</form>
			<p>Questions? Email us at <a href="mailto:VOLUNTEER@DCCDGROUP.CA">VOLUNTEER@DCCDGROUP.CA</a></p>
		</div>

		<div id="botNav">
			<a href="#"><span>&lt;</span> Projects</a>
			<a href="#">Programs <span>&gt;</span></a>
		</div>
	</div>

	<script>
		$("#mainContact").validate();
	</script>

<?php include('footer.php') ?>