<?
$title = 'Rolodex';
include('_header.php');
?>

	<style type="text/css">
		body {width: 720px; }
		
		.rolodex {
			margin-top: 100px;
			margin-left: 300px;
			-webkit-perspective: 800px;
			-moz-perspective: 800px;
		}
		.rolodex .vcard {
			width: 360px;
			height: 220px;
			padding: 1em;
			opacity: 1;
			position: absolute;
			background: #f2f2f2; /* Old browsers */
			background: -moz-linear-gradient(top,  #f2f2f2 0%, #898989 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2f2f2), color-stop(100%,#898989)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #f2f2f2 0%,#898989 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #f2f2f2 0%,#898989 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #f2f2f2 0%,#898989 100%); /* IE10+ */
			background: linear-gradient(to bottom,  #f2f2f2 0%,#898989 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f2f2', endColorstr='#898989',GradientType=0 ); /* IE6-9 */

			font-family: "Courier New", monospace;
			font-weight: 700;
			color: #333;
			/*text-shadow: 1px 1px 0 rgba(0,0,0,0.5);*/

			border-radius: 7px;
			box-shadow:
				/* drop-shadow */
				0 0 12px rgba(0,0,0,0.2),
				/* bevel */
				inset 0 2px 2px rgba(255,255,255,0.4),
				/* inner glow */
				inset 0 0 150px rgba(0,0,0,0.4);

			-webkit-transform-origin: bottom center;
			-moz-transform-origin: bottom center;

			-webkit-transform-style: preserve-3d;
			-moz-transform-style: preserve-3d;

			-webkit-transform: rotateX(30deg) translateY(-10px);
			-moz-transform: rotateX(30deg) translateY(-10px);

			-webkit-transition: all .4s ease-in-out;
			-moz-transition: all .4s ease-in-out;
		}

		/*
		 *
		 * any way to simulate a "previous sibling" selector based on :focus?
		 *
		 */
		

		/* Currently selected card */
		.rolodex .vcard:focus {
			-webkit-transform: rotateX(0deg) translateY(-30px);
			-moz-transform: rotateX(0deg) translateY(-30px);

			background: #fff; /* Old browsers */
			background: -moz-linear-gradient(top,  #fff 0%, #939393 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fff), color-stop(100%,#939393)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #fff 0%,#939393 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #fff 0%,#939393 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #fff 0%,#939393 100%); /* IE10+ */
			background: linear-gradient(to bottom,  #fff 0%,#939393 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#939393',GradientType=0 ); /* IE6-9 */
			outline: none;
		}

		/* these have already been seen */
		.rolodex .vcard:focus + .vcard {
			-webkit-transform: rotateX(-30deg) translateZ(10px);
			-moz-transform: rotateX(-30deg) translateZ(10px);

			background: #f7f7f7; /* Old browsers */
			background: -moz-linear-gradient(top,  #f7f7f7 0%, #939393 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7f7f7), color-stop(100%,#939393)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #f7f7f7 0%,#939393 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #f7f7f7 0%,#939393 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #f7f7f7 0%,#939393 100%); /* IE10+ */
			background: linear-gradient(to bottom,  #f7f7f7 0%,#939393 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f7f7', endColorstr='#939393',GradientType=0 ); /* IE6-9 */
		}
		.rolodex .vcard:focus + .vcard + .vcard {
			-webkit-transform: rotateX(-40deg) translateZ(20px);
			-moz-transform: rotateX(-40deg) translateZ(20px);

			background: #f2f2f2; /* Old browsers */
			background: -moz-linear-gradient(top,  #f2f2f2 0%, #898989 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2f2f2), color-stop(100%,#898989)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #f2f2f2 0%,#898989 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #f2f2f2 0%,#898989 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #f2f2f2 0%,#898989 100%); /* IE10+ */
			background: linear-gradient(to bottom,  #f2f2f2 0%,#898989 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f2f2', endColorstr='#898989',GradientType=0 ); /* IE6-9 */
		}
		.rolodex .vcard:focus + .vcard + .vcard + .vcard {
			-webkit-transform: rotateX(-45deg) translateZ(25px);
			-moz-transform: rotateX(-45deg) translateZ(25px);

			background: #ebebeb; /* Old browsers */
			background: -moz-linear-gradient(top,  #ebebeb 0%, #898989 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ebebeb), color-stop(100%,#898989)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #ebebeb 0%,#898989 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #ebebeb 0%,#898989 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #ebebeb 0%,#898989 100%); /* IE10+ */
			background: linear-gradient(to bottom,  #ebebeb 0%,#898989 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebebeb', endColorstr='#898989',GradientType=0 ); /* IE6-9 */
		}
		.rolodex .vcard:focus + .vcard + .vcard + .vcard + .vcard {
			-webkit-transform: rotateX(-48deg) translateZ(27px);
			-moz-transform: rotateX(-48deg) translateZ(27px);

			background: #e7e7e7; /* Old browsers */
			background: -moz-linear-gradient(top,  #e7e7e7 0%, #868686 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e7e7e7), color-stop(100%,#868686)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #e7e7e7 0%,#868686 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #e7e7e7 0%,#868686 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #e7e7e7 0%,#868686 100%); /* IE10+ */
			background: linear-gradient(to bottom,  #e7e7e7 0%,#868686 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e7e7e7', endColorstr='#868686',GradientType=0 ); /* IE6-9 */
		}
		.rolodex .vcard:focus + .vcard + .vcard + .vcard + .vcard + .vcard {
			-webkit-transform: rotateX(-50deg) translateZ(28px);
			-moz-transform: rotateX(-50deg) translateZ(28px);

			background: #e5e5e5; /* Old browsers */
			background: -moz-linear-gradient(top,  #e5e5e5 0%, #848484 100%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e5e5e5), color-stop(100%,#848484)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top,  #e5e5e5 0%,#848484 100%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top,  #e5e5e5 0%,#848484 100%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top,  #e5e5e5 0%,#848484 100%); /* IE10+ */
			background: linear-gradient(to bottom,  #e5e5e5 0%,#848484 100%); /* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e5e5e5', endColorstr='#848484',GradientType=0 ); /* IE6-9 */
		}

	</style>
</head>

<body>

	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<p class="warning">
		As of <?= date("F jS, Y") ?> the 3D transforms in this demo only work using <a href="http://www.apple.com/safari/">Safari 5</a>, <a href="http://www.google.com/chrome">Chrome</a> 10+, the <a href="http://nightly.webkit.org/">WebKit Nightly build</a>, and <a href="http://www.mozilla.org/en-US/firefox/channel/">Firefox 10+</a>.
	</p>
	
	<!--
	The tabindex is "backwards" here so that the increasingly specific adjacent sibling selectors
	listed above get activated one-by-one as the focus moves backwards over the elements.
	-->
	<div class="rolodex">
		<div class="vcard" tabindex="6" contenteditable><span class="fn">Chris Ruppel</span></div>
		<div class="vcard" tabindex="5" contenteditable><span class="fn">Garann Means</span></div>
		<div class="vcard" tabindex="4" contenteditable><span class="fn">Mike Taylor</span></div>
		<div class="vcard" tabindex="3" contenteditable><span class="fn">Brandon Satrom</span></div>
		<div class="vcard" tabindex="2" contenteditable><span class="fn">Estelle Weyl</span></div>
		<div class="vcard" tabindex="1" contenteditable><span class="fn">Cody Lindley</span></div>
	</div>

<? include('_footer.php');
