<?php
$title = 'Blur filter';
include('_header.php');
?>

	<style type="text/css">
    body {
      padding: 0;
      overflow: hidden;
    }
    #other li.more,
    #other li.credit {
      color: #999;
    }

    #container {
      padding: 0 2em;
      position: relative;
    }
    div.layer {
      background: #fff;
      color: #000;
      position: absolute;
      border: 10px solid #333;
      border-radius: 20px;

      -webkit-transform: rotateY(0deg);
      -moz-transform: rotateY(0deg);
    }
    div.layer span {
      display: block;
      width: 100px;
      margin: 20px auto 0;
      font-size: 2em;
    }

    div.back {
      width: 400px;
      height: 200px;
      top: 150px;
      left: 200px;
      z-index: 1;
    }
    div.middle {
      width: 580px;
      height: 240px;
      top: 250px;
      left: 100px;
      z-index: 2;
    }
    div.front {
      width: 720px;
      height: 280px;
      top: 350px;
      z-index: 3;
    }
	</style>
  <script>

    $(document).ready(function(){
      $('html').mousemove(function(e){

        // calculate the shadow
        var offset = $('html').offset();
        var YY = e.clientY - offset.top;
        // @TODO: percentage based points to signify top, middle, bottom of browser window.
        var back = 0;
        var middle = 300;
        var front = 500;
        var sizeBack   = Math.abs(back-YY)/40;
        var sizeMiddle = Math.abs(middle-YY)/40;
        var sizeFront  = Math.abs(front-YY)/40;

        // apply blur
        $('.back').css('-webkit-filter',    'blur('+ (sizeBack) +'px)');
        $('.middle').css('-webkit-filter',  'blur('+ (sizeMiddle) +'px)');
        $('.front').css('-webkit-filter',   'blur('+ (sizeFront) +'px)');

      });
    });

  </script>
</head>

<body>

<div id="container">
	<h1><a href="http://css3playground.com">css3</a> // <?= $title ?></h1>

	<p class="instructions">Move your cursor around and watch the depth of field change.<br>
	This demo uses <code>-webkit-filter: blur()</code> and a dash of JS to track your cursor.</p>

  <div class="back layer"><span>Back</span></div>
  <div class="middle layer"><span>Middle</span></div>
  <div class="front layer"><span>Front</span></div>

<? include('_footer.php') ?>
