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

		<div id="main">
			<!-- <div class='row'>
				<div class="col-2">
					<a href="https://www.yourfitnesstoday.com" target="parent"><img class="banner" src="images/logos/bodyfit_logo_bw.png" alt="bodyfit black and white logo"></a>
				</div>
			</div>
			<div class='row margin-block'>
				<div class="col-12">
					<a href="images/pdfs/bodyfit_apr_2013_1.pdf" target="parent"><img class="banner" src="images/Photos/bodyfit_apr_2013.jpg"></a>
				</div>
			</div>
			<div class='row margin-block'>
				<div class="col-12">
					<a href="images/pdfs/bodyfit_jun_2012.pdf" target="parent"><img class="banner" src="images/Photos/bodyfit_jun_2012.jpg"></a>
				</div>
			</div>
			<div class='row margin-block'>
				<div class="col-12">
					<a href="images/pdfs/bodyfit_feb_2012_1.pdf" target="parent"><img class="banner" src="images/Photos/bodyfit_feb_2012.jpg"></a>
				</div>
			</div> -->
			<div id='footer_banner'>
				<div class='row'>
					<div class='col-9'>
						<h1><a class='highlight' href='http://www.yourfitnesstoday.com' target='parent'>Bodyfit Magazine</a></h1>
					</div>
					<!-- <div class='col-2'>
						<a href="https://www.yourfitnesstoday.com" target="parent"><img class="banner" src="images/logos/bodyfit_logo_bw.png" alt="bodyfit black and white logo"></a>
					</div> -->
				</div>
			</div>
			</div>
			<div class="row">
				<div class="col-4 pad-block">
					<a href="images/pdfs/bodyfit_apr_2013.pdf" target="parent"><img class="banner" src="images/Photos/bodyfit_apr_2013.jpg"></a>
				</div>
				<div class="col-4 pad-block">
					<a href="images/pdfs/bodyfit_jun_2012.pdf" target="parent"><img class="banner" src="images/Photos/bodyfit_jun_2012.jpg"></a>
				</div>
				<div class="col-4 pad-block">
					<a href="images/pdfs/bodyfit_feb_2012.pdf" target="parent"><img class="banner" src="images/Photos/bodyfit_feb_2012.jpg"></a>
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
