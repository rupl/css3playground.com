<?
$title = 'Orientation';
include('_header.php');
?>

	<meta name="viewport" content="width=device-width" />
	<style type="text/css">
		#container {
			width: 720px;
			position: relative;
		}
		/* -- make sure to declare a default for every property that you want animated -- */
		.gear {
			float: left;
			width: 140px;
			height: 127px;
			margin: 1em;
			background: url('images/spur-gear-8.png') no-repeat 0 0;
			opacity: 1;
			
			background-size: 100%;
			-o-background-size: 100%;
			-moz-background-size: 100%;
			-webkit-background-size: 100%;
			
			/* -- transition is the magic sauce for animation -- */
			transition: all .2s linear;
			-moz-transition: all .2s linear;
			-webkit-transition: all .2s linear;
		}
		
		.skinny {
			transition: all .7s linear; 
			-o-transition: all .7s linear; 
			-moz-transition: all .7s linear;
			-webkit-transition: all .7s linear;
		}
		.wide {
			transition: all .7s linear; 
			-o-transition: all .7s linear; 
			-moz-transition: all .7s linear;
			-webkit-transition: all .7s linear;
		}
		
		@media (orientation: portrait) {
			.skinny {opacity: 1; }
			.wide {opacity: 0; }
			.gear:nth-child(3n+2) {clear: left; }
		}
		@media (orientation: landscape) {
			.skinny {opacity: 0; }
			.wide {opacity: 1; }
			.gear:nth-child(4n+1) {clear: left; }
		}

		

	</style>
</head>

<body>

<div id="container">
	<? include('_intro.php') ?>
	
	<p class="instructions">Desktop users can test this CSS3 media query by resizing the browser window from a short/wide shape to a tall/skinny shape. <code>orientation: landscape|portrait</code> is only dependent on which is greater: window's width or its height.</p>
	<p class="skinny instructions">Rotate your device to landscape mode and the rows get longer.</p>
	<p class="wide instructions">Rotate your device to portrait mode and the rows get shorter.</p>
	
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	<div class="gear"></div>
	
</div>

<? include('_footer.php') ?>
