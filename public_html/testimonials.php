<!DOCTYPE html>
<html>
	<head>

		<?php include 'head.html'; ?>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

		<script>
			$(document).ready(
				function (){
				$('.highlight').addClass("green");
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
			<div class="row h-pad">
				<div class="col-3" align=center>
					<img src="images/Photos/colin_jackson_profile_100.png" alt="Colin Jackson"/>
				</div>
				<div class="col-8">
					<p><em>"Tatum has rekindled the original definition of gymnasium - this is to work our mind and body.
					She manages to make this happen. After our sessions I feel both my mind and body are refreshed and I am prepared for the day."</em></p>
					<br>
					<p class="green"><em>Colin Jackson | Former World Champion and World Record holder for 110m Hurdles</em></p>
				</div>
			</div>

			<div class="row h-pad">
				<div class="col-8">
					<p><em>"Training alongside Tatum, it quickly becomes apparent that
				    her approach, drive, determination and tenacity to achieve is
				    unparalleled. I have every faith that this work ethic, plus Tatum's experience
				    as an elite athlete will enable you to reach your fitness goals"</em></p>
					<br>
					<p class="green"><em>Mark Foster | Former World Record holder and World Champion
				    swimmer</em></p>
				</div>
				<div class="col-3" align=center>
					<img src="images/Photos/foz_profile_100.png" alt="Mark Foster"/>
				</div>
			</div>

			<div class="row h-pad">
				<div class="col-3" align=center>
					<img class="padding" src="images/Photos/neil_profile_100.png" alt="Neil Harris"/>
				</div>
				<div class="col-8">
			    <p><em>"After a disappointing season last year, I started working with Tatum to improve
					my conditioning and triathlon specific strength. This enabled me to take on much bigger training volumes
					and in turn achieve some amazing race results, including winning my Age Group at the Royal Windsor Triathlon
					and posting a 4:16 for half-ironman at my first attempt.
					I have also stayed injury free for the whole of last season, which is a first since I started triathlons
					5 years ago"</em></p>
					<br>
				  <p class="green"><em>Neil Harris | GB Age Group Triathlete</em></p>
				</div>
			</div>

			<div class="row h-pad">
				<div class="col-12">
					<p><em>"I first worked out with Tatum at Matt Roberts' gym in Knightsbridge.  First impression:
					a thoughtful individual who is very interested in her clients' overall well-being, as well as their specific fitness goals.</p><br/>

					<p>Tatum exhibited an inner confidence that she was able to transfer to me through her innate understanding of physiology and
					her commitment to me delivering against my goals.  A pretty good outcome for a fifty something male who was once a keen amateur
					footballer and tennis player, but may perhaps have gone a little "to seed".  Current impression: a winner who is able to instil
					in others what it takes to succeed: why not give it a go?"</em></p>
					<br>
					<p class="green"><em>Bob Pamplin | Chairman, ITAC Group</em></p>
				</div>
			</div>

			<div class="row h-pad">
				<div class="col-12">
					<p><em>"Tatum has a  wealth of knowledge and experience gained from her background as a former GB track
					athlete and a personal trainer. She totally understands how to help you reach your goals and  how to push you beyond those goals
					with optimum results. I have lost over a stone since working with Tatum and I am the fittest and most toned I have ever been and
					I have also enjoyed the process. Every session is effective and fun."</em></p><br>

					<p class="green"><em>Marie Knowles | Mother of 2</em></p>
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
