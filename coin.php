<?
$title = 'Reflective Coin';
include('_header.php');
?>

	<style type="text/css">
		body {width: 720px; }
		
		/* -- fallback behavior -- */
		html.no-csstransforms3d p#fallback {display: block; float: right; width: 500px; padding-top: 20px; }
		html.no-csstransforms3d div#speed {display: none; }

		/* -- The fun stuff -- */		
		html.csstransforms3d p#fallback {display: none; }
		html.csstransforms3d div#speed {width: 200px; }

		.coin {
			float: left;
			width: 143px;
			height: 143px;
			margin: 0;
			position: relative;
			top: 25px;
			left: 50px;
			
			-webkit-perspective: 500;
		}
		.coin aside {
			background-image: url('/images/coin-sides-24.png');
			background-position: left top;

			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: hidden;

			-webkit-transition: all 1.2s ease-in-out;
			-moz-transition: all 1.2s ease-in-out;
			-ms-transition: all 1.2s ease-in-out;
			-o-transition: all 1.2s ease-in-out;
			transition: all 1.2s ease-in-out;
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
			
			-webkit-transform: rotateX(0deg);
		}
		/* Heads facing backward (flipped) */
		.coin.flip .heads {
			z-index: 900;
			border-color: #eee;

			-webkit-transform: rotateX(180deg);
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
			background-position: left -143px;

			-webkit-transform: rotateX(-180deg);
		}
		/* Tails facing forward (flipped) */
		.coin.flip .tails {
			z-index: 1000;
			
			-webkit-transform: rotateX(0deg);
		}

		/* reflections for heads */
		.reflection {
			position: absolute;
			width: inherit;
			height: inherit;
			opacity: .6;
			background-image: url('/images/reflection.png');
			background-position-x: 0;
			
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: hidden;
		}
		
		.coin .heads .reflection {
			background-position-y: -100px;
			-webkit-mask: url('/images/coin-mask-heads.png') left top;
			-webkit-transition: all .5s ease-in-out;
			-webkit-transition-delay: .25s;
		}
		.coin.flip .heads .reflection {
			background-position-y: 200px;
		}

		.coin .tails .reflection {
			background-position-y: 200px;
			-webkit-mask: url('/images/coin-mask-tails.png') left top;
			-webkit-transition: all .35s ease-in-out;
			-webkit-transition-delay: .65s;
		}
		.coin.flip .tails .reflection {
			background-position-y: -100px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			// Use an event listener to flip the coin so it works on touch
			$('.coin').toggle(function() {
				$(this).addClass('flip');
			}, function() {
				$(this).removeClass('flip');
			});
		});
	</script>
</head>

<body>

	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>

	<p class="instructions"><b>Click or tap the coin. Control the speed of the coin with the slider.</b></p>	
	<p class="instructions">The coin is using <code>-webkit-transform: rotateY() and rotateX();</code> with some of the 3D settings: <code>-webkit-transform-style: preserve3d;</code> and <code>-webkit-transform-perspective</code></p>
	<p class="instructions">The reflections use <code>background-position</code> along with <code>-webkit-transition</code> and <code>-webkit-mask</code> to give the reflection some texture. I haven't figured out how to make it work for both flips.</p>
	<div id="speed"></div>
	<p class="instructions" id="fallback"><b>If you can read this, it means your browser cannot process the 3D transforms on this page.</b> The coin will switch faces with no visual transition.<br><br>If you want to see the goods, download <a href="http://www.apple.com/safari/">Safari 5</a>, <a href="http://www.google.com/chrome">Chrome</a> 10+ or the <a href="http://nightly.webkit.org/">WebKit Nightly build</a>.</p>
	<div class="coin">
		<!-- Each element is a side of the coin. Semantic. -->
		<aside class="heads"><div class="reflection"></div></aside>
		<aside class="tails"><div class="reflection"></div></aside>
	</div>

	<script>
		$('#speed').slider({
			animate: 'fast',
			min: 1,
			max: 10,
			orientation: 'horizontal',
			value: 2,
			slide: function(e, ui){
				var multi = ui.value;
				$('.coin aside')
					.css('-webkit-transition', 'all '+(multi * 0.6)+'s ease-in-out')
					.css('-moz-transition', 'all '+(multi * 0.6)+'s ease-in-out')
					.css('-ms-transition', 'all '+(multi * 0.6)+'s ease-in-out')
					.css('-o-transition', 'all '+(multi * 0.6)+'s ease-in-out')
					.css('transition', 'all '+(multi * 0.6)+'s ease-in-out');
				$('.coin .heads .reflection')
					.css('-webkit-transition', 'all '+(multi * 0.25)+'s ease-in-out')
					.css('-webkit-transition-delay', (multi * 0.125)+'s');
				$('.coin .tails .reflection')
					.css('-webkit-transition', 'all '+(multi * 0.175)+'s ease-in-out')
					.css('-webkit-transition-delay', (multi * 0.325)+'s');
			}
		});
	</script>

<? include('_footer.php') ?>
