<?
$title = '3D Flip Cards';
include('_header.php');
?>

	<style type="text/css">
		body {width: 720px; }
		.panel {
			float: left;
			width: 200px;
			height: 200px;
			margin: 20px;
			position: relative;
			font-size: .8em;
			
			-webkit-perspective: 600px;
			-moz-perspective: 600px;
		}
		/* -- make sure to declare a default for every property that you want animated -- */
		/* -- general styles, including Y axis rotation -- */
		.panel .front {
			float: none;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 900;
			width: inherit;
			height: inherit;
			border: 1px solid #ccc;
			background: #6b7077;
			text-align: center;

			-moz-box-shadow: 0 1px 5px rgba(0,0,0,0.9);
			-webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.9);
			box-shadow: 0 1px 5px rgba(0,0,0,0.9);

			-webkit-transform: rotateX(0deg) rotateY(0deg);
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: hidden;

			-moz-transform: rotateX(0deg) rotateY(0deg);
			-moz-transform-style: preserve-3d;
			-moz-backface-visibility: hidden;

			/* -- transition is the magic sauce for animation -- */
			-o-transition: all .4s ease-in-out;
			-ms-transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}
		.panel.flip .front {
			z-index: 900;
			border-color: #eee;

			-webkit-transform: rotateY(180deg);
			-moz-transform: rotateY(180deg);
			
			-moz-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			box-shadow: 0 15px 50px rgba(0,0,0,0.2);
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
			background: #80868d;
			text-shadow: 1px  1px 1px rgba(0,0,0,0.6); 
			
			-webkit-transform: rotateY(-180deg);
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: hidden;

			-moz-transform: rotateY(-180deg);
			-moz-transform-style: preserve-3d;
			-moz-backface-visibility: hidden;

			/* -- transition is the magic sauce for animation -- */
			-o-transition: all .4s ease-in-out;
			-ms-transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}
		
		.panel.flip .back {
			z-index: 1000;
			
			-webkit-transform: rotateX(0deg) rotateY(0deg);
			-moz-transform: rotateX(0deg) rotateY(0deg);

			box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-moz-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
			-webkit-box-shadow: 0 15px 50px rgba(0,0,0,0.2);
		}
		
		/* -- X axis rotation for click panel -- */
		.click .front {
			cursor: pointer;
			-webkit-transform: rotateX(0deg);
			-moz-transform: rotateX(0deg);
		}
		.click.flip .front {
			-webkit-transform: rotateX(180deg);
			-moz-transform: rotateX(180deg);
		}
		.click .back {
			cursor: pointer;
			-webkit-transform: rotateX(-180deg);
			-moz-transform: rotateX(-180deg);
		}
		.click.flip .back {
			-webkit-transform: rotateX(0deg);
			-moz-transform: rotateX(0deg);
		}

    /* -- contact panel -- */
    .contact {
      width: 290px;
      height: 240px;
    }
		
		/* -- diagonal axis rotation -- */
		.diagonal .front {
			-webkit-transform: rotate3d(45,45,0,0deg);
			-moz-transform: rotate3d(45,45,0,0deg);
		}
		.diagonal .front:hover {
			/* for the patient :) */
			-webkit-transition-duration: 10s;
			-webkit-transition-delay: 0s;

			-webkit-transform: rotate3d(45,45,0,-36deg);
			-moz-transform: rotate3d(45,45,0,-36deg);
		}
		.diagonal.flip .front,
		.diagonal.flip .front:hover {
			-webkit-transform: rotate3d(-45,-45,0,150deg);
			-moz-transform: rotate3d(-45,-45,0,150deg);

			-o-transition: all .4s ease-in-out;
			-ms-transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}
		.diagonal .back {
			-webkit-transform: rotate3d(45,45,0,-180deg);
			-moz-transform: rotate3d(45,45,0,-180deg);
		}
		.diagonal.flip .back {
			-webkit-transform: rotate3d(45,45,0,-30deg);
			-moz-transform: rotate3d(45,45,0,-30deg);
		}

    /* -- swing like a gate -- */
    .swing .front,
    .swing .back {
      width: 140px;
      -webkit-backface-visibility: visible;
         -moz-backface-visibility: visible;
      -webkit-transition-duration: 1s;
         -moz-transition-duration: 1s;
      -webkit-transform-origin: 170px 0;
         -moz-transform-origin: 170px 0;
    }
    .swing .front {
      -webkit-transform: rotateY(0deg);
         -moz-transform: rotateY(0deg);
    }
    .swing .back {
      background-color: #555; /* hiding this side, so get darker */
      -webkit-transform: rotateY(-180deg) translateX(198px);
         -moz-transform: rotateY(-180deg) translateX(198px);
    }

    .swing.flip .front {
      background-color: #222; /* hiding this side, so get darker */
      -webkit-transform: rotateY(180deg);
         -moz-transform: rotateY(180deg);
    }
    .swing.flip .back {
      background-color: #80888f;
      -webkit-transform: rotateY(0deg) translateX(198px);
         -moz-transform: rotateY(0deg) translateX(198px);
    }
		
		
		/* -- cosmetics -- */
		.panel .pad {padding: 0 15px; }
		.panel.flip .action {display: none; }
		.block ol li {text-align: left; margin: 0 0 0 28px; }
		.block .action {display: block; padding: 3px; background: #333; text-align: right; font-size: .8em; opacity: 0; position: absolute; cursor: pointer; -webkit-transition: opacity .2s linear; }
		.block:hover .action {opacity: .7; }
		.circle div {border-radius: 100px; }
		.circle div h2 {padding-top: 3em; text-align: center; }
		
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			
			// set up hover panels
			// although this can be done without JavaScript, we've attached these events
			// because it causes the hover to be triggered when the element is tapped on a touch device
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
			});
			$('.block .edit-submit').click(function(e){
				$('.block').removeClass('flip');
				
				// why not update that list for fun?
				$('#list-title').text($('#form_title').val());
				$('#list-items').empty();
				for (var num = 1; num <= $('#form_items').val(); num++) {
					$('#list-items').append('<li>Name '+num+'</li>');
				}
				e.preventDefault();
			});
			
			// set up contact form link
			$('.contact .action').click(function(e){
				$('.contact').addClass('flip');
				e.preventDefault();
			});
			$('.contact .edit-submit').click(function(e){
				$('.contact').removeClass('flip');
				// just for effect we'll update the content
				e.preventDefault();
			});
			
		});
	</script>
</head>

<body>

	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<p class="warning">
		As of <?= date("F jS, Y") ?> the 3D transforms in this demo only work using <a href="http://www.apple.com/safari/">Safari 5</a>, <a href="http://www.google.com/chrome">Chrome</a> 10+, the <a href="http://nightly.webkit.org/">WebKit Nightly build</a>, and <a href="http://www.mozilla.org/en-US/firefox/channel/">Firefox 10+</a>.
		Browsers without 3D acceleration just switch the z-index. You won't lose any functionality!
	</p>
	
	<p class="instructions">
	 These cards are using <code>-webkit-transform: rotateY() and rotateX();</code> with some of the 3D settings:
	 <code>-webkit-transform-style: preserve3d;</code> and <code>-webkit-transform-perspective</code>.<br>
	 Mozilla browsers are using the <code>-moz-transform</code> equivalents.
	</p>

	<div class="hover panel">
		<div class="front">
		  <div class="pad">
        <h2>Mouse Over Me!</h2>
        <p>
          The effect on this box can be done using 100% CSS.<br><br>
          The other boxes all require some Javascript, but the animation is driven by CSS3.
        </p>
			</div>
		</div>
		<div class="back">
			<div class="pad">
				<h2>check you on the flip side</h2>
			</div>
		</div>
	</div>

	<div class="contact panel">
		<div class="front">
			<h3>Contact Us</h3>
			<address>
				Acme, Co.<br />
				123 Easy St.<br />
				Austin, TX 78731
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

	<div class="click panel circle">
		<div class="front">
			<h2>Click or tap this circle!</h2>
		</div>
		<div class="back">
			<h2>Tap Again!</h2>
		</div>
	</div>

	<div class="block panel">
		<div class="front">
			<a class="action">Configure Block</a>
			<h2 id="list-title">Top Sellers</h2>
			<ol id="list-items">
				<li>Name 1</li>
				<li>Name 2</li>
				<li>Name 3</li>
			</ol>
		</div>
		<div class="back">
			<div class="pad">
				<form action="###" method="post">
					<h3>Edit List</h3>
					<p><input type="text" name="form_title" id="form_title" value="Top Sellers" /></p>
					<p>Display <select name="form_items" id="form_items"><option value="1">1</option><option value="2">2</option><option value="3" selected="selected">3</option><option value="4">4</option><option value="5">5</option></select> items</p>
					<input type="submit" class="edit-submit" value="Save Changes" />
				</form>
			</div>
		</div>
	</div>

	<div class="click diagonal panel">
		<div class="front">
			<h2><br>
			Click or tap for<br>
			Diagonal Rotation</h2>
		</div>
		<div class="back">
			<div class="pad">
				<h2>like a diamond in the rough</h2>
				<p><small>yes, I'm a little crooked</small></p>
			</div>
		</div>
	</div>

  <div class="click swing panel">
    <div class="front">
      <h2>Swing like a gate</h2>
    </div>
    <div class="back">
      <div class="pad">
      <h2>Any axis is possible</h2>
      </div>
    </div>
  </div>

<? include('_footer.php') ?>
