<?php
$title = 'Blur filter';
include('_header.php');
?>

	<style type="text/css">
    body {
      padding: 0;
      overflow: hidden;
      background: #012;
    }
    #other li.more,
    #other li.credit {
      color: #999;
    }

    #container {
      padding: 0 2em;
    }
    div.test {
      background: #fff;
      color: #000;
      width: 720px;
      height: 400px;
      
      -webkit-filter: blur(10px);
    }

		/* -- for debugging -- */
		#data {
			display: block;
			
			width: 1000px;
			font-size: .9em;
			position: absolute;
			bottom: 60px;
			right: 20px;
			
			background: rgba(0,0,0,0.3);
			border: 1px solid rgba(0,0,0,0.3);
		}
	</style>
	<script>

    $(document).ready(function(){
      $('html').mousemove(function(e){
		    
		    	// calculate the shadow
		    	var offset = $('html').offset();
			    var XX = e.clientX - offset.left;
			    var YY = e.clientY - offset.top;
			    var hyp = Math.sqrt(XX*XX+YY*YY);
			    var size = Math.ceil(hyp/100);

  				// debug
  	    		$('#data .xx .val').text(XX);
  	    		$('#data .yy .val').text(YY);
  	    		$('#data .hyp .val').text(hyp);
  		    	$('#data .size .val').text(size);
  				//*/

  				// apply spotlight CSS
  				$('.test').css('-webkit-filter', 'blur('+size+'px)');

  				/*
  				// debug
  				$('#data .spotlight .val').text(spotlight);
  				//*/

		    });
		  });

	</script>
</head>

<body>

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>

	<p class="instructions">This demo uses -webkit-filter: blur</p>

  <div class="test">Hello</div>

	<div id="data">
	  <ul>
	    <li class="xx">x: <span class="val"></span></li>
	    <li class="yy">y: <span class="val"></span></li>
	    <li class="hyp">hypotenuse: <span class="val"></span></li>
	    <li class="size">size: <span class="val"></span></li>
	  </ul>
	</div>


<? include('_footer.php') ?>
