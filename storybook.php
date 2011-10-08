<?
$title = 'Pop-up Storybook';
include('_header.php');
?>

	<style>
		/* This page uses a big photograph as the bg instead of the normal style */
		body {background: #eee; color: #333; }
		a, p, #other ul li a {color: #333; text-shadow: none; }
		#other ul li.more,
		#other ul li.credit {padding: .5em; margin-right: -.5em; background: rgba(255,255,255,0.5); }
		#other a:hover {color: #fff; }
		
		/* Set a base element for arranging all the 3D elements */
		div#container {
			-webkit-perspective: 470;
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: visible;
		}
		
		/* -- Browser will not crap its pants. Proceed happily -- */
		html.csstransforms3d div#fallback {display: none; }
		
		/* Book covers */
		section {}
		section .cover {}
		section .cover .pages {}
		
		/* Shared Pop-up pieces */
		.pages {}
		
		/* -- Seriously... Go Download Chrome - http://www.google.com/chrome -- */
		html.no-csstransforms3d div#fallback {
			display: block; width: 800px; padding: 2em; background: rgba(255,255,255,0.5); text-shadow: 1px 1px 1px rgba(255,255,255,0.4);
		}

	</style>
</head>

<body class="no-wireframe">

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<p class="intro">This page uses CSS3 3D Transforms to composite elements over a photograph. <code>-webkit-perspective</code>, <code>-webkit-transform-style: preserve3d</code>, <code>-webkit-transform: rotate3d(), transform3d()</code>, and <code>-webkit-transition</code> for animation.</p>

	<div id="book">
		<!-- Instead of pages, our book only has two halves. CSS voxels due in 2018 :p -->
		<section id="left">
			<div class="cover">
				<div class="pages">
					<div class="outer"></div>
					<div class="top"></div>
					<div class="bottom"></div>
				</div><!-- .page -->
			</div><!-- .cover -->
		</section>
		<section id="right">
			<!-- paste everything from LEFT into here -->
		</section>
	</div><!-- #book -->

	<div id="fallback"><b>If you can read this, it means your browser cannot process the 3D transforms on this page.</b> There's no good fallback behavior, so I put this message here to let you know what happened.</div>
</div>

<? include('_footer.php') ?>