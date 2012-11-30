<?
$title = 'Rolodex';
include('_header.php');
?>

	<style type="text/css">
		body {width: 720px; }
		
		.rolodex {
			margin-left: 200px;
			-webkit-perspective: 600px;
		}
		.rolodex .vcard {
			width: 200px;
			height: 300px;
			background: #eee;
			opacity: 0;
			position: absolute;
			color: #333;
			box-shadow: 2px solid rgba(0,0,0,0.4);
			-webkit-transform-origin: bottom center;
			-webkit-transform-style: preserve-3d;
			-webkit-transition: all .4s ease-in-out;
		}
		/* These are there so you can "flip" past the last card */
		.rolodex .hidden {
			visibility: hidden;
		}

		/*
		 *
		 * any way to simulate a "previous sibling" selector based on :focus?
		 *
		 */

		.rolodex > .vcard {
			-webkit-transform: rotateX(60deg);
		    opacity: .5;
		}

		/* Cards yet to be selected */
		

		/* Currently selected card */
		.rolodex > .vcard:focus {
			-webkit-transform: rotateX(0deg);
		    opacity: 1;
		}

		/* these have already been seen */
		.rolodex > .vcard:focus + .vcard {
			-webkit-transform: rotateX(-50deg);
		    opacity: .9;
		}
		.rolodex > .vcard:focus + .vcard + .vcard {
			-webkit-transform: rotateX(-70deg);
		    opacity: .8;
		}
		.rolodex > .vcard:focus + .vcard + .vcard + .vcard {
			-webkit-transform: rotateX(-90deg);
		    opacity: .7;
		}
		.rolodex > .vcard:focus + .vcard + .vcard + .vcard + .vcard {
			-webkit-transform: rotateX(-105deg);
		    opacity: .6;
		}
		.rolodex > .vcard:focus + .vcard + .vcard + .vcard + .vcard + .vcard {
			-webkit-transform: rotateX(-125deg);
		    opacity: .5;
		}

	</style>
</head>

<body>

	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<p class="warning">
		As of <?= date("F jS, Y") ?> the 3D transforms in this demo only work using <a href="http://www.apple.com/safari/">Safari 5</a>, <a href="http://www.google.com/chrome">Chrome</a> 10+, the <a href="http://nightly.webkit.org/">WebKit Nightly build</a>, and <a href="http://www.mozilla.org/en-US/firefox/channel/">Firefox 10+</a>.
		Browsers without 3D acceleration just switch the z-index. You won't lose any functionality!
	</p>
	
	<div class="rolodex">
		<div class="vcard" tabindex="6"><span class="fn">Chris Ruppel</span></div>
		<div class="vcard" tabindex="5"><span class="fn">Garann Means</span></div>
		<div class="vcard" tabindex="4"><span class="fn">Mike Taylor</span></div>
		<div class="vcard" tabindex="3"><span class="fn">Brandon Satrom</span></div>
		<div class="vcard" tabindex="2"><span class="fn">Estelle Weyl</span></div>
		<div class="vcard" tabindex="1"><span class="fn">Cody Lindley</span></div>
	</div>

<? include('_footer.php');
