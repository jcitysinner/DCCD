<footer class="fullWidth">
		<div class="container">
			<div class="leftCol">
				<div id="footerSocial">
					<h3 class="social">Follow Us</h3>
					<ul class="social">
						<li class="social"><a href="[facebook link]">facebook</a></li>
						<li class="social"><a href="[twitter link]">twitter</a></li>
						<li class="social"><a href="[email link]">email</a></li>
					</ul>
				</div>
				<div id="footerLinks">
					<ul>
						<li><h3>Connect</h3></li>
						<li><a href="#">contact info</a></li>
						<li><a href="#">FAQs</a></li>
					</ul>
					<ul>
						<li><h3>Financials</h3></li>
						<li><a href="#">annual reports</a></li>
						<li><a href="#">donors</a></li>
						<li><a href="#">partners</a></li>
					</ul>
					<ul>
						<li><h3>Get Involved</h3></li>
						<li><a href="#">fundraise</a></li>
						<li><a href="#">volunteer</a></li>
						<li><a href="#">donate</a></li>
					</ul>
					<p>Charitable Registration Number 85613 3343 RR0001 </p>	
				</div>
			</div>
			<div class="rightCol">
				<h3>Contact Us</h3>
				<form id='footerContact' action='thankyou.php' method='post'>
					<input type="text" name="name" placeholder="name" required>
					<input type="email" name="email" placeholder="email address" required>
					<textarea name='comments' placeholder="comments" required></textarea>
					<input class="submit" type="submit" value="Send">
				</form>
			</div>
		</div>
	</footer>

	<div id="copyright" class="fullWidth">
		<p><a href="privacy.html">Privacy Policy</a> | <a href="terms">Terms  &amp; Conditions</a> | &copy; Leah de Vries</p>
		<!--Website Developed by Jesse Sinfield, www.jessesinfield.com -->
	</div>

	<script>
		$("#footerContact").validate();
	</script>
	
	
</body>

</html>