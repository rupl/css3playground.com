<?
$title = 'Hover Panels';
include('_header.php');
?>

	<style type="text/css">
		#container {
			width: 720px;
		}
		.panel {
			float: left;
			width: 200px;
			height: 200px;
			margin: -20px;
			position: relative;
		}
		
		/* -- make sure to declare a default for every property that you want animated -- */
		.panel .hover {
			float: none;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 100;
			width: 200px;
			height: 200px;
			border: 1px solid #aaa;
			border-top: 1px solid #888; 
			border-left: 1px solid #888; 
			background: #777;
			text-align: center;
			
			-o-transform: scale(.7);
			-moz-transform: scale(.7); 
			-webkit-transform: scale(.7);
			transform: scale(.7);

			-moz-box-shadow: inset 1px 2px 8px #222;
			-webkit-box-shadow: inset 1px 2px 8px rgba(0,0,0,0.7);
			box-shadow: inset 1px 2px 8px rgba(0,0,0,0.7);
			

			/* -- transition is the magic sauce for animation -- */
			transition: all .15s ease-out;
			-o-transition: all .15s;
			-moz-transition: all .15s ease-out;
			-webkit-transition: all .15s ease-out;
		}
		.panel .hover:hover {
			z-index: 1000;
			border-color: #bbb;
			border-right: 1px solid #aaa; 
			border-bottom: 1px solid #aaa; 
			

			-o-transform: scale(1);
			-moz-transform: scale(1); 
			-webkit-transform: scale(1);
			transform: scale(1);

			box-shadow: 0 15px 50px rgba(0,0,0,0.3);
			-moz-box-shadow: 0 15px 50px rgba(0,0,0,0.3);
			-webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.3);
		}
		
	</style>
</head>

<body>

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<? include('_browsers.php') ?>
	
	<div class="panel"><div class="hover"></div></div>
	<div class="panel"><div class="hover"></div></div>
	<div class="panel"><div class="hover"></div></div>
	<div class="panel"><div class="hover"></div></div>
	<div class="panel"><div class="hover"></div></div>
	<div class="panel"><div class="hover"></div></div>
	<div class="panel"><div class="hover"></div></div>
	<div class="panel"><div class="hover"></div></div>
</div>

<? include('_footer.php') ?>