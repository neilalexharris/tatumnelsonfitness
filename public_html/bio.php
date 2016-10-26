<?php
	$colClass = "lightbluetext";
	$logoPath = "Images/Pngs/main_lightblue.png";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

		<table class="main" cellpadding="0", cellspacing="10">
			<tr>
				<td class="greyborder">
					<img class="padding" src="Images/Photos/tatum_profile_rounded2_small.png" width="150" height="163" align="right" alt="Tatum Nelson"/>
				    <a name="about"><h1 class="<?php echo $colClass; ?>">About Me</h1></a>
					<br/>

					<p>Having a wealth of experience as an elite athlete over 100m, 200m and 400m, Tatum competed for Great Britain and
					England on many occasions and she offers a rare insight into the world of elite sport</p>
					<br/>

					<p>Tatum started her career at the age of 14 as one of the best juniors in the World over the sprint
					distances. Her accolades include World Schools 100m Silver medallist and 4x100m Gold medallist; European Junior 100m
					finalist and 4x100m Silver medallist, and still features in Britain's top 10 fastest ever times for 100m and 200m.</p>
					<br/>

					<p>She has trained with many of athletics' elite, and has also worked with sports people from other disciplines including
					Olympic swimmer Mark Foster and former All Black rugby international Jonah Lomu</p>
					<br/>

					<p>During her sporting career Tatum travelled to Europe, the Middle East, America and Australia, gaining experience in how
					other nations approach fitness and she incorporates this into her training programmes</p>
					<br/>

					<p>Also a trained dancer, Tatum completed ballet training to Elementary Level, and it was here that her 
					passion for fitness began</p>
					</br>
			
					<?php include 'social.html'; ?>
					
				</td>
			</td>
		</table>

		<?php include 'footer.php'; ?>

	</body>
</html>