<?
$title = 'Mosaic';
include('_header.php');
?>

	<style>
		#container {
			width: 960px;
		}
		.row {
			
		}
		.panel {
			float: left;
			width: 100px;
			height: 100px;
			margin: 10px;
			position: relative;
		}
		
		/* -- make sure to declare a default for every property that you want animated -- */
		.panel .hover {
			float: none;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 100;
			width: 100px;
			height: 100px;
			border: 0px solid #ccc;
			background: url('images/pink-sky.jpg') no-repeat -100px -100px fixed;

			box-shadow: 0 1px 5px rgba(0,0,0,0.9);
			-moz-box-shadow: 0 1px 5px rgba(0,0,0,0.9);
			-webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.9);

			/* -- transition is the magic sauce for animation -- */
			transition: all .3s ease-out;
			-moz-transition: all .3s ease-out;
			-webkit-transition: all .3s ease-out;
		}
		.panel .hover:hover {
			top: -50px;
			left: -50px;
			z-index: 200;
			width: 200px;
			height: 200px;
			border: 0;

			box-shadow: 0 15px 15px rgba(0,0,0,0);
			-moz-box-shadow: 0 15px 15px rgba(0,0,0,0);
			-webkit-box-shadow: 0 15px 15px rgba(0,0,0,0);
		}
		
		.bg2 .hover {background-image: url('images/tree-sky.jpg'); }
	</style>
	<!-- script src="/js/jquery.sloweach.js"></script>
	<script>
    // switch bg every once in a while
    $(document).ready(function(){
      $('.panel').each(function(){
        $(this).addClass('bg2');
        console.log('FIRE!');
      },100);
    });
	</script -->
</head>

<body>

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<? include('_browsers.php') ?><br />
	
	<div class="row">
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
	</div>
	<div class="row">
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
	</div>
	<div class="row">
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
		<div class="panel"><div class="hover"></div></div>
	</div>
</div>

<? include('_footer.php') ?>