<!DOCTYPE html>
<html>
	<head>

		<?php include 'head.html'; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

		<script>
			$(document).ready(
				function (){
				$('.highlight').addClass("lightblue");
			});
		</script>

		<script type="text/javascript">

			 var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-23430411-1']);
				_gaq.push(['_trackPageview']);

				(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();

		</script>

	</head>

	<body>

		<div id='header'>
			<?php include 'header.html'; ?>
		</div>

		<div id='menu'>
			<?php include 'menu.html'; ?>
		</div>

		<div id='main'>
			<div class='row'>
				<div class='col-12'>
			    <h1 class="lightblue block-title">Terms &amp; Conditions</h1><br/>
					<ul class='lightblue'>
						<li><span class="white">At least 24 hours notice must be given if a session is to be cancelled, otherwise the full session fee will be charged.</span></li>
						<li><span class="white">If a block of sessions has been purchased, the session will still be deducted from this if less than 24 hours notice of cancellation is given.</span></li>
						<li><span class="white">All sessions must be paid in full in advance, prior to the session.</span></li>
						<li><span class="white">All blocks of sessions purchased require full payment to be made prior to the first session.</span></li>
						<li><span class="white">All sessions purchased within a block of 10 must be redeemed within 60 days from date of first session, as it is understood that consistency in training sessions is required to achieve results.</span></li>
						<li><span class="white">If a block of sessions is cancelled the remainder of the session block will be refunded less 25% to cover the planning and preparation the trainer will have undertaken.</span></li>
						<li><span class="white">Unless stated otherwise all sessions will run for 1 hour.</span></li>
						<li><span class="white">If the client is late for a session, it cannot be guaranteed that the session will run for the full hour.</span></li>
						<li><span class="white">If the trainer is late for the session, the full hour will be provided either at the time or the time owed will be added at a later date.</span></li>
						<li><span class="white">All clients must complete a consent form and a Pre Activity Readiness Questionnaire prior to commencing a training programme, and provide true and correct information on the forms.</span></li>
						<li><span class="white">The trainer must be notified immediately of any changes in health, which may affect the client’s ability to partake in the session safely, prior to the session commencing. Tatum Nelson Fitness takes no responsibility for any health issue or injury that may occur.</span></li>
						<li><span class="white">The client understands that all exercise carries possible risk, including illness, injury and in extreme circumstances death, and Tatum Nelson Fitness will not be held in anyway responsible for any of the above occurrences.</span></li>
					</ul>
				</div>
			</div>
		</div>

		<div id='social'>
			<?php include 'social.html'; ?>
		</div>

		<div id='footer'>
			<?php include 'footer.html'; ?>
		</div>

	</body>

</html>
