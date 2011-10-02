<?
$title = 'Tile';
include('_header.php');
?>

	<style>
		/* This page uses a big photograph as the bg instead of the normal style */
		body {background: url('/images/tile-bg.jpg') no-repeat -10px top; color: #000; width: 1420px; }
		a, p, #other ul li a {color: #000; text-shadow: 1px 1px 1px rgba(255,255,255,0.5); }
		#other ul li a:hover {color: #fff; }
		p.intro {max-width: 1000px; }
		
		/* Set a base element for arranging all the 3D elements */
		div#container {
			-webkit-perspective: 470;
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: visible;
		}
		
		/* Match the photograph's perspective */
		div#floor {
			width: 1776px;
			height: 387px;
			margin-left: -1200px;
			background: #333;

			position: absolute;
			left: 0;
			top: 180px;

			-webkit-transform: rotateX(73deg) rotateY(0deg) rotateZ(.3deg) translate3d(788px, -362px, -30px);
			-webkit-transform-style: preserve-3d;
		}
		
		/* These are the individual tiles, which are rectangular prisms */
		div.panel {
			float: left; 
			width: 434px;
			height: 125px;
			margin: 2px 5px;
			background: #333;

			-webkit-transition: .3s all ease-in-out;
			-webkit-transform-style: preserve-3d;
			-webkit-transform-origin: bottom right;
			-webkit-transform: translate3d(0,0,2px);
		}
		
		/* These rules make the tiles move on mouseover. I set the nth-child() rules to make it visually symmetrical. */
		div.panel:hover {
			-webkit-transform: translate3d(0,0,18px) rotateY(3deg);
		}
		div.panel:nth-child(4n+2),
		div.panel:nth-child(4n+1) {
			-webkit-transform-origin: bottom left;
		}
		div.panel:nth-child(4n+2):hover,
		div.panel:nth-child(4n+1):hover {
			-webkit-transform: translate3d(0,0,18px) rotateY(-3deg);
		}
		
		/* These are the sides of the tiles */
		div.panel div.left {
			width: 126px;
			height: 6px;
			background: #444;
			position: absolute;
			left: 0;
			box-shadow: 0 0 4px #444;

			-webkit-transform-origin: bottom left;
			-webkit-transform: rotateX(90deg) rotateY(90deg) translate3d(-5px, 0, 0);
		}
		div.panel div.right {
			width: 126px;
			height: 6px;
			background: #444;
			position: absolute;
			right: 0;
			box-shadow: 0 0 4px #444;

			-webkit-transform-origin: bottom right;
			-webkit-transform: rotateX(90deg) rotateY(90deg) translate3d(120px, 0, 0);
		}
		div.panel div.front {
			width: inherit;
			height: 6px;
			background: #666;
			position: absolute;
			bottom: 0;
			box-shadow: 0 0 4px #666;

			-webkit-transform-origin: bottom center;
			-webkit-transform: rotateX(90deg) translate3d(0, 0, 0);
		}
		div.panel div.back {
			width: inherit;
			height: 6px;
			background: #666;
			position: absolute;
			top: 0;
			box-shadow: 0 0 4px #666;

			-webkit-transform-origin: top center;
			-webkit-transform: rotateX(90deg) translate3d(0, -6px, 0);
		}
		div.panel div.top {
			width: inherit;
			height: inherit;
			background: url('/images/tile-3.jpg');
		}
		/* Give some tiles a different background to make it look more real */
		div.panel:nth-child(3n) div.top {
			background: url('/images/tile-4.jpg');
		}
		
		/* debugging styles */
		body.wireframe div#floor {
			background: #f00; 
		}
	</style>
</head>

<body class="no-wireframe">

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<p class="intro">This page uses CSS3 3D Transforms to composite elements over a photograph. <code>-webkit-perspective</code>, <code>-webkit-transform-style: preserve3d</code>, <code>-webkit-transform: rotate3d(), transform3d()</code>, and <code>-webkit-transition</code> for animation.</p>
	
	<div id="floor">
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>

			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>

			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
			<div class="panel"><div class="left"></div><div class="right"></div><div class="front"></div><div class="back"></div><div class="top"></div></div>
		</div>
	</div><!-- #floor -->
</div>

<? include('_footer.php') ?>