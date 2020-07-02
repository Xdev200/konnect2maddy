<?php include "class.DbConnect.php"; ?>
		<!--<link rel="stylesheet" type="text/css" href="css/default.css" />-->
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	
	
		
			
			<div class="main">
				<div id="cbp-qtrotator" class="cbp-qtrotator">
					<div class="cbp-qtcontent">
						<img src="images/1.jpg" alt="img01" />
						<blockquote>
						  <p>People eat meat and think they will become as strong as an ox, forgetting that the ox eats grass.</p>
						  <footer>Pino Caruso</footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="images/2.jpg" alt="img02" />
						<blockquote>
						  <p>Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet.</p>
						  <footer>Albert Einstein</footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="images/3.jpg" alt="img03" />
						<blockquote>
						  <p>If you don't want to be beaten, imprisoned, mutilated, killed or tortured then you shouldn't condone such behaviour towards anyone, be they human or not.</p>
						  <footer>Moby</footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="images/4.jpg" alt="img04" />
						<blockquote>
						  <p>My body will not be a tomb for other creatures.</p>
						  <footer>Leonardo Da Vinci</footer>
						</blockquote>
					</div>
				</div>
			</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.cbpQTRotator.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>
	</body>
</html>
