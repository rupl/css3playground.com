<?
$title = 'Reveal';
include('_header.php');
?>

	<style type="text/css">
		body {
			width: 720px;
			position: relative;
		}
		/* -- make sure to declare a default for every property that you want animated -- */
		.gear {
			float: left;
			width: 200px;
			height: 181px;
			margin: 1em;
			background: url('images/spur-gear-8.png') no-repeat 0 0;
			opacity: 0;
			
			background-size: 100%;
			-o-background-size: 100%;
			-moz-background-size: 100%;
			-webkit-background-size: 100%;
			
			/* -- transition is the magic sauce for animation -- */
			transition: all .2s linear;
			-moz-transition: all .2s linear;
			-webkit-transition: all .2s linear;
		}
		
		p.skinny {
			transition: all .7s linear; 
			-o-transition: all .7s linear; 
			-moz-transition: all .7s linear;
			-webkit-transition: all .7s linear;
		}
		p.wide {
			transition: all .7s linear; 
			-o-transition: all .7s linear; 
			-moz-transition: all .7s linear;
			-webkit-transition: all .7s linear;
		}

		@media (min-width: 0px) {
			p.skinny {opacity: 1; }
			p.wide {opacity: 0; }
		}
		@media (min-width: 1000px) {.gear {opacity: 0.1; }}
		@media (min-width: 1050px) {.gear {opacity: 0.2; }}
		@media (min-width: 1100px) {.gear {opacity: 0.3; }}
		@media (min-width: 1150px) {.gear {opacity: 0.4; }}
		@media (min-width: 1200px) {.gear {opacity: 0.5; }
			p.skinny {opacity: 0; }
			p.wide {opacity: 1; }
		}
		@media (min-width: 1250px) {.gear {opacity: 0.6; }}
		@media (min-width: 1300px) {.gear {opacity: 0.7; }}
		@media (min-width: 1350px) {.gear {opacity: 0.8; }}
		@media (min-width: 1400px) {.gear {opacity: 0.9; }}
		@media (min-width: 1450px) {.gear {opacity: 1.0; }}



		@media (orientation: portrait) and (device-width: 768px) {
			.gear {opacity: 0; }
			p.skinny {opacity: 1; }
			p.wide {opacity: 0; }
		}
		@media (orientation: landscape) and (device-width: 768px) {
			.gear {opacity: 1; }
			p.skinny {opacity: 0; }
			p.wide {opacity: 1; }
		}
		
		
		/*
		This is for demo purposes. If you'd like some practical examples please visit:
		http://www.alistapart.com/articles/responsive-web-design/
		*/

	</style>
</head>

<body>

	<? include('_intro.php') ?>
	
	<p class="skinny instructions">Resize your window, enlarging it horizontally until the gears gradually appear.<br /> Or on a mobile device, rotate it to landscape mode.</p>
	<p class="wide instructions">Resize your window, reducing it horizontally until the gears gradually disappear.<br /> Or on a mobile device, rotate it to portrait mode.</p>
	
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>

<? include('_footer.php') ?>
