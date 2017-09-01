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
				$('#found_header').click(
					function(){
						$('#found_text').slideToggle(1000)
						});
				$('#work_header').click(
					function(){
						$('#work_text').slideToggle(1000)
						});
				$(".dynamic").hide();
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

		<div>
			<img class="banner" src="images/Photos/philo_banner_text.png" alt="Tatum's philosophy"/>
		</div>

		<div id="main">
			<div id="found_header" class="row">
				<div class="col-12">
					<a class="pink" href="#/"><h1 class="block-title toggle" align="center">- My Foundations to Fitness -</h1></a>
				</div>
			</div>

			<div id="found_text" class="row dynamic">
				<div class="col-2 pad-block">
					<h3 class="block-title pink">Bodyweight Strength</h3>

					<p>When it comes to strength, the ability to master one's own bodyweight is often lost, and the focus switches to mastering a barbell, or weighted machine.
					By isolating muscles, people can develop imbalances in muscular strength and often suffer injuries. I use equipment - such as the
					<a class="pink" href="http://www.trxtraining.com/" target="blank">TRX</a> - to assist in building supreme total body strength, balance
					and stability. By working the body unilaterally I ensure everyone has a stable base from which to develop and progress.</p>
					<br/>

					<p>At <font class="pink">Tatum Nelson Fitness</font>, the focus is on total body strength, and attaining power that belies ones size.</p>
				</div>

				<div class="col-2 pad-block">
					<h3 class="block-title pink">Core Stability</h3>

					<p>A strong core forms the platform from which a high level of fitness can be built and is as important
					for a casual gym-goer as it is for an Olympic Athlete.</p>
					<br/>

					<p>Without developing the core, fitness gains will be limited, progression will be slow and
					the risk of injury will increase.</p>
					<br/>

					<p>At <font class="pink">Tatum Nelson Fitness</font>, foundations will be built so the client can continue to achieve.</p>
				</div>

				<div class="col-2 pad-block">
					<h3 class="block-title pink">Cardiovascular Fitness</h3>

					<p>Cardiovascular fitness plays a leading role in overall health, and is often neglected in
					today's busy lifestyles.</p>
					<br/>

					<p>Tatum will ensure this is not the case and through her training regimes she will include
					elements to nurture and improve this whether it be apparent to you, or cleverly disguised
					for the person who hates cardio work!</p>
					<br/>

					<p>At <font class="pink">Tatum Nelson Fitness</font> cardiovascular health will lead to you feeling better, having more
					energy and losing weight as an added benefit!</p>
				</div>
			</div>

			<div id="work_header" class="row">
				<div class="col-12">
					<a class="pink" href="#/"><h1 class="block-title toggle" align="center">- The Way I Work -</h1></a>
				</div>
			</div>
			<div id="work_text" class="row dynamic">
				<div>
					<p>Tatum has developed a unique, effective approach to fitness that has proven success.</p>
					</br>

					<p>She brings together her background as an elite athlete and her years of studying ballet to create
					the perfect full body work out that will leave you feeling invigorated!</p>
					</br>

					<p>Both men and women can benefit from Tatum's approach - it is simple:</p>
					</br>
				</div>
				<div class="row">
					<div class="col-2 pad-block">
						<h3 class="block-title pink">Tatum Nelson Fitness for Him <i class="fa fa-mars fa-lg" aria-hidden="true"></i></h3>

						<p>"I have trained alongside the best
						male athletes in the world, I have spent time studying and learning how they develop their
						physiques, and for male clients I place more emphasis on this skill set honing an enviable physique
						and gaining superior strength."</p>
						</br>
					</div>

					<div class="col-2 pad-block">
						<h3 class="block-title pink">Tatum Nelson Fitness For Her <i class="fa fa-venus fa-lg" aria-hidden="true"></i></h3>

						<p>"I practised ballet for years, and
						reached elementary level, the highest grade that can be taken. My passion for dance and my
						experience of the amazing benefits it can have on the way you not only feel but also how your body
						looks has led me to integrate it into my workouts. Basing more of the workout on ballet to develop
						lean, beautiful, elongated muscles."</p>
						</br>
					</div>
				</div>

				<p>Of course there's nothing to say the emphasis has to be this way! I will tailor the workout
				to suit your needs.</p>
				</br>

				<p><font class="pink">Tatum Nelson Fitness</font> - where fitness is a lifestyle.</p>
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
