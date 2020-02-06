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

		<div id='main' class='row lightgrey'>
			<div class='col-12'>
				<div id='menu' class='text-center'>
					<h2 class='highlight'>NEW WEBSITE UNDER CONSTRUCTION</h2></br>
					<h1>Please check back soon!</h1></br>
				</div>
				<div id='main' class='text-center'>
					<h1>For enquiries, please contact me on the below details:</h1></br>
					<h1 class='highlight'>Email:</h1></br>
					<p>tate@ta<span class='hiddenmail'>REMOVE</span>tumnelson.com</p></br>
					<h1 class='highlight'>Phone</h1></br>
					<p>07738324442</p>
				</div>
			</div>
		</div>

		<div class='text-center'>
				<?php include 'social.html'; ?>
			</div>
		</div>

		<div id='footer'>
			<?php include 'footer.html'; ?>
		</div>

	</body>

</html>
