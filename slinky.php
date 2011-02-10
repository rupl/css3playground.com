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
			border: 5px solid #ccc;
			
			-o-transform-origin: 0 80%;
			-moz-transform-origin: 0 80%;
			-webkit-transform-origin: 0 85%;

			border-radius: 60px;
			-moz-border-radius: 60px;
			-webkit-border-radius: 60px;
			
			-webkit-transform:
				rotateX(-105deg) rotateY(0) rotateZ(0deg)
				translateX(0) translateY(0) translateZ(2px);
			-webkit-transform-style: preserve-3d;
			-webkit-backface-visibility: visible;

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
				translateX(-1px) translateY(-1px) translateZ(-1px);
		}
	</style>
</head>

<body>

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>
	<? include('_browsers.php') ?>
	
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

<? include('_footer.php') ?>
