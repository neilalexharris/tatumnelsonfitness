<!DOCTYPE html>
<html>
	<head>

		<?php include 'head.html'; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

		<script>
			$(document).ready(
				function (){
				$('.highlight').addClass("orange");
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

		<div id='main'>
			<div class='row'>
				<div class='col-8'>
					<div id='menu'>
						<div>
							<h1 class='highlight'>New website under construction</h1>
						</div>
						<div>
							<p>Please check back soon!</p>
						</div>
						<div>
							<p>For enquiries, please contact me on the below details:</p>
							<h1 class='highlight'>Email:</h1>
							<p>tate@tatumnelson.com</p>
							<h1 class='highlight'>Phone</h1>
							<p>07738324442</p>
						</div>
					</div>
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
