<?php
	$colClass = "greentext";
	$logoPath = "Images/Pngs/main_green.png";
?>

<!DOCTYPE html>
<html>
	<head>
		
		<?php include "header.html"; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.innerfade.js"></script>

		<script type="text/javascript">
		$(document).ready(
				function(){
		
					$('#banner').innerfade({
						speed: 2000,
						timeout: 7000,
						type: 'sequence',
						containerheight: '320px'
					});
			
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
		
		<?php include 'menu.php'; ?>

		<table class="banner">
			<tr>
				<td>
					<ul id="banner">
						<li>
							<img src="Images/Photos/tatum_banner_textp.png" alt="Tatum Nelson Fitness"/>
						</li>
						<li>
							<a href="testimonials.php"><img src="Images/Photos/cj_tate_banner_text.png" alt="Click to see Colin Jackson's full testimonial"/></a>
						</li>																
					</ul>
				</td>
			</tr>
		</table>

		<table class="main" cellpadding="0", cellspacing="10">
		
			<?php include 'main.html'; ?>
			
			<?php include 'social.html'; ?>
			
		</table>

		<?php include 'footer.php'; ?>

	</body>
</html>
