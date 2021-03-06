<!DOCTYPE html>
<html>
	<head>

		<?php include 'head.html'; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

		<script>
			$(document).ready(
				function (){
				$('.highlight').addClass("pink");
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

		<div id="main">
			<div class="row">
				<div class="col-12">
					<h1 class="pink block-title" align="center">Privacy Policy</h1>
				</div>
			</div>
			<p>At Tatum Nelson Fitness, data protection is taken very seriously.</br>
					</br>
					In accordance with the General Data Protection Regulation (GDPR) 2018, if you are trained at
					Tatum Nelson Fitness, you will be asked to complete a paper version Informed Consent Form
					and a PAR-Q.</br>
					</br>
					These are then stored in paper format only. No details from these are logged on any computer
					system.</br>
					</br>
					The information is then kept in a locked, fireproof filing cabinet.</br>
					</br>
					If you contact Tatum Nelson Fitness via email, Tatum will communicate with you regarding
					training and session information. All email addresses are stored on a secure password
					protected database, on a secure server which can only be accessed by Tatum Nelson Fitness.
					No information is shared further with or sold to any other organisation and is kept solely within
					Tatum Nelson Fitness.</br>
					</br>
					You may request a copy of all information Tatum Nelson Fitness holds on you at any time.
					Please email tate@tatumnelson.co.uk.</br>
					</br>
					This policy may change from time to time, as I keep my data protection policy under regular
					review, so please do check with on my web page for updates.</br>
					</br>
					This page was last updated 24th May 2018</p>
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
