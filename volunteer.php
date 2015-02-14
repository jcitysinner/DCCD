<?php include('header.php') ?>
		<div id="hero">
			<div>
				<p>HIV and AIDS is a growing concern for the Dominican Republic. More than 52,000 Dominicans live with this virus, more than 5,000 of whom are children under the age of 5.</p>
				<a class="button" href="[DONATE LINK HERE]">Donate</a>
				<a class="button" href="volunteer.html">Volunteer</a>
			</div>
		</div>

		<div id="volunteer" class="mainContent">
			<h2>Volunteer with the DCCD Group</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at elementum justo. Duis at viverra orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus egestas, est porta sollicitudin rhoncus, tellus  laoreet enim, ut malesuada purus augue.</p>
			<form id='volunteerContact' action='thankyou.php' method='post'>
				<h2>Sign up to Volunteer</h2>
				<div><label for="name">Name</label>
				<input type="text" name="name" placeholder="Name" required></div>
				<div><label for="birthdate">Birthdate</label>
				<input type="text" name="birthdate" placeholder="Birthdate" required></div>
				<div><label for="email">Email</label>
				<input type="email" name="email" placeholder="Email" required></div>
				<div><label for="address">Address</label>
				<input type="text" name="address" placeholder="Address" required></div>
				<h2>Tell us what you can contribute!</h2>
				<p>We are always looking for more people to get involved. Please tell us about your talents and what type of work you are interested in doing.</p>
				<div><label for="comments" class="comments">Comments</label>
				<textarea name="comments" placeholder="Comments"></textarea></div>
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
		$("#volunteerContact").validate();
	</script>

<?php include('footer.php') ?>