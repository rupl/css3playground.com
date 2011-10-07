<?
$title = '3D Flip Cards';
include('_header.php');
?>

	<style type="text/css">
		body {width: 720px; }
		.coin {
			float: left;
			width: 143px;
			height: 143px;
			margin: 0;
			position: relative;
			
			-webkit-perspective: 600;
		}

		/* -- make sure to declare a default for every property that you want animated -- */
		/* Heads facing forward (default) */
		.coin .heads {
			float: none;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 900;
			width: inherit;
			height: inherit;
			
			-webkit-transform: rotateY(0deg);
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: hidden;

			-o-transition: all .4s ease-in-out;
			-ms-transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}
		/* Heads facing backward (flipped) */
		.coin.flip .heads {
			z-index: 900;
			border-color: #eee;

			-webkit-transform: rotateY(180deg);
			
			-moz-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			box-shadow: 0 15px 50px rgba(0,0,0,0.2);
		}
		/* Tails facing backward (default) */
		.coin .tails {
			float: none;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 800;
			width: inherit;
			height: inherit;
			
			-webkit-transform: rotateY(-180deg);
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: hidden;

			-o-transition: all .4s ease-in-out;
			-ms-transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}
		/* Tails facing forward (flipped) */
		.coin.flip .tails {
			z-index: 1000;
			
			-webkit-transform: rotateY(0deg);
			box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-moz-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
		}
		
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			// do stuff
		});
	</script>
</head>

<body>

	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<p class="warning">
		As of <?= date("F jS, Y") ?> the 3D transforms in this demo only work using <a href="http://www.apple.com/safari/">Safari 5</a>, <a href="http://www.google.com/chrome">Chrome</a> 10+ or the <a href="http://nightly.webkit.org/">WebKit Nightly build</a>.
		Browsers without 3D acceleration just switch the z-index. You won't lose any functionality!
	</p>
	
	<p class="instructions">This coin using <code>-webkit-transform: rotateY() and rotateX();</code> with some of the 3D settings: <code>-webkit-transform-style: preserve3d;</code> and <code>-webkit-transform-perspective</code> </p>

	<div class="coin">
		<!-- Each element is a side of the coin. Semantic. -->
		<aside class="heads"><div class="reflection"></div></aside>
		<aside class="tails"><div class="reflection"></div></aside>
	</div>
	
<? include('_footer.php') ?>
