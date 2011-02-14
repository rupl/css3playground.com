<?
$title = 'Slinky';
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
			top:  100px;
			left:  200px;
			font-size: .8em;
			
			-moz-transform: rotate(200deg);
			-moz-perspective: 500;
			-webkit-transform: rotate(0);
			-webkit-perspective: 500;
		}
		/* -- make sure to declare a default for every property that you want animated -- */
		.panel .segment {
			float: none;
			position: absolute;
			top: -5px;
			left: -5px;
			z-index: 900;
			width: 100px;
			height: 100px;
			border: 5px solid #bbb;
			
			-o-transform-origin: 0 80%;
			-moz-transform-origin: 0 80%;
			-webkit-transform-origin: 0 85%;

			border-radius: 60px;
			-moz-border-radius: 60px;
			-webkit-border-radius: 60px;
			
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: visible;

			/* initial slinky position */
			-webkit-transform:
				rotateX(-105deg) rotateY(0) rotateZ(50deg)
				translateX(0) translateY(0) translateZ(0);
				
			/* shadows really help define the layers */
			-moz-box-shadow: 0 0 3px #000;
			-webkit-box-shadow: 0 0 3px rgba(0,0,0,0.5);
			box-shadow: 0 0 3px rgba(0,0,0,0.5);
			
			/* -- transition is the magic sauce for animation -- */
			transition: all .5s ease-in-out;
			-moz-transition: all .5s ease-in-out;
			-webkit-transition: all .5s ease-in-out;
		}
		.panel:hover .segment {
		}
		.panel .segment .segment {
			-webkit-transform:
				rotateX(0) rotateY(0) rotateZ(0)
				translateX(0) translateY(0) translateZ(-1px);
		}
		.panel:hover .segment .segment {
			-moz-transform: rotate(6.5deg) skew(-1deg) rotate(4deg);
			-webkit-transform:
				rotateX(0) rotateY(5.1deg) rotateZ(0)
				translateX(-1px) translateY(0) translateZ(-1px);
		}
		
		#rotate .slider {display: inline-block; width: 200px; position: relative; top: 3px; left: 12px; }
	</style>
</head>

<body>

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<p class="warning">
		As of <abbr title="<?= date("Y-m-d") ?>"><?= date("F jS, Y") ?></abbr> the 3D transforms in this demo only work using <a href="http://www.apple.com/safari/">Safari 5</a> or the <a href="http://nightly.webkit.org/">WebKit Nightly build</a>.
		Chrome supports 3D transforms, but only after you type "about:flags" in the address bar and enable "GPU Accelerated Compositing." Browsers without 3D acceleration just make a circular pattern.
	</p>

	<p class="instructions">This slinky uses <code>-webkit-transform: rotateY() and rotateX();</code> with some of the 3D settings: <code>-webkit-transform-style: preserve3d;</code> and <code>-webkit-transform-perspective</code>.</p>

	<div class="panel">
		<div class="segment">
			<div class="segment">
				<div class="segment">
					<div class="segment">
						<div class="segment">
							<div class="segment">
								<div class="segment">
									<div class="segment">
										<div class="segment">
											<div class="segment">
												<div class="segment">
													<div class="segment">
														<div class="segment">
															<div class="segment">
																<div class="segment">
																	<div class="segment">
																		<div class="segment">
																			<div class="segment">
																				<div class="segment">
																					<div class="segment">
																						<div class="segment">
																							<div class="segment">
																								<div class="segment">
																									<div class="segment">
																										<div class="segment">
																											<div class="segment">
																												<div class="segment">
																													<div class="segment">
																														<div class="segment">
																															<div class="segment">
																																<div class="segment">
																																	<div class="segment">
																																		<div class="segment">
																																			<div class="segment">
																																				<div class="segment"></div>
																																			</div>
																																		</div>
																																	</div>
																																</div>
																															</div>
																														</div>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="rotate">
	Rotate the slinky a bit:
	<div class="slider"></div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#rotate .slider').slider({
			animate: 'fast',
			min: 0,
			max: 360,
			orientation: 'horizontal',
			value: 30,
			slide: function(e, ui){
				// console.log(ui);
				$('.panel > .segment').css('-webkit-transform','rotateX(-105deg) rotateY(0) rotateZ('+ui.value+'deg) translateX(0) translateY(0) translateZ(2px)');
			}
		});
	});
</script>

<? include('_footer.php') ?>
