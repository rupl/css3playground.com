<?
$title = '3D Flip Cards';
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
			margin: 20px;
			position: relative;
			font-size: .8em;
			
			-webkit-perspective: 700;
		}
		/* -- make sure to declare a default for every property that you want animated -- */
		.panel .front {
			float: none;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 900;
			width: inherit;
			height: inherit;
			border: 1px solid #ccc;
			background: #777;
			text-align: center;

			box-shadow: 0 1px 5px rgba(0,0,0,0.9);
			-moz-box-shadow: 0 1px 5px rgba(0,0,0,0.9);
			-webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.9);
			
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: hidden;

			/* -- transition is the magic sauce for animation -- */
			transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
		}
		.panel.flip .front {
			z-index: 900;
			border-color: #eee;

			-webkit-transform: rotateY(180deg);
			
			box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-moz-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
		}
		
		.panel .back {
			float: none;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 800;
			width: inherit;
			height: inherit;
			border: 1px solid #ccc;
			background: #777;
			
			-webkit-transform: rotateY(-180deg);
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: hidden;

			/* -- transition is the magic sauce for animation -- */
			transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
		}
		
		.panel.flip .back {
			z-index: 1000;
			
			-webkit-transform: rotateY(0deg);
			box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-moz-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
		}
		
		.panel .pad {padding: 0 15px; }
		
		.block ol li {text-align: left; margin: 0 0 0 28px; }
		.block .action {display: block; padding: 3px; background: #333; text-align: right; font-size: .8em; opacity: 0; position: absolute; cursor: pointer; -webkit-transition: opacity .2s linear; }
		.block:hover .action {opacity: .7; }
		.panel.flip .action {display: none; }
	
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			
			
			// set up hover panels
			$('.hover').hover(function(){
				$(this).addClass('flip');
			},function(){
				$(this).removeClass('flip');
			});
			
			
			
			// set up click/tap panels
			$('.click').toggle(function(){
				$(this).addClass('flip');
			},function(){
				$(this).removeClass('flip');
			});
			
			
			
			// set up block configuration
			$('.block .action').click(function(){
				$('.block').addClass('flip');
				return false;
			});
			$('.block .edit-submit').click(function(){
				$('.block').removeClass('flip');
				return false;
			});
			
			
			
			// set up contact form link
			$('.contact .action').click(function(){
				$('.contact').addClass('flip');
				return false;
			});
			$('.contact .edit-submit').click(function(){
				$('.contact').removeClass('flip');
				return false;
			});
			
			
		});
	</script>
</head>

<body>

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<p class="warning">
		As of <abbr title="<?= date("Y-m-d") ?>"><?= date("F jS, Y") ?></abbr> the 3D -webkit-transform in this demo only works using <a href="http://www.apple.com/safari/">Safari 5</a> (Mac or iPhone) or the <a href="http://nightly.webkit.org/">WebKit Nightly build</a>.
		Safari 4 and Chrome 4 flip, but not in 3D space. Everything else just switches z-index.
	</p>

	<div class="hover panel"><div class="front"><h2>Mouse Over Me!</h2><p>This can be done using 100% CSS. Most of this other stuff requires some Javascript, although the animation is CSS.</p></div><div class="back"><div class="pad"><h2>check you on the flip side</h2></div></div></div>
	<div class="click panel"><div class="front"><h2>Click/Tap Me!</h2></div><div class="back"><div class="pad"><h2>success!</h2></div></div></div>

	<div class="block panel">
		<div class="front">
			<a class="action">Configure Block</a>
			<h2>Top Sellers</h2>
			<ol>
				<li>Name 1</li>
				<li>Name 2</li>
				<li>Name 3</li>
			</ol>
		</div>
		<div class="back">
			<div class="pad">
				<form action="###" method="post">
					<h3>Nothing will actually change</h3>
					<p><input type="text" name="title" value="Top Sellers" /></p>
					<p>Display <select name="num_items"><option value="0">unlimited</option><option value="1">1</option><option value="2">2</option><option value="3" selected="selected">3</option><option value="4">4</option></select> items</p>
					<input type="submit" class="edit-submit" value="Fake Save Changes" />
				</form>
			</div>
		</div>
	</div>
	<div class="contact panel" style="width: 360px; height: 240px; ">
		<div class="front">
			<h3>Contact Us</h3>
			<address>
				Acme, Co.<br />
				123 Easy St.<br />
				Dallas, TX 75248
			</address>
			<p>Or <a class="action" href="#form">send us a message</a>
		</div>
		<div class="back" id="contact">
			<div class="pad">
				<h3>Send us a Fake Message</h3>
				<form action="###" method="post">
					<p><label for="f-name">Name:</label><input id="f-name" name="f-name" type="text" /></p>
					<p><label for="f-email">Email:</label><input id="f-email" name="f-email" type="text" /></p>
					<p><label for="f-how">How did you find us?</label><select id="f-how" name="f-how"><option value="">- Pick an Option -</option><option value="internet">Internet</option></select></p>
					<p><label for="f-msg">Message:</label><textarea id="f-msg" name="f-msg"></textarea></p>
					<input type="submit" class="edit-submit" value="Fake Send Message" />
				</form>
			</div>
		</div>
	</div>
</div>

<? include('_footer.php') ?>
