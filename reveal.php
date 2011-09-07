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
		.reveal {
			opacity: 1;
			
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
			p.skinny {opacity: 0; }
			p.wide {opacity: 1; }
		}
		@media (min-width: 900px) {.reveal {opacity: 0.9; }}
		@media (min-width: 1000px) {.reveal {opacity: 0.8; }}
		@media (min-width: 1050px) {.reveal {opacity: 0.7; }}
		@media (min-width: 1100px) {.reveal {opacity: 0.6; }}
		@media (min-width: 1150px) {.reveal {opacity: 0.5; }
			p.skinny {opacity: 1; }
			p.wide {opacity: 0; }
		}
		@media (min-width: 1200px) {.reveal {opacity: 0.4; }}
		@media (min-width: 1250px) {.reveal {opacity: 0.3; }}
		@media (min-width: 1300px) {.reveal {opacity: 0.2; }}
		@media (min-width: 1350px) {.reveal {opacity: 0.1; }}
		@media (min-width: 1400px) {.reveal {opacity: 0.0; }}



		@media (orientation: portrait) and (device-width: 768px) {
			.reveal {opacity: 1; }
			p.skinny {opacity: 0; }
			p.wide {opacity: 1; }
		}
		@media (orientation: landscape) and (device-width: 768px) {
			.reveal {opacity: 0; }
			p.skinny {opacity: 1; }
			p.wide {opacity: 0; }
		}
		
		
		/*
		This is for demo purposes. If you'd like some practical examples please visit:
		http://www.alistapart.com/articles/responsive-web-design/
		*/

	</style>
</head>

<body>

  <div class="intro">
  	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
  	<? include('_browsers.php') ?>
  </div>
	
	<p class="skinny instructions">Resize your window, enlarging it horizontally until the message gradually appears.<br /> Or on a mobile device, rotate it to landscape mode.</p>
	<p class="wide instructions">Resize your window, reducing it horizontally until the message gradually disappears.<br /> Or on a mobile device, rotate it to portrait mode.</p>
	
	<div class="reveal"><h2><img src="/images/portal-cake.jpg" alt="This was a triumph." /></h2></div>
	<p>This effect makes use of CSS3 @media queries, which is the most prominent method of creating a <a href="http://www.alistapart.com/articles/responsive-web-design/">responsive layout</a>. This basic example should <a href="/gears.php">get your gears turning</a>.</p>

<? include('_footer.php') ?>
